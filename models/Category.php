<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class Category extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getPages() {
        return $this->hasMany(Page::className(), ['category_id' => 'id']);
    }

    public function rules()
    {
        return [
            [['title', 'text', 'url', 'type'], 'required'],
            [['title', 'text', 'url', 'type'], 'string', 'max' => 255],
            [['title'], 'unique'],
            [['text'], 'unique'],
            [['url'], 'unique'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'url' => 'Url',
            'type' => 'Type',
        ];
    }

}
