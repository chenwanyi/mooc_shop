<?php
/**
 * Created by PhpStorm.
 * User: chenwanyi
 * Date: 2016/11/8
 * Time: 下午9:10
 */
namespace app\modules\controllers;
use yii\web\Controller;
use app\modules\models\Admin;
use Yii;

class PublicController extends Controller{

    public function actionLogin(){

        $this->layout = false;
        $model = new Admin;
        if (Yii::$app->request->ispost){
            $post = Yii::$app->request->post();
            if ($model->login($post)){
                $this->redirect(['default/index']);
                Yii::$app->end();
            }
        }
        return $this->render('login',['model' => $model]);
    }

    public function actionSeekpassword(){
        $this->layout = false;
        return $this->render('seekpassword');
    }

    public function actionLogout(){
        Yii::$app->session->removeAll();
        if (!isset(Yii::$app->session['admin']['isLogin'])){
            $this->redirect(['public/login']);
            Yii::$app->end();
        }
        $this->goBack();
    }

}
