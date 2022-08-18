<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="container">
    
    <div class="text-center">
        <h3>Category Add</h3>
    </div>
    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-6">
        <?php echo $form->field($model, 'name');
        ?>
    </div>
    <div class="col-12 my-4">
        <?php echo Html::submitButton('Add', ['class' => 'btn btn-primary']); ?>
    </div>
    <div class="col-12 my-4">
        <a class="btn btn-primary" href="/category/index">Back</a>
    </div>
    <?php ActiveForm::end(); ?> 
</div>