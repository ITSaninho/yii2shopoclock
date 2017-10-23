<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m170924_220753_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),

            'title' => $this->string(255),
            'alias' => $this->string(255)->unique(),
            'hit' => $this->integer(1),
            'new' => $this->integer(1),
            'sale' => $this->integer(1),
            'price' => $this->string(),
            'count' => $this->integer(15),
            'text' => $this->text(),
            'currency' => $this->string(255),
            'discount' => $this->string(255),
            'public' => $this->integer()->defaultValue(1),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
            'user_id' => $this->integer(15)->defaultValue(1),
            'category_id' => $this->integer(15)->defaultValue(1),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
