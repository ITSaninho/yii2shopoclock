<?php

use yii\db\Migration;

/**
 * Handles the creation of table `feedback`.
 */
class m170924_220450_create_feedback_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('feedback', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->defaultValue(0),
            'email' => $this->string(),
            'subject' => $this->string(),
            'text' => $this->text(),
            'status' => $this->integer(1)->defaultValue(0),
            'type' => $this->integer(),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('feedback');
    }
}
