<?php
/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 21.02.2018
 * Time: 17:03
 */

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller
{
    protected  function  setMeta($title = null, $keywords = null, $description = null)
    {
//        Задаем мета теги для страницы
        $this->view->title = $title;
        $this->view->registerMetaTag(['name'=>'keywords','content'=>"$keywords"]);
        $this->view->registerMetaTag(['name'=>'description','content'=>"$description"]);

    }

}