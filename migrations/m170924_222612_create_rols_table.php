<?php

use yii\db\Migration;

/**
 * Handles the creation of table `rols`.
 */
class m170924_222612_create_rols_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('rols', [
            'id' => $this->primaryKey(),

            'title' => $this->string(255),
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
        $this->dropTable('rols');
    }
}
