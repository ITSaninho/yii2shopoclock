<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Messages */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Messages',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Messages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="messages-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
