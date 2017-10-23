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
                        <div data-js-module="filtering-demo" class="big-demo go-wide style-4">
                            <ul class="grid shortcode-product-wrap product-begreen columns-3">
                                <?php if( !empty($products) ): ?>
                                    <?php $i = 0; foreach($products as $product): ?>
                                        <li data-category="indoor" class="element-item product-item-wrap product-style_1 indoor featured">
                                            <div class="product-item-inner">
                                                <div class="product-thumb">
                                                    <div class="product-flash-wrap"><span class="on-new product-flash">Sold</span></div>
                                                    <?php foreach($product->images as $images): ?>
                                                        <?php if($images->main == '1'): ?>
                                                            <?php
                                                            //echo $images->name;
                                                            echo "<div class='product-thumb-primary'><img src='/web/data/products/alias/$product->alias/$images->name' alt='product1' width='375' height='450' class='attachment-shop_catalog size-shop_catalog wp-post-image'/></div><a href='".Url::to(['product/view', 'id' => $product->id])."' class='product-link'>";
                                                            ?>
                                                        <?php endif ?>
                                                    <?php endforeach; ?>
                                                        <div class="product-hover-sign">
                                                            <hr/>
                                                            <hr/>
                                                        </div></a>
                                                    <div class="product-info">
                                                        <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div>
                                                            <h3>
                                                                <?php
                                                                $string = strip_tags($product->title);
                                                                $string = substr($string, 0, 120);
                                                                $string = rtrim($string, "!,.-");
                                                                $string = substr($string, 0, strrpos($string, ' '));
                                                                echo $string."… ";

                                                                ?>
                                                            </h3>
                                                        <span class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>40.00</span></span>
                                                    </div>
                                                    <div class="product-actions">
                                                        <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                                            <div class="yith-wcwl-add-button show"><a href="add" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                                                        </div>
                                                        <div class="add-to-cart-wrap"><a href="da" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a></div><a href="fds" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php $i++?>
                                        <?php if($i % 3 == 0): ?>
                                            <div class="clearfix"></div>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                <?php endif;?>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="pagination-style-2">
                            <div class="pagination-list">
                        <?php
                        echo \yii\widgets\LinkPager::widget([
                            'pagination' => $pages,
                            /*
                            'options' => [
                                'class' => 'filter_nav',
                                'firstPageLabel' => '',
                                'lastPageLabel' => '',
                                'prevPageLabel' => 'previous',
                                'nextPageLabel' => 'next',

                                'pageCssClass' => 'filter_nav',
                                'nextPageCssClass' => 'prev_s',
                                'nextPageCssClass' => 'next_s',

                                'firstPageCssClass' => 'lknflbes',
                                'maxButtonCount' => 1,
                            ]
                            */
                        ]);
                        ?>
                            </div>
                        </div>

                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</div>
<!-- .mv-site-->

