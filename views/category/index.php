<?php
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\widgets\ListView;
$string = <<<HTML

<h3>$model->name</h3>
HTML;
?>
<?php Pjax::begin() ?>
<?=


ListView::widget([
    'dataProvider' => $dataProvider,
    'options' => [
            'tag' => 'div',

    ],
    'itemOptions' => [
        'tag' => 'div',
    ],
    'itemView' => function ($model, $key, $index, $widget) {
        // or just do some echo
        echo "<h3 class='panel-title'>" . "<a href='" . Url::to($model->category_name . '/' . $model->name) . "'>" . $model->name . '</a>' . '</h3>' . '<br>';
        ;
    },

]);
?>
<?php if(!empty($pages)): ?>
    <?php foreach ($pages as $page): ?>
        <div class="panel-panel-default">
            <h3 class="panel-title"><a href="<?= Url::to($category[name] . '/' . $page->name);?>"><?=$page->name ?></h3></a>
        </div>
        <div class="panel-body">
            <?= $page->text ?>

        </div>

    <?php endforeach; ?>
    <?=\yii\widgets\LinkPager::widget(['pagination' => $posts]) ?>
<?php  endif;?>
<?php Pjax::end(); ?>