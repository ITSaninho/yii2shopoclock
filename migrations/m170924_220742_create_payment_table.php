<?php

use yii\db\Migration;

/**
 * Handles the creation of table `payment`.
 */
class m170924_220742_create_payment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('payment', [
            'id' => $this->primaryKey(),

            'name' => $this->string(255),
            'account' => $this->text(),
            'our_account' => $this->text(),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
            'user_id' => $this->integer(15)->defaultValue(1),
            'order_id' => $this->integer(15)->defaultValue(1),
            'delivery_id' => $this->integer(15)->defaultValue(1),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('payment');
    }
}
