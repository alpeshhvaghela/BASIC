<?php 

namespace app\controllers;

use app\models\Users;
use Yii;
use yii\web\Controller;


class UserController extends Controller{

    public function actionIndex()
    {
        return $this->render("index");
    }
    public function actionAdd()
    {   $model = new Users();
        if(Yii::$app->request->post()){
            $model->load(Yii::$app->request->post());
            if($model->validate() && $model->save()){
                
                $this->redirect("index");
            }
        }

        return $this->render("add",['model' =>$model]); 
    }
    public function actionView($id)
    {
        return $this->render("view");
    }
    public function actionUpdate($id)
    {
        return $this->render("update");
    }
    public function actionDelete($id)
    {
        echo "ActionDelete===".$id;
    }
    
}