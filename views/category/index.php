<?php
use yii\widgets\Pjax;
?>
<?php Pjax::begin() ?>
<?php if(!empty($pages)): ?>
    <?php foreach ($pages as $page): ?>

        <div class="panel-panel-default">
            <h3 class="panel-title"><?=$page->title ?></h3>
        </div>
        <div class="panel-body">
            <?= $page->text ?>
        </div>

    <?php endforeach; ?>
    <?=\yii\widgets\LinkPager::widget(['pagination' => $posts]) ?>
<?php  endif;?>
<?php Pjax::end(); ?>