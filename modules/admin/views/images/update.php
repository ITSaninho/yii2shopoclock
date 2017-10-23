<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Images */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Images',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Images'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="images-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
