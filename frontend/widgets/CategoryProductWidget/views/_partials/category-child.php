<?php
/* @var yii\web\View $this */
/* @var CategoryProduct[] $categoryChildren */

use common\models\CategoryProduct;

?>

<?php if ($categoryChildren): ?>
    <div class="cat-left-drop-menu">
        <div class="cat-left-drop-menu-left">
            <ul>
                <?php foreach ($categoryChildren as $categoryChild): ?>
                    <li><a href="#"><?= $categoryChild->title ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>