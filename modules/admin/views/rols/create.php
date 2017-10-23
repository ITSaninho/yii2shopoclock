<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Rols */

$this->title = Yii::t('app', 'Create Rols');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rols'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rols-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
