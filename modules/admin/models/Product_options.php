<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product_options".
 *
 * @property integer $id
 * @property string $length
 * @property string $height
 * @property string $width
 * @property string $size_integer
 * @property string $size_string
 * @property string $weight
 * @property string $color
 * @property string $material
 * @property integer $count
 * @property integer $price
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $product_id
 *
 * @property Product $product
 */
class Product_options extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_options';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['count', 'price', 'created_at', 'updated_at', 'product_id'], 'integer'],
            [['length', 'height', 'width', 'size_integer', 'size_string', 'weight', 'color', 'material'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'product_id' => 'Product ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
