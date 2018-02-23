<?php

namespace app\controllers;
use app\models\Page;
use app\models\Category;
use yii\data\Pagination;
use Yii;
use yii\web\HttpException;




class CategoryController extends AppController
{
    public $data;
    public function actionIndex($id)
    {
//        Достаем из базы данных перечень всех категорий
        $category = Category::find()->where(['id'=>$id])->asArray()->one();
//        Проверяем тип категории, если не равляется "dinamic" - то выбрасываем ошибку
        if($category[type] !== 'dinamic') throw new HttpException(404, 'Такой катоегории нет');

//        Выводим перечень страниц категории с пагинацией
        $query = Page::find()->select('id, title, text')->where(['category_id' => $id]);
        $posts = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $pages = $query->offset($posts->offset)->limit($posts->limit)->all();

//        Задаем мета теги для страницы
        $this->setMeta('Категории' . $category->title, $category->keywords, $category->description);


        return $this->render('index', compact('pages', 'posts'));

    }
}
