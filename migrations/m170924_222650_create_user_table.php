<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170924_222650_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        /*
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255),
            'usersename' => $this->string(255),
            'email' => $this->string(255)->unique(),
            'avatar' => $this->string(255)->defaultValue('default.jpg'),
            'password_hash' => $this->string(255),
            'phone' => $this->string(50),
            'year' => $this->integer(4),
            'month' => $this->integer(2),
            'day' => $this->integer(2),
            'country' => $this->string(255),
            'region' => $this->string(255),
            'city' => $this->string(255),
            'street' => $this->string(255),
            'house' => $this->string(10),
            'status' => $this->integer(1)->defaultValue(1),
            'sex' => $this->integer(6)->defaultValue(0),
            'public' => $this->integer(6)->defaultValue(1),
            'auth_key' => $this->string(255),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
            'secret_key' => $this->string(255),
            'rols_id' => $this->integer(2)->defaultValue(1),
        ]);
        */

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
