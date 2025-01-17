<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "categories_product".
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $title
 *
 * @property CategoryProduct $parent
 * @property CategoryProduct[] $children
 */
class CategoryProduct extends ActiveRecord
{
    public const STATUS_ON = 'on';
    public const STATUS_OFF = 'off';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 100],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryProduct::class, 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'title' => 'Title',
        ];
    }

    /**
     * Gets query for [[Parent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParent(): \yii\db\ActiveQuery
    {
        return $this->hasOne(CategoryProduct::class, ['id' => 'parent_id']);
    }

    /**
     * Gets query for [[Categories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChildren(): \yii\db\ActiveQuery
    {
        return $this->hasMany(CategoryProduct::class, ['parent_id' => 'id']);
    }

    public static function find()
    {
        return new CategoryProductQuery(get_called_class());
    }
}
