<?php

namespace common\models;

use yii\db\ActiveQuery;

class CategoryProductQuery extends ActiveQuery
{

    public function byStatusOn(): CategoryProductQuery
    {
        return $this->andWhere('status', CategoryProduct::STATUS_ON);
    }
}