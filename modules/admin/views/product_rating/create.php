<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProductRating */

$this->title = Yii::t('app', 'Create Product Rating');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Ratings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-rating-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
