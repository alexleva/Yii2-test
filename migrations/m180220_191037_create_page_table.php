<?php

use yii\db\Migration;

/**
 * Handles the creation of table `page`.
 */
class m180220_191037_create_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('page', [
            'id' => $this->bigPrimaryKey(),
            'name' => $this->string(),
            'text' => $this->text(),
            'url' => $this->string(),
            'category_id' => $this->integer(),
        ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');
        $this->batchInsert('page', ['name', 'text', 'url', 'category_id'], [
            ['Iphone', 'Текст страницы №1', 'page1', 1],
            ['Meizu', 'Текст страницы №2', 'page2', 1],
            ['Pixel', 'Текст страницы №3', 'page3', 1],
            ['packard', 'Текст страницы №4', 'page4', 2],
            ['asus', 'Текст страницы №5', 'page5', 2],
            ['Motorolla', 'Текст страницы №6', 'page6', 1],
            ['Xiaomi', 'Текст страницы №7', 'page7', 1],
            ['Vertu', 'Текст страницы №8', 'page8', 1],
            ['dell', 'Текст страницы №9', 'page9', 2],
            ['IphoneX', 'Текст страницы №10', 'page10', 1],
            ['Samsung', 'Текст страницы №11', 'page11', 1],
            ['macbook', 'Текст страницы №12', 'page12', 2],
            ['UAH', 'Текст страницы №13', 'page13', 3],
            ['Football', 'Текст страницы №14', 'page14', 4],
            ['MMA', 'Текст страницы №15', 'page15', 4],
            ['ruble', 'Текст страницы №16', 'page16', 3],
            ['hp', 'Текст страницы №17', 'page17', 2],
            ['LeEco', 'Текст страницы №18', 'page18', 1],
            ['imac', 'Текст страницы №19', 'page19', 2],
            ['surface', 'Текст страницы №20', 'page20', 2]
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('page');
    }
}
