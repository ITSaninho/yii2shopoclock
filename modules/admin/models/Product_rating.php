<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product_rating".
 *
 * @property integer $id
 * @property string $rank
 * @property integer $public
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $product_id
 * @property integer $user_id
 * @property string $text
 *
 * @property Product $product
 * @property User $user
 */
class Product_rating extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_rating';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['public', 'created_at', 'updated_at', 'product_id', 'user_id'], 'integer'],
            [['text'], 'string'],
            [['rank'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rank' => 'Rank',
            'public' => 'Public',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'product_id' => 'Product ID',
            'user_id' => 'User ID',
            'text' => 'Text',
        ];
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
