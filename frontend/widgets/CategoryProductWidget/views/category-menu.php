<?php

/**
 * @var View $this
 * @var CategoryProduct[] $categories
 */

use common\models\CategoryProduct;
use yii\web\View;
?>

<!-- CATEGORY-MENU-LIST START -->
<div class="left-category-menu hidden-sm hidden-xs">
    <div class="left-product-cat">
        <div class="category-heading">
            <h2>categories</h2>
        </div>
        <div class="category-menu-list">
            <ul>
                <?php /** @var CategoryProduct $category */
                foreach ($categories as $category): ?>
                <li <?= $category->children ? 'class="arrow-plus"' : ''; ?>>
                    <a href="#"><?= $category->title ?></a>
                    <?= $this->render('_partials/category-child', ['categoryChildren' => $category->children]); ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!-- END CATEGORY-MENU-LIST -->