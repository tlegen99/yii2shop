<?php

namespace frontend\widgets\CategoryProductWidget;

use common\models\CategoryProduct;
use yii\base\Widget;

class CategoryProductWidget extends Widget
{
    public function run()
    {
        $categories = CategoryProduct::find()->all();

        return $this->render('category-menu', ['categories' => $categories]);
    }
}