<?php
/** @var yii\web\View $this */

use frontend\widgets\CategoryProductWidget\CategoryProductWidget;

$this->title = 'My Yii Application';
?>

<!-- Category slider area start -->
<div class="category-slider-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?= CategoryProductWidget::widget() ?>
            </div>
            <div class="col-md-9">
                <!-- slider -->
                <div class="slider-area">
                    <div class="bend niceties preview-1">
                        <div id="ensign-nivoslider" class="slides">
                            <img src="images/sliders/slider-1/bg1.jpg" alt="Malias" title="#slider-direction-1"/>
                            <img src="images/sliders/slider-1/bg2.jpg" alt="Malias" title="#slider-direction-2"/>
                            <img src="images/sliders/slider-1/bg3.jpg" alt="Malias" title="#slider-direction-3"/><!--
									<img src="img/sliders/slider-1/bg4.jpg" alt="" title="#slider-direction-4"/>  -->
                        </div>
                        <!-- direction 1 -->
                        <div id="slider-direction-1" class="t-lfr slider-direction">
                            <div class="slider-progress"></div>
                            <!-- layer 1 -->
                            <div class="layer-1-1 ">
                                <h1 class="title1">LUMIA 888 DESIGN</h1>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2">
                                <p class="title2">Elegant design for business</p>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3">
                                <h2 class="title3">$966.82</h2>
                            </div>
                            <!-- layer 4 -->
                            <div class="layer-1-4">
                                <a href="#" class="title4">shopping now</a>
                            </div>
                        </div>
                        <!-- direction 2 -->
                        <div id="slider-direction-2" class="slider-direction">
                            <div class="slider-progress"></div>
                            <!-- layer 1 -->
                            <div class="layer-2-1">
                                <h1 class="title1">WATERPROOF SMARTPHONE</h1>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2-2">
                                <p class="title2">RODUCTS ARE EYE-CATCHING DESIGN. YOU CAN TAKE PHOTOS EVEN WHEN Y</p>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-2-3">
                                <a href="#" class="title3">shopping now</a>
                            </div>
                        </div>
                        <!-- direction 3 -->
                        <div id="slider-direction-3" class="slider-direction">
                            <div class="slider-progress"></div>
                            <!-- layer 1 -->
                            <div class="layer-3-1">
                                <h2 class="title1">BUY AIR LACOTE</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-3-2">
                                <h1 class="title2">SUPER TABLET, SUPER GIFT</h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-3-3">
                                <p class="title3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                            <!-- layer 4 -->
                            <div class="layer-3-4">
                                <a href="#" class="title4">shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider end-->
            </div>
        </div>
    </div>
</div>
<!-- Category slider area End -->
