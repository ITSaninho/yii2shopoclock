<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_options`.
 */
class m170924_220808_create_product_options_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('product_options', [
            'id' => $this->primaryKey(),

            'length' => $this->string(),
            'height' => $this->string(),
            'width' => $this->string(),
            'size_integer' => $this->string(),
            'size_string' => $this->string(),
            'weight' => $this->string(),
            'color' => $this->string(),
            'material' => $this->string(),
            'count' => $this->integer(15),
            'price' => $this->integer(15),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
            'product_id' => $this->integer(15)->defaultValue(1),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('product_options');
    }
}
