<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "delivery".
 *
 * @property integer $id
 * @property string $name
 * @property integer $time
 * @property integer $price
 * @property string $keywords
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Payment[] $payments
 */
class Delivery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'delivery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time', 'price', 'created_at', 'updated_at'], 'integer'],
            [['keywords', 'description'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'time' => 'Time',
            'price' => 'Price',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['delivery_id' => 'id']);
    }
}
