<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProductOptions */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-options-view">


    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'length',
            'height',
            'width',
            'size_integer',
            'size_string',
            'weight',
            'color',
            'material',
            'count',
            'price',
            'created_at',
            'updated_at',
            'product_id',
        ],
    ]) ?>

</div>
