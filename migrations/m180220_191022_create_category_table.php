<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180220_191022_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->bigPrimaryKey(),
            'title' => $this->string(),
            'text' => $this->text(),
            'url' => $this->string(),
            'type' => $this->string(),
        ]);
        $this->batchInsert('category', ['title', 'text', 'url', 'type'], [
            ['Категория №1', 'Страницы категории №1', '1', 'dinamic'],
            ['Категория №2', 'Страницы категории №2', '2', 'dinamic'],
            ['Статическая категория №3', 'Страницы категории №3', '3', 'static'],
            ['Статическая категория №4', 'Страницы категории №4', '4', 'static']
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
