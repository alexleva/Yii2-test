<?php

namespace app\controllers;

use app\models\Page;
use yii\web\HttpException;

class PageController extends AppController
{
    public function actionIndex($id)
    {
//        Достаем из базы данных перечень всех категорий
        $page = Page::find()->where(['id'=>$id])->one();
//        Проверяем тип категории, если не равляется "dinamic" - то выбрасываем ошибку
        if(empty($page)) throw new HttpException(404, 'Такой страницы нет');
//        Задаем мета теги для страницы
        $this->setMeta('Страница' . $category->name, $category->keywords, $category->description);
        return $this->render('index', compact('page', 'id'));

    }



}
