<?php

namespace app\controllers;

use app\models\Category;
use Yii;
use yii\web\Controller;

class CategoryController extends Controller
{

    public function actionIndex()
    {
        return $this->render("index");
    }

    public function actionAdd()
    {
        $model = new Category();
     
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
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
        echo "ActionDelete";
    }
}
