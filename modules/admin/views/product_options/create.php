<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProductOptions */

$this->title = Yii::t('app', 'Create Product Options');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-options-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
