<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m170925_174021_create_comment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'login' => $this->string(),
            'parent_id' => $this->integer(18)->defaultValue(0),
            'text' => $this->text(),
            'likes' => $this->integer(10)->defaultValue(0),
            'deslikes' => $this->integer(10)->defaultValue(0),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
            'user_id' => $this->integer(15)->defaultValue(1),
            'product_id' => $this->integer(15)->defaultValue(1),


        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('comment');
    }
}
