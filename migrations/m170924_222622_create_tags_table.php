<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tags`.
 */
class m170924_222622_create_tags_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('tags', [
            'id' => $this->primaryKey(),

            'parent_id' => $this->string(255)->defaultValue(0),
            'name' => $this->string(),
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
        $this->dropTable('tags');
    }
}
