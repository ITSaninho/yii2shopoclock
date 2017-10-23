<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProductOptionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-options-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'length') ?>

    <?= $form->field($model, 'height') ?>

    <?= $form->field($model, 'width') ?>

    <?= $form->field($model, 'size_integer') ?>

    <?php // echo $form->field($model, 'size_string') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'material') ?>

    <?php // echo $form->field($model, 'count') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'product_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
