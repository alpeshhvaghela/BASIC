<div class="container">
    <div class="text-center">
        <h3>Product Add</h3>
    </div>
    <!-- <form class="row g-3" method="POST"> -->
        <?php

use yii\widgets\ActiveForm;

 $form =ActiveForm::begin(); ?>

    <div class="col-md-6">
        <!-- <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name"> -->
        <?php echo $form->field($model,'name'); ?>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="category" class="form-label category">Category</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option value="">Choose...</option>
                <option value="food">Food</option>
                <option value="shoe">Shoe</option>
                <option value="cloths">Cloths</option>
                <option value="watch">Watch</option>
            </select>
        </div>
    </div>
    <div class="col-md-12">
        <label for="description">description</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <div class="error text-danger" id="description_error"></div>
    <div class="col-md-4">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="col-md-4">
        <div>
            <label class="form-label pe-3">Status</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="active" value="active">
            <label class="form-check-label" for="active">
                Active
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="inactive" value="inactive">
            <label class="form-check-label" for="inactive">
                Inactive
            </label>
        </div>
    </div>
    <div class="col-md-4">
        <div>
            <label class="form-label pe-3">Price Category</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input price_category" type="checkbox" name="price_cate[]" id="high" value="high">
            <label class="form-check-label " for="high">High</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input price_category" type="checkbox" name="price_cate[]" id="mediam" value="mediam">
            <label class="form-check-label " for="mediam">Mediam</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input price_category" type="checkbox" name="price_cate[]" id="low" value="low">
            <label class="form-check-label " for="low">Low</label>
        </div>
    </div>
    <div class="error text-center text-success" id="validation_msg"></div>
    <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
    <div class="col-12 text-center my-4">
        <a class="btn btn-primary" href="/product/index">Back</a>
    </div>
    <?php ActiveForm::end(); ?>
    <!-- </form> -->
</div>