<?php

use yii\db\Migration;

/**
 * Handles the creation of table `delivery`.
 */
class m170924_220506_create_delivery_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('delivery', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'time' => $this->integer(15),
            'price' => $this->integer(15),
            'keywords' => $this->text(),
            'description' => $this->text(),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('delivery');
    }
}
