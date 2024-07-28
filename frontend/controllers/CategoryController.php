<?php

namespace frontend\controllers;

use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionView($id)
    {
        return $this->render('view');
    }
}