<?php

use app\core\form\Form;

/**
 * @var app\models\RegisterModel $model
 */
?>

<h1>
    Register
</h1>
<div class="row">
    <div class="col-6">
        <?php $form = Form::begin('', 'post') ?>

        <?= $form->field($model, 'fullname') ?>
        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'email')->emailField() ?>
        <?= $form->field($model, 'password')->passwordField() ?>
        <?= $form->field($model, 'confirmPassword')->passwordField() ?>

        <button type="submit" class="btn btn-primary">Submit</button>

        <?php Form::end() ?>
    </div>
</div>