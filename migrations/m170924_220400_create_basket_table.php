<?php

use yii\db\Migration;

/**
 * Handles the creation of table `basket`.
 */
class m170924_220400_create_basket_table extends Migration
{
    /**
     * @inheritdoc
     */

    public function safeUp()
    {
        $this->createTable('basket', [
            'id' => $this->primaryKey(),
            'length' => $this->string(255),
            'height' => $this->string(255),
            'width' => $this->string(255),
            'size_integer' => $this->string(255),
            'size_string' => $this->string(255),
            'weight' => $this->string(255),
            'color' => $this->string(255),
            'material' => $this->string(255),
            'count' => $this->integer(15)->defaultValue(1),
            'status' => $this->integer(6)->defaultValue(1),
            'public' => $this->integer(6)->defaultValue(1),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
            'user_id' => $this->integer(15)->defaultValue(1),
            'product_id' => $this->integer(15)->defaultValue(1),



        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('basket');
    }
}
