<?php

/**
 * @var View $this
 * @var array $categories
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
                    <?php if ($category->getChild()): ?>
                        <li class="arrow-plus">
                            <a href="#">Cameras & Photography</a>
                            <div class="cat-left-drop-menu">
                                <div class="cat-left-drop-menu-left">
                                    <a class="menu-item-heading" href="#">Handbags</a>
                                    <ul>
                                        <li><a href="#">Blouses And Shirts</a></li>
                                        <li><a href="#">Clutches</a></li>
                                        <li><a href="#">Cross Body</a></li>
                                        <li><a href="#">Satchels</a></li>
                                        <li><a href="#">Sholuder</a></li>
                                        <li><a href="#">Toter</a></li>
                                    </ul>
                                </div>
                                <div class="cat-left-drop-menu-left">
                                    <a class="menu-item-heading" href="#">Tops</a>
                                    <ul>
                                        <li><a href="#">Evening</a></li>
                                        <li><a href="#">Long Sleeved</a></li>
                                        <li><a href="#">Short Sleeved</a></li>
                                        <li><a href="#">Sleeveless</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                        <li><a href="#">Tanks And Camis</a></li>
                                    </ul>
                                </div>
                                <div class="cat-left-drop-menu-left">
                                    <a class="menu-item-heading" href="#">Dresses</a>
                                    <ul>
                                        <li><a href="#">Belts</a></li>
                                        <li><a href="#">Cocktail</a></li>
                                        <li><a href="#">Day</a></li>
                                        <li><a href="#">Evening</a></li>
                                        <li><a href="#">Sundresses</a></li>
                                        <li><a href="#">Sweater</a></li>
                                    </ul>
                                </div>
                                <div class="cat-left-drop-menu-left">
                                    <a class="menu-item-heading" href="#">Accessories</a>
                                    <ul>
                                        <li><a href="#">Bras</a></li>
                                        <li><a href="#">Hair Accessories</a></li>
                                        <li><a href="#">Hats And Gloves</a></li>
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">Scarves</a></li>
                                        <li><a href="#">Small Leathers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    <?php else: ?>
                        <li><a href="#">Laptop & Computer</a></li>
                    <?php endif; ?>
                <?php endforeach; ?>

                <!-- MENU ACCORDION START -->
                <li class=" rx-child">
                    <a href="#">Books</a>
                </li>
                <li class=" rx-parent">
                    <a class="rx-default">
                        More categories <span class="cat-thumb  fa fa-plus"></span>
                    </a>
                    <a class="rx-show">
                        close menu <span class="cat-thumb  fa fa-minus"></span>
                    </a>
                </li>
                <!-- MENU ACCORDION END -->
            </ul>
        </div>
    </div>
</div>
<!-- END CATEGORY-MENU-LIST -->