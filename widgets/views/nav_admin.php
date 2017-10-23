<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>


<aside class="mb-45 categories">
    <h2 class="text-center mb-20">Categories</h2>
    <br>
    <ul class="cat-list">
        <li><a href="<?= Url::to(['user/index'])?>">Користувачі</a></li>
        <li><a href="<?= Url::to(['category/index'])?>">Категорії</a></li>
        <li><a href="<?= Url::to(['product/index'])?>">Продукти</a></li>
        <li><a href="<?= Url::to(['product_options/index'])?>">Параметри продуктів</a></li>
        <li><a href="<?= Url::to(['product_rating/index'])?>">Рейтинг продуктів</a></li>
        <li><a href="<?= Url::to(['rols/index'])?>">Ролі</a></li>
        <li><a href="<?= Url::to(['feedback/index'])?>">Зворотній звязок</a></li>
        <li><a href="<?= Url::to(['basket/index'])?>">Корзини</a></li>
        <li><a href="<?= Url::to(['user_rating/index'])?>">Рейтинг користувачів</a></li>
        <li><a href="<?= Url::to(['order/index'])?>">Замовлення</a></li>
        <li><a href="<?= Url::to(['tags/index'])?>">Тегі</a></li>
        <li><a href="<?= Url::to(['response/index'])?>">Відгуки</a></li>
        <li><a href="<?= Url::to(['payment/index'])?>">Оплата</a></li>
        <li><a href="<?= Url::to(['delivery/index'])?>">Види доставок</a></li>
        <li><a href="<?= Url::to(['messages/index'])?>">Повідомлення</a></li>
        <li><a href="<?= Url::to(['comments/index'])?>">Коментарі</a></li>
    </ul>
</aside>

