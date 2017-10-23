<?php


namespace app\models;
use yii\db\ActiveRecord;


class Product_options extends ActiveRecord{


    public static function tableName(){
        return 'product_options';
    }

    public function getProducts(){
        return $this->hasMany(Product::className(), ['product_id' => 'id']);
    }


}