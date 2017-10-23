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
                        <?php if( !empty($products) ): ?>
                        <?php foreach($products as $product): ?>


                        <div class="div-box mb mt">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="single-product-slider">
                                            <div id="sync1" class="owl-carousel owl-template">
                                                <?php foreach($product->images as $images): ?>
                                                <div class="item">
                                                    <?php echo "<figure><img src='/web/data/products/alias/$product->alias/$images->name' alt='slide' width='1080' height='768'/></figure>"; ?>
                                                </div>
                                                <?php endforeach;?>
                                            </div>
                                            <div id="sync2" class="owl-carousel owl-template">
                                                <?php foreach($product->images as $images): ?>
                                                    <div class="item">
                                                        <?php echo "<figure><img src='/web/data/products/alias/$product->alias/$images->name' alt='slide' width=\"180\" height=\"130\"/></figure>"; ?>
                                                    </div>
                                                <?php endforeach;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-product-content">
                                            <div>
                                                <h2 class="product_title mb-45"><?= $product->title ?></h2>
                                                <div class="tab-content">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                    <?php
                                                    $i=1;
                                                    $a=1;
                                                    echo "<p>Виберіть колір:</p>";
                                                    foreach($product->product_options as $product_options){
                                                        if($i==1){
                                                            $active = 'active';
                                                        }else{
                                                            $active = '';
                                                        }
                                                        echo "<li class='.$active.'><a data-toggle='tab' href='#tab$i' style='color:#000000;'>".$product_options->color."</a></li>";
                                                        $i++;
                                                    }
                                                    ?>
                                                    </ul>
                                                    <div class="tab-content">
                                                    <?php

                                                    foreach($product->product_options as $product_options){
                                                        if($a==1){
                                                            $active = 'in active';
                                                            echo "<div id='tab$a' class='tab-pane fade $active'>";
                                                        }else{
                                                            $active = '';
                                                            echo "<div id='tab$a' class='tab-pane fade $active'>";
                                                        }
                                                        echo '<br>';
                                                        echo '<p class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>'.$product_options->price.'</span></p>';
                                                        echo '<p>Всего на складе: '.$product_options->count.'</p>';
                                                        echo '</div>';

                                                        $a++;
                                                    }
                                                    ?>
                                                    </div>

                                                </div>
                                                <form class="cart">
                                                    <div class="quantity">
                                                        <label>Quantity:</label>
                                                        <div class="quantity-inner">
                                                            <input step="1" min="1" name="quantity" value="1" title="Qty" size="4" type="number" class="input-text qty text"/>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                                                </form>
                                                <div class="product_meta"><span class="product-stock-status-wrapper">
                        <label>Categories:</label><a href="#"><?= $product->category->name ?></a></span><span class="tagged_as">
                        <label>Tag:</label><a href="#">Tree. </a></span></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <div class="col-md-2 col-sm-12">
                                    <ul class="nav nav-pills">
                                        <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                                        <li><a href="#tab-reviews" data-toggle="tab">Reviews (0)</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-10 col-sm-12">
                                    <div class="desc-review-content tab-content clearfix">
                                        <div id="tab-description" class="tab-pane active">
                                            <h2 class="mb-20">Product Description</h2>
                                            <p><?= $product->text ?></p>
                                        </div>
                                        <div id="tab-reviews" class="tab-pane dib-none">
                                            <div id="reviews" class="product-begreen-reviews">
                                                <div id="comments">
                                                    <h2 class="product-begreen-reviews-title">Reviews</h2>
                                                    <p class="product-begreen-noreviews">There are no reviews yet.</p>
                                                </div>
                                                <div id="review_form_wrapper">
                                                    <div id="review_form">
                                                        <div id="respond" class="comment-respond">
                                                            <h3 id="reply-title" class="comment-reply-title">Be the first to review “The Calvert with Succulents” <small></small></h3>
                                                            <form id="commentform" class="comment-form">
                                                                <div class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></div>
                                                                <div class="comment-form-rating mb-20 mt-20">
                                                                    <label>Your Rating</label>
                                                                </div>
                                                                <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div>
                                                                <div class="comment-form-comment">
                                                                    <label class="mb-20 mt-20">Your Review *</label>
                                                                    <textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
                                                                </div>
                                                                <div class="comment-fields-wrap">
                                                                    <div class="comment-fields-inner clearfix">
                                                                        <p class="comment-form-author">
                                                                            <label class="mb-20 mt-20">Name *</label>
                                                                            <input id="author" type="text"/>
                                                                        </p>
                                                                        <p class="comment-form-email">
                                                                            <label class="mb-20 mt-20">Email *</label>
                                                                            <input id="email" name="email" size="30" required="" type="email"/>
                                                                        </p>
                                                                        <p class="form-submit mt-20">
                                                                            <input id="submit" name="submit" value="Submit" type="submit" class="submit"/>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        <?php endif;?>

                    </div>
                </div>
            </div>
        </div>




    </div>
</div>
<!-- .mv-site-->

