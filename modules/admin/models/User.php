<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $email
 * @property string $password_hash
 * @property string $auth_key
 * @property string $nikname
 * @property string $avatar
 * @property string $usersename
 * @property string $phone
 * @property string $sex
 * @property integer $year
 * @property integer $month
 * @property integer $day
 * @property string $country
 * @property string $region
 * @property string $city
 * @property string $street
 * @property string $house
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $status
 * @property integer $rols_id
 * @property integer $public
 *
 * @property Basket[] $baskets
 * @property Comment[] $comments
 * @property Messages[] $messages
 * @property Messages[] $messages0
 * @property Order[] $orders
 * @property Order[] $orders0
 * @property Payment[] $payments
 * @property Product[] $products
 * @property ProductRating[] $productRatings
 * @property Response[] $responses
 * @property Response[] $responses0
 * @property Rols $rols
 * @property UserRating[] $userRatings
 * @property UserRating[] $userRatings0
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['password_hash', 'auth_key', 'avatar'], 'string'],
            [['year', 'month', 'day', 'created_at', 'updated_at', 'rols_id', 'public'], 'integer'],
            [['email', 'country', 'region', 'city'], 'string', 'max' => 100],
            [['nikname', 'usersename', 'phone', 'street'], 'string', 'max' => 255],
            [['sex'], 'string', 'max' => 30],
            [['house'], 'string', 'max' => 10],
            [['status'], 'string', 'max' => 50],
            [['rols_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rols::className(), 'targetAttribute' => ['rols_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'password_hash' => 'Password Hash',
            'auth_key' => 'Auth Key',
            'nikname' => 'Nikname',
            'avatar' => 'Avatar',
            'usersename' => 'Usersename',
            'phone' => 'Phone',
            'sex' => 'Sex',
            'year' => 'Year',
            'month' => 'Month',
            'day' => 'Day',
            'country' => 'Country',
            'region' => 'Region',
            'city' => 'City',
            'street' => 'Street',
            'house' => 'House',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
            'rols_id' => 'Rols ID',
            'public' => 'Public',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaskets()
    {
        return $this->hasMany(Basket::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Messages::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessages0()
    {
        return $this->hasMany(Messages::className(), ['whom_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders0()
    {
        return $this->hasMany(Order::className(), ['seller_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductRatings()
    {
        return $this->hasMany(Product_rating::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResponses()
    {
        return $this->hasMany(Response::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResponses0()
    {
        return $this->hasMany(Response::className(), ['voted_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRols()
    {
        return $this->hasOne(Rols::className(), ['id' => 'rols_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserRatings()
    {
        return $this->hasMany(User_rating::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserRatings0()
    {
        return $this->hasMany(User_rating::className(), ['voted_id' => 'id']);
    }
}
