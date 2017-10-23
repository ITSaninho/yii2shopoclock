<?php

use yii\helpers\Url;
use yii\helpers\Html;
use app\models\Category;


$categoryes = Category::find()->indexBy('id')->asArray()->all();

foreach($categoryes as $category){
    echo "<li><a href=".Url::to(['/site/index', 'category_id' => $category['id']]).">".$category['name']."</a></li>";
}

?>
