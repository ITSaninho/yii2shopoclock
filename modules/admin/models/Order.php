<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property integer $status
 * @property string $length
 * @property string $height
 * @property string $width
 * @property string $size_integer
 * @property string $size_string
 * @property string $weight
 * @property string $color
 * @property string $material
 * @property integer $count
 * @property string $price
 * @property string $sum
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $product_id
 * @property integer $seller_id
 *
 * @property User $user
 * @property Product $product
 * @property User $seller
 * @property Payment[] $payments
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'count', 'created_at', 'updated_at', 'user_id', 'product_id', 'seller_id'], 'integer'],
            [['length', 'height', 'width', 'size_integer', 'size_string', 'weight', 'color', 'material', 'price', 'sum'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['seller_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['seller_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'length' => 'Length',
            'height' => 'Height',
            'width' => 'Width',
            'size_integer' => 'Size Integer',
            'size_string' => 'Size String',
            'weight' => 'Weight',
            'color' => 'Color',
            'material' => 'Material',
            'count' => 'Count',
            'price' => 'Price',
            'sum' => 'Sum',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
            'product_id' => 'Product ID',
            'seller_id' => 'Seller ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeller()
    {
        return $this->hasOne(User::className(), ['id' => 'seller_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['order_id' => 'id']);
    }
}
