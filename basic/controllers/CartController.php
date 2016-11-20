<?php
/**
 * Created by PhpStorm.
 * User: chenwanyi
 * Date: 2016/11/4
 * Time: 上午12:34
 * 购物车
 */
namespace app\controllers;

use yii\web\Controller;

class CartController extends Controller{


    public function actionIndex(){

        $this->layout = "layout1";
        return $this->render("index");
    }
}

