<?php
/**
 * Created by PhpStorm.
 * User: chenwanyi
 * Date: 2016/11/4
 * Time: 上午12:08
 * 商品列表
 */

namespace app\controllers;

use yii\web\Controller;


class ProductController extends Controller{

    //public $layout = false;
    public function actionIndex(){

        $this->layout = "layout2";
        return $this->render("index");
    }

    public function actionDetail(){

        $this->layout = "layout2";
        return $this->render("detail");

    }
}