<?php
/**
 * Created by PhpStorm.
 * User: chenwanyi
 * Date: 2016/11/4
 * Time: 上午7:43
 * 用户登录
 */

namespace app\controllers;
use yii\web\Controller;

class MemberController extends Controller{

    public function actionAuth(){

        $this->layout = "layout2";
        return $this->render("auth");

    }

}