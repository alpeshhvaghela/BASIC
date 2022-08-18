<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="container">
    <div class="text-center">
        <h3>Product Add</h3>
    </div>
    <?php

    $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'name'); ?>
        </div>
        <div class="col">
            <?php
            echo $form->field($model, 'category_id')->dropdownList(
                [
                    1 => 'Food',
                    2 => 'Shoe',
                    3 => 'Cloths',
                    4 => 'Watch'
                ],
                ['prompt' => 'Select Category']
            ); ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'description')->textarea(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'price'); ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'status')->radioList([
                1 => 'Active',
                2 => 'Inactive'
            ]); ?>
        </div>
        <div class="col">
            <?php
            echo $form->field($model, 'color_variant')->checkboxList([
                1 => 'Blue',
                2 => 'Green',
                3 => 'Red',
                4 => 'white'
            ]);
            
            ?>
        </div>

    </div>
    <div class="row">
        <div class="col text-center">
            <?php echo Html::submitButton('Add', ['class' => 'btn btn-primary']); ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>