<?php

namespace frontend\widgets\CategoryProductWidget;

use common\models\CategoryProduct;
use yii\base\Widget;

class CategoryProductWidget extends Widget
{
    public $parentId = null;

    public function run()
    {
        $categories = CategoryProduct::find()->where(['parent_id' => $this->parentId])->all();

        return $this->render('category-menu',
            ['categories' => $categories]
        );
    }
}