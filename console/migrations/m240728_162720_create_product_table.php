<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m240728_162720_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'name' => $this->string(255)->notNull(),
            'image' => $this->string(60),
            'description' => $this->text(),
            'price' => $this->decimal(10, 2)->notNull(),
            'old_price' => $this->decimal(10, 2)->notNull(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        // creates index for column `category_id`
        $this->createIndex(
            'idx-product-category_id',
            'product',
            'category_id'
        );

        // add foreign key for table `{{%category}}`
        $this->addForeignKey(
            'fk-product-category_id',
            'product',
            'category_id',
            'categories_product',
            'id',
            'CASCADE'
        );

        $this->batchInsert('product', ['category_id', 'name', 'image', 'description', 'price', 'old_price'], [
            [2, 'Xiaomi 12 mega Max', 'image_xiaomi.jpg', 'test text for Xiaomi', 19000, 23000],
            [2, 'Iphone 11', 'image_iphone.jpg', 'test text for Iphone', 56000, 60000],
            [7, 'Ультрабук Хонор', 'image_buck_honor.jpg', 'test text for Ультрабук Хонор', 80000, 95000],
            [11, 'LED Телевизор Xiaomi', 'image_led_tele_xiaomi.jpg', 'test text for LED Телевизор Xiaomi', 24000, 30000],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
