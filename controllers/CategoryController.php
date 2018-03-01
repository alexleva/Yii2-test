<?php

namespace app\controllers;
use app\models\Page;
use app\models\Category;
use yii\data\Pagination;
use yii\web\HttpException;
use yii\data\ActiveDataProvider;




class CategoryController extends AppController
{
    public function actionIndex($url)
    {
//        Достаем из базы данных перечень всех категорий
        $category = Category::find()->where(['url'=>$url])->asArray()->one();
//        Проверяем тип категории, если не равляется "dinamic" - то выбрасываем ошибку
        if($category[type] !== 'dinamic') throw new HttpException(404, 'Такой катоегории нет');


//        Выводим перечень страниц категории с пагинацией
//        $query = Page::find()->where(['category_id' => $category]);
//        $posts = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'pageSizeParam' => false, 'forcePageParam' => false]);
//        $pages = $query->offset($posts->offset)->limit($posts->limit)->all();

        $dataProvider = new ActiveDataProvider([
            'query' => Page::find()->where(['category_id' => $category]),
            'pagination' => [
                'pageSize' => 3
            ],
        ]);

//        Задаем мета теги для страницы
        $this->setMeta('Категории' . $category->title, $category->keywords, $category->description);
        $this->view->title = 'Pages list';


        return $this->render('index', ['pages', 'posts', 'category', 'dataProvider' => $dataProvider]);

    }
}
