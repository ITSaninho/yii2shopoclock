<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $title
 * @property string $alias
 * @property integer $hit
 * @property integer $new
 * @property integer $sale
 * @property string $price
 * @property integer $count
 * @property string $text
 * @property string $currency
 * @property string $discount
 * @property integer $public
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $category_id
 *
 * @property Basket[] $baskets
 * @property Comment[] $comments
 * @property Order[] $orders
 * @property User $user
 * @property Category $category
 * @property ProductOptions[] $productOptions
 * @property ProductRating[] $productRatings
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hit', 'new', 'sale', 'count', 'public', 'created_at', 'updated_at', 'user_id', 'category_id'], 'integer'],
            [['text'], 'string'],
            [['title', 'alias', 'price', 'currency', 'discount'], 'string', 'max' => 255],
            [['alias'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'alias' => 'Alias',
            'hit' => 'Hit',
            'new' => 'New',
            'sale' => 'Sale',
            'price' => 'Price',
            'count' => 'Count',
            'text' => 'Text',
            'currency' => 'Currency',
            'discount' => 'Discount',
            'public' => 'Public',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaskets()
    {
        return $this->hasMany(Basket::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['product_id' => 'id']);
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
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductOptions()
    {
        return $this->hasMany(Product_options::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductRatings()
    {
        return $this->hasMany(Product_rating::className(), ['product_id' => 'id']);
    }
}
