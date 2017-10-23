<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order`.
 */
class m170924_220600_create_order_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),

            'status' => $this->integer(2),
            'length' => $this->string(255),
            'height' => $this->string(255),
            'width' => $this->string(255),
            'size_integer' => $this->string(255),
            'size_string' => $this->string(255),
            'weight' => $this->string(255),
            'color' => $this->string(255),
            'material' => $this->string(255),
            'count' => $this->integer(11),
            'price' => $this->string(255),
            'sum' => $this->string(255),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
            'user_id' => $this->integer(15)->defaultValue(1),
            'product_id' => $this->integer(15)->defaultValue(1),
            'seller_id' => $this->integer(15)->defaultValue(1),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('order');
    }
}
