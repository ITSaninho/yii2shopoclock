<?php

use yii\db\Migration;

/**
 * Handles the creation of table `images`.
 */
class m170924_220530_create_images_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('images', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'main' => $this->integer(15),
            'public' => $this->integer(1)->defaultValue(1),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
            'product_id' => $this->integer(15)->defaultValue(1),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('images');
    }
}
