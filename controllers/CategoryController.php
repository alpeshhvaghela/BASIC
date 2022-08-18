<?php

namespace app\controllers;

use app\models\Category;
use Yii;
use yii\web\Controller;

class CategoryController extends Controller
{

    public function actionIndex()
    {
        $model = new Category();
        $dataProvider = $model->search();
        return $this->render("index", ['dataProvider' => $dataProvider]);
    }

    public function actionAdd()
    {
        $model = new Category();

        // if(isset($_POST)) {
        //     $name = $_POST['name'];
        //     $sql = "insert into category column(`name`) values('$name')";
        //     $result = mysqli_query($sql);
        //      if($result) {
        //       header("Location:index.php");
        //     }
        // }

        if (Yii::$app->request->post()) {
            $model->load(Yii::$app->request->post());
            if ($model->validate &&$model->save()) {
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
        echo "ActionDelete";
    }
}
