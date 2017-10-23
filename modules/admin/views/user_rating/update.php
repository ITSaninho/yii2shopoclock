<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\UserRating */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'User Rating',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Ratings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="user-rating-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
