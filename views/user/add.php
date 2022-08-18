<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<div class="container">
    <div class="text-center">
        <h3>User Add</h3>
    </div>
    <?php
    $form = ActiveForm::begin()
    ?>
    <div class="row">
        <div class="col">
            <?php  echo $form->field($model,'name'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model,'age'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model,'gender')->radioList([
                1 => 'Male',
                2 => 'Female',
            ]); ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model,'email'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col">   
            <?php echo $form->field($model,'phone') ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php  echo $form->field($model,'other_information')->textarea()?>
        </div>
    </div>
    <div class="row text-center my-3">
        <div class="col ">
            <?php echo Html::submitButton('Add',['class'=>'btn btn-primary']); ?>
        </div>
    </div>
    <div class="text-center">
            <a class="btn btn-primary" href="/user/index">Back</a>
        </div>
    <?php ActiveForm::end() ?>
</div>