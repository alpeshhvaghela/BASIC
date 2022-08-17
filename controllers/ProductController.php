<?php 

namespace app\controllers;

use app\models\Product;
use yii\web\Controller;

class ProductController extends Controller
{

    public function actionIndex()
    {
        return $this->render("index");
    }
    public function actionAdd()
    {
        $model = new Product();

        return $this->render("add",['model'=>$model]);
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
        echo "Action Delete".$id;
    }

}