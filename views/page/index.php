<?= $page->id?>


<div class="panel-panel-default">
    <h3 class="panel-title"><p> <strong><?= $page->title ?></strong></p></h3>
</div>
<div class="panel-body">
    <?= $page->text ?>
    <br>
    <br>
    <p>Id страницы: <strong><?= $page->id ?></strong> </p>
    <p>Url страницы: <strong><?= $page->url ?></strong></p>
</div>