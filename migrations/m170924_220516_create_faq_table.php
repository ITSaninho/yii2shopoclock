<?php

use yii\db\Migration;

/**
 * Handles the creation of table `faq`.
 */
class m170924_220516_create_faq_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('faq', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
            'public' => $this->integer(1),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('faq');
    }
}
