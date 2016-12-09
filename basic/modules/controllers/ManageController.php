<?php
/**
 * Created by PhpStorm.
 * User: chenwanyi
 * Date: 2016/12/6
 * Time: 下午7:19
 */

namespace app\modules\controllers;
use app\modules\models\Admin;
use yii\web\Controller;
use yii;


class ManageController extends Controller{

    public function actionMailchangepass(){

        $time = Yii::$app->request->get("timestamp");
        $adminuser = Yii::$app->request->get("adminuser");
        $token = Yii::$app->request->get("token");
        $model = new Admin;
        $mytoken = $model->createToken($adminuser, $time);
        if ($token != $mytoken){
            $this->redirect(['public/login']);
            Yii::$app->end();
        }
        if (time() - $time > 300 ){
            $this->redirect(['public/login']);
            Yii::$app->end();
        }

        $model->adminuser = $adminuser;
        return $this->render("mailchangepass",['model' => $model]);

    }
}
