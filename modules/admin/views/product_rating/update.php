<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProductRating */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Product Rating',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Ratings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="product-rating-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
