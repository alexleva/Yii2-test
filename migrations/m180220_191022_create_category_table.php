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
            'name' => $this->string(),
            'text' => $this->text(),
            'url' => $this->string()->notNull(),
            'type' => $this->string(),
        ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');
        $this->batchInsert('category', ['name', 'text', 'url', 'type'], [
            ['Phone', 'Страницы категории №1', 'Phone', 'dinamic'],
            ['Computer', 'Страницы категории №2', 'Computer', 'dinamic'],
            ['Valut', 'Страницы категории №3', 'Valut', 'static'],
            ['Sport', 'Страницы категории №4', 'Sport', 'static']
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
