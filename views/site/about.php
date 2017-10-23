<?php

/* @var $this yii\web\View */

use app\widgets\Nav;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>


<div class="yolo-site">

    <div id="example-wrapper">
        <div class="div-box mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mt">
                        <div class="sidebar sidebar-product">
                            <aside class="mb-45 search-sidebar">
                                <h2 class="text-center mb-20">Search</h2>
                                <form class="form-input">
                                    <input type="text" placeholder="Search here..."/><a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </aside>
                            <aside class="mb-45 categories">
                                <h2 class="text-center mb-20">Categories</h2>
                                <ul class="cat-list">
                                    <?= Nav::widget(); ?>
                                </ul>
                            </aside>
                            <aside class="mb-45 follow-me">
                                <h2 class="text-center mb-20">Follow Me</h2>
                                <div class="desc-follow mb-20">MAKE A HAPPY MOMENTS</div>
                                <ul class="social-profile text-center">
                                    <li><a title="Facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a title="Twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a title="Pinterest" href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a title="GooglePlus" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a title="Vimeo" href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                                    <li><a title="Instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a title="Linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a title="Rss" href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                    <li><a title="Youtube" href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h4><center>Про нас</center></h4>
                        <h5>Кожного дня ми запитуємо себе «Як ми можемо зробити життя наших клієнтів щасливішим? Що потрібно зробити для цього?».</h5>
                        <h6>Бути зручними</h6>
                        <p>Купуйте товар будь-яким способом: по телефону, через термінал, онлайн чи у центрі обслуговування</p>
                        <h6>Гарантувати наявність</h6>
                        <p>Більш ніж 100 000 товарів можливо отримати протягом доби</p>
                        <h6>Спілкуватись рідною мовою</h6>
                        <p>Повноцінний україномовний сайт для максимально зручного користування та задоволення потреб наших клієнтів</p>
                        <h6>Бути поруч</h6>
                        <p>52 центри обслуговування у 32 містах України. Доставка по всій Україні</p>
                        <h6>Бути онлайн</h6>
                        <p>24 години на добу, 7 днів на тиждень......</p>
                    </div>
                </div>
            </div>
        </div>




    </div>
</div>
<!-- .mv-site-->

