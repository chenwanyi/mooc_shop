<?php
/**
 * Created by PhpStorm.
 * User: chenwanyi
 * Date: 2016/11/4
 * Time: 上午12:47
 * 收银台,订单中心。
 */
namespace app\controllers;

use yii\web\Controller;
class OrderController extends Controller{

    //public $layout = false;

    public function actionIndex(){

        $this->layout = "layout2";
        return $this->render("index");

    }

     public function actionCheck(){
         $this->layout = "layout2";
         return $this->render("check");

     }

}