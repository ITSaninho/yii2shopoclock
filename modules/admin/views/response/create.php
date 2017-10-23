<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Response */

$this->title = Yii::t('app', 'Create Response');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Responses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="response-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
