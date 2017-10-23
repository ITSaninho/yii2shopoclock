<?php

use yii\db\Migration;

/**
 * Handles the creation of table `categoty`.
 */
class m170924_220416_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(10)->defaultValue(0),
            'name' => $this->string(255),
            'keywords' => $this->text(),
            'description' => $this->text(),
            'alias' => $this->string()->unique(),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('categoty');
    }
}
