<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\UserRating */

$this->title = Yii::t('app', 'Create User Rating');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Ratings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-rating-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
