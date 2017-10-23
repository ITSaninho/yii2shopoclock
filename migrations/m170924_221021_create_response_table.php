<?php

use yii\db\Migration;

/**
 * Handles the creation of table `response`.
 */
class m170924_221021_create_response_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('response', [
            'id' => $this->primaryKey(),

            'text' => $this->text(),
            'public' => $this->integer()->defaultValue(1),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
            'user_id' => $this->integer(15)->defaultValue(1),
            'voted_id' => $this->integer(15)->defaultValue(1),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('response');
    }
}
