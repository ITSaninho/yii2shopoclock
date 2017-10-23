<?php


namespace app\models;
use yii\db\ActiveRecord;


class Images extends ActiveRecord{


    public static function tableName(){
        return 'images';
    }

    public function getProduct(){
        return $this->hasOne(Product::className(), ['product_id' => 'id']);
    }


}