<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_rating`.
 */
class m170924_222707_create_user_rating_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('user_rating', [
            'id' => $this->primaryKey(),

            'rank' => $this->string(255)->defaultValue(0),
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
        $this->dropTable('user_rating');
    }
}
