<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property integer $id
 * @property string $name
 * @property integer $main
 * @property integer $public
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $product_id
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['main', 'public', 'created_at', 'updated_at', 'product_id'], 'integer'],
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
            'main' => 'Main',
            'public' => 'Public',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'product_id' => 'Product ID',
        ];
    }
}
