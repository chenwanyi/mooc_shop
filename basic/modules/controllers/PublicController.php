<?php
/**
 * Created by PhpStorm.
 * User: chenwanyi
 * Date: 2016/11/8
 * Time: 下午9:10
 */
namespace app\modules\controllers;
use yii\db\ActiveRecord;
use yii\web\Controller;
use app\modules\models\Admin;
use Yii;

class PublicController extends Controller{

    public function actionLogin(){
        $this->layout = false;
        $model = new Admin;
        if (Yii::$app->request->isPost){
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
        $model = new Admin();
        if(Yii::$app->request->isPost){
            $post = Yii::$app->request->post();
            if ($model->seekPass($post)){
                Yii::$app->session->setFlash('info','电子邮件已经发送成功！');
            }
        }
        return $this->render('seekpassword',['model' => $model]);
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
