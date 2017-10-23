<?php

use yii\db\Migration;

/**
 * Handles the creation of table `messages`.
 */
class m170924_220545_create_messages_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('messages', [
            'id' => $this->primaryKey(),

            'user_id' => $this->integer(15)->defaultValue(1),
            'whom_id' => $this->integer(15)->defaultValue(1),
            'text' => $this->text(),
            'read_it' => $this->integer(15)->defaultValue(0),
            'last_message' => $this->integer(15)->defaultValue(1),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('messages');
    }
}
