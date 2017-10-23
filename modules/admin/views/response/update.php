<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Response */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Response',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Responses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="response-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
