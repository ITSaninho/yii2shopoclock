<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Rols */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Rols',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rols'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="rols-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
