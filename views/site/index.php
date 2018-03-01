<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Категории</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach ($categories as $category): ?>
            <div class="col-lg-4">
                <?php if($category[type] == 'dinamic'): ?>
                <h2 class="text-success"><?= $category->name ?></h2>
                    <?php endif;?>
                <?php if($category[type] == 'static'): ?>
                    <h2 class="text-danger"><?= $category->name ?></h2>
                <?php endif;?>

                <p><a class="btn btn-default" href="<?=Url::to([$category[name]]);  ?>">Перейти к категории &raquo;</a></p>

            </div>
            <?endforeach; ?>
        </div>

    </div>
</div>
