<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Page extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'page';
    }

    public function getCategories() {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function rules()
    {
        return [
            [['title', 'text', 'url', 'type'], 'required'],
            [['title', 'text', 'url', 'type'], 'string', 'max' => 255],
            [['title'], 'unique'],
            [['text'], 'unique'],
            [['url'], 'unique'],
            [['category_id'], 'unique', 'integer'],
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
