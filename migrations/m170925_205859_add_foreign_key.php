<?php

use yii\db\Migration;

class m170925_205859_add_foreign_key extends Migration
{
    public function safeUp()
    {
        /*
        $this->addForeignKey('basket-user_id','basket','user_id','user','id','CASCADE');
        $this->addForeignKey('basket-product_id','basket','product_id','product','id','CASCADE');
        $this->addForeignKey('images-product_id','images','product_id','product','id','CASCADE');
        $this->addForeignKey('messages-user_id','messages','user_id','user','id','CASCADE');
        $this->addForeignKey('messages-whom_id','messages','whom_id','user','id','CASCADE');
        $this->addForeignKey('order-user_id','order','user_id','user','id','CASCADE');
        $this->addForeignKey('order-product_id','order','product_id','product','id','CASCADE');
        $this->addForeignKey('order-seller_id','order','seller_id','user','id','CASCADE');
        $this->addForeignKey('payment-user_id','payment','user_id','user','id','CASCADE');
        $this->addForeignKey('payment-order_id','payment','order_id','order','id','CASCADE');
        $this->addForeignKey('payment-delivery_id','payment','delivery_id','delivery','id','CASCADE');
        $this->addForeignKey('product-user_id','product','user_id','user','id','CASCADE');
        $this->addForeignKey('product-category_id','product','category_id','category','id','CASCADE');
        $this->addForeignKey('product_options-product_id','product_options','product_id','product','id','CASCADE');
        $this->addForeignKey('product_rating-product_id','product_rating','product_id','product','id','CASCADE');
        $this->addForeignKey('product_rating-user_id','product_rating','user_id','user','id','CASCADE');
        $this->addForeignKey('response-user_id','response','user_id','user','id','CASCADE');
        $this->addForeignKey('response-voted_id','response','voted_id','user','id','CASCADE');
        $this->addForeignKey('user-rols_id','user','rols_id','rols','id','CASCADE');
        $this->addForeignKey('user_rating-user_id','user_rating','user_id','user','id','CASCADE');
        $this->addForeignKey('user_rating-voted_id','user_rating','voted_id','user','id','CASCADE');
        $this->addForeignKey('comment-user_id','comment','user_id','user','id','CASCADE');
        $this->addForeignKey('comment_rating-product_id','comment','product_id','product','id','CASCADE');
        */

    }

    public function safeDown()
    {
        echo "m170925_205859_add_foreign_key cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170925_205859_add_foreign_key cannot be reverted.\n";

        return false;
    }
    */
}
