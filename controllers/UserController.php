<?php 

namespace app\controllers;

use yii\web\Controller;

class UserController extends Controller{

    public function actionIndex()
    {
        return $this->render("index");
    }
    public function actionAdd()
    {
        return $this->render("add"); 
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