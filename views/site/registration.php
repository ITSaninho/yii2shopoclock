<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="main-reg">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nikname') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'usersename') ?>
    <?= $form->field($model, 'phone') ?>
    <?= $form->field($model, 'avatar')->fileInput() ?>
    <?= $form->field($model, 'sex') ?>
    <?= $form->field($model, 'year') ?>
    <?= $form->field($model, 'month') ?>
    <?= $form->field($model, 'day') ?>
    <?= $form->field($model, 'country') ?>
    <?= $form->field($model, 'region') ?>
    <?= $form->field($model, 'city') ?>
    <?= $form->field($model, 'street') ?>
    <?= $form->field($model, 'house') ?>

    <div class="form-group">
        <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>


</div><!-- main-reg -->

