<?php


namespace app\models;
use yii\db\ActiveRecord;


class Product extends ActiveRecord{


    public static function tableName(){
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getProduct_options(){
        return $this->hasMany(Product_options::className(), ['product_id' => 'id']);
    }

    public function getImages(){
        return $this->hasMany(Images::className(), ['product_id' => 'id']);
    }




}