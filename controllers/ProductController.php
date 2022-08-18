<?php

namespace app\controllers;

use app\models\Product;
use Yii;
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
        if (Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            if ($model->validate()) {
                $model->save();
                $this->redirect("index");
            }
        }
        return $this->render("add", ['model' => $model]);
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
        echo "Action Delete" . $id;
    }
}
