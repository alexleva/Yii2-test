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
    public function safeUp()
    {
        $this->createTable('page', [
            'id' => $this->bigPrimaryKey(),
            'name' => $this->string(100),
            'text' => $this->text(),
            'url' => $this->string(100),
            'category_id' => $this->integer(11)->notNull(),
            'category_name' => $this->string(10)
        ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');

        $this->batchInsert('page', ['name', 'text', 'url', 'category_id', 'category_name'], [
            ['iPhone', 'Текст страницы №1', 'page1', 1, 'Phone'],
            ['Meizu', 'Текст страницы №2', 'page2', 1, 'Phone'],
            ['Pixel', 'Текст страницы №3', 'page3', 1, 'Phone'],
            ['packard', 'Текст страницы №4', 'page4', 2, 'Computer'],
            ['asus', 'Текст страницы №5', 'page5', 2, 'Computer'],
            ['Motorolla', 'Текст страницы №6', 'page6', 1, 'Phone'],
            ['Xiaomi', 'Текст страницы №7', 'page7', 1, 'Phone'],
            ['Vertu', 'Текст страницы №8', 'page8', 1, 'Phone'],
            ['dell', 'Текст страницы №9', 'page9', 2, 'Computer'],
            ['IphoneX', 'Текст страницы №10', 'page10', 1, 'PhonePhone'],
            ['Samsung', 'Текст страницы №11', 'page11', 1, 'Phone'],
            ['macbook', 'Текст страницы №12', 'page12', 2, 'Computer'],
            ['UAH', 'Текст страницы №13', 'page13', 3, 'Valut'],
            ['Football', 'Текст страницы №14', 'page14', 4, 'Sport'],
            ['MMA', 'Текст страницы №15', 'page15', 4, 'Sport'],
            ['ruble', 'Текст страницы №16', 'page16', 3, 'Valut'],
            ['hp', 'Текст страницы №17', 'page17', 2, 'Computer'],
            ['LeEco', 'Текст страницы №18', 'page18', 1, 'Phone'],
            ['imac', 'Текст страницы №19', 'page19', 2, 'Computer'],
            ['surface', 'Текст страницы №20', 'page20', 2, 'Computer']
        ]);

        $this->addForeignKey('fk_category_page','page','category_id','category','id' );



    }

    /**
     * @inheritdoc
     */

    public function safeDown()
    {
        $this->dropTable('page');
    }
}
