<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Basket */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Basket',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Baskets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="basket-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
