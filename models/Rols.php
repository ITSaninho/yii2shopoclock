<?php


namespace app\models;
use yii\db\ActiveRecord;


class Rols extends ActiveRecord{


    public static function tableName(){
        return 'rols';
    }

    public function getUsers(){
        //return $this->hasMany(User::className(), ['id' => 'rols_id']);
        return $this->hasMany(Rols::className(), ['id' => 'rols_id']);
    }


}