<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_rating`.
 */
class m170924_221003_create_product_rating_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('product_rating', [
            'id' => $this->primaryKey(),

            'rank' => $this->string()->defaultValue(0),
            'public' => $this->integer()->defaultValue(0),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
            'product_id' => $this->integer(15)->defaultValue(1),
            'user_id' => $this->integer(15)->defaultValue(1),
            'text' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('product_rating');
    }
}
