<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProductOptions */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Product Options',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="product-options-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
