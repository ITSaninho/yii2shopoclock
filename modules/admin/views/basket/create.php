<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Basket */

$this->title = Yii::t('app', 'Create Basket');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Baskets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basket-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
