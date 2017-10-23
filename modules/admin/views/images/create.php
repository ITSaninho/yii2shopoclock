<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Images */

$this->title = Yii::t('app', 'Create Images');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Images'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="images-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
