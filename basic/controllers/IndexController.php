<?php
/**
 * Created by PhpStorm.
 * User: chenwanyi
 * Date: 2016/10/30
 * Time: 下午8:35
 * 商城首页
 */
namespace app\controllers;

use yii\web\Controller;

class IndexController extends Controller{

    public function actionIndex()

    {

        $this->layout = "layout1";
        return $this->render("index");
    }


}

