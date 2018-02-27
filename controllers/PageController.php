<?php

namespace app\controllers;

use app\models\Page;
use yii\web\HttpException;

class PageController extends AppController
{
    public function actionIndex($name)
    {

        $page = Page::find()->where(['name'=>$name])->one(); // Достаем из базы данных перечень всех категорий
         if(empty($page)) throw new HttpException(404, 'Такой страницы нет');    // Проверяем тип категории, если не равляется "dinamic" - то выбрасываем ошибку
        $this->setMeta('Страница' . $category->name, $category->keywords, $category->description);  // Задаем мета теги для страницы
        return $this->render('index', compact('page'));

    }



}
