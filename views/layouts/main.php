<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/web/images/icon/favicon.png" type="image/x-icon">

    <!-- Web Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Pacifico%7CSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;amp;subset=latin-ext,vietnamese" rel="stylesheet">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>

</head>
<body class="product single-product">
<?php $this->beginBody() ?>

<div class="yolo-site">
    <header class="header yolo-header-style-10">
        <div class="yolo-top-bar">
            <div class="container">
                <div class="row">
                    <div class="top-sidebar top-bar-left col-md-4">
                        <aside id="text-11" class="widget widget_text">
                            <div class="textwidget">
                                <div>Welcome to United - Best Plant</div>
                            </div>
                        </aside>
                    </div>
                    <div class="top-sidebar top-bar-right col-md-8">
                        <aside id="text-6" class="widget widget_text">
                            <div class="textwidget"><i class="fa fa-home"></i> 69 North Cleveland, Memphis <i style="margin-left: 15px" class="fa fa-phone"></i> + 46 234-623-213<i style="margin-left: 15px" class="fa fa-clock-o"></i> Mon - Fri: 9.00am - 8.00pm</div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="col-3 text-left"><a href="#primary-menu"><i class="fa fa-bars"></i></a></div>
            <div class="col-3 text-center">
                <div class="logo">
                    <h1><a href="index.html"><img src="/web/images/logo/logo.png" alt="logo"/></a></h1>
                </div>
            </div>
            <div class="col-3 text-right">
                <div class="header-right">
                    <div class="search-button-wrapper header-customize-item style-default">
                        <div class="icon-search-menu"><i class="wicon fa fa-search"></i></div>
                        <div class="yolo-search-wrapper">
                            <input id="search-ajax" placeholder="Enter keyword to search" type="search"/>
                            <button class="search"><i class="fa fa-search"></i></button>
                            <button class="close"><i class="pe-7s-close"></i></button>
                        </div>
                    </div>
                    <div class="shopping-cart-wrapper header-customize-item with-price">
                        <div class="widget_shopping_cart_content">
                            <div class="widget_shopping_cart_icon"><i class="wicon fa fa-shopping-bag"></i><span class="total">0</span></div>
                            <div class="cart_list_wrapper">
                                <div class="scroll-wrapper cart_list product_list_widget scrollbar-inner">
                                    <ul class="cart_list product_list_widget scrollbar-inner scroll-content">
                                        <li class="empty">
                                            <h4>An empty cart</h4>
                                            <p>You have no item in your shopping cart</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-logo">
            <h1><a href="index.html"><img src="/web/images/logo/logo.png" alt="logo"/></a></h1>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="main-nav-wrapper">
                    <div class="header-left">
                        <nav id="primary-menu" class="main-nav">
                            <ul class="nav">
                                <li class="active"><a href="<?= Url::to(['/'])?>">Головна</a></li>
                                <li><a href="<?= Url::to(['site/about'])?>">Про нас</a></li>
                                <li><a href="<?= Url::to(['site/delivery'])?>">Доставка</a></li>
                                <li><a href="<?= Url::to(['site/faq'])?>">FAQ</a></li>
                                <li><a href="<?= Url::to(['site/contact'])?>">Контакти</a>
                                <li class="menu-item menu-blog"><a href="#">Кабінет</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="book-service.html">Book Service</a></li>
                                        <li><a href="page-404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <?php
                                if(!Yii::$app->user->isGuest){
                                    echo '<li><a href='.Url::to(["/site/logout"]) .' data-method="post" ><i class="fa fa-sign-out"></i>exit</a></li>';
                                }else{
                                    echo '<li><a href='.Url::to(["/site/registration"]).'>Реєстрація</a></li>
                                        <li><a href='.Url::to(["/site/login"]).'>Увійти</a></li>';
                                }
                                ?>
                            </ul>
                        </nav>
                        <!-- .header-main-nav-->
                    </div>

                    <div class="header-right">
                        <?php

                        if(!Yii::$app->user->isGuest){
                            echo "<div>Вітаю Вас, <a href=''>".Yii::$app->user->identity->nikname."</a></div>";
                        }

                        ?>
                        <div class="shopping-cart-wrapper header-customize-item with-price">
                            <div class="widget_shopping_cart_content">
                                <div class="widget_shopping_cart_icon"><i class="wicon fa fa-shopping-bag"></i><span class="total">0</span></div>
                                <div class="cart_list_wrapper">
                                    <div class="scroll-wrapper cart_list product_list_widget scrollbar-inner">
                                        <ul class="cart_list product_list_widget scrollbar-inner scroll-content">
                                            <li class="empty">
                                                <h4>An empty cart</h4>
                                                <p>You have no item in your shopping cart</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <nav class="yolo-canvas-menu-wrapper dark ps-container"><a href="#" class="yolo-canvas-menu-close"><i class="fa fa-close"></i></a>
            <div class="yolo-canvas-menu-inner sidebar">
                <aside id="text-12" class="widget widget_text">
                    <div class="textwidget">
                        <div class="begreen-widget ad-spot text-center">
                            <div class="about-image"><img src="/web/images/demo/off-menu.png" alt="demo"/></div>
                            <h2 class="name_author">Be Green</h2>
                            <div class="about-description text-center">I love life and the unique position of being a working artist. I love the thrill of the hunt and am an avid vintage hound, sniffing out the best one-of-a-kinds.</div>
                        </div>
                    </div>
                </aside>
                <aside id="text-13" class="widget widget_text">
                    <div class="textwidget"><a href="#"><img src="/web/images/demo/bn-bs.jpg" alt="demo"/></a></div>
                </aside>
                <aside id="yolo-social-profile-6" class="widget widget-social-profile">
                    <ul class="social-profile social-icon-bordered">
                        <li><a title="Facebook" href="#" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
                        <li><a title="Twitter" href="#" target="_blank"><i class="fa fa-twitter"></i>Twitter</a></li>
                        <li><a title="Skype" href="#" target="_blank"><i class="fa fa-skype"></i>Skype</a></li>
                        <li><a title="Youtube" href="#" target="_blank"><i class="fa fa-youtube"></i>Youtube</a></li>
                    </ul>
                </aside>
            </div>
        </nav>
    </header>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>

    <div class="div-box">
        <footer id="yolo-footer-wrapper">
            <div class="yolo-footer-wrapper footer-3">
                <div class="footer-col">
                    <h2><a href="index.html" class="logo"><img src="images/logo/logo-footer.png" alt="logo1" width="84" height="63" class="vc_single_image-img attachment-full"/></a></h2>
                    <ul id="social-footer">
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                    <p class="copyright">BeGreen © Yolo 2016 Copyright, All Right Reserved 2016 Designed by <a href="#">Yolo</a></p>
                </div>
            </div>
        </footer>
    </div>
</div>



<div class="popup-wrapper">
</div>
<!-- .popup-wrapper-->
<div class="click-back-top-body">
    <button type="button" class="sn-btn sn-btn-style-17 sn-back-to-top fixed-right-bottom"><i class="btn-icon fa fa-angle-up"></i></button>
</div>


<?php
AppAsset::register($this);
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
