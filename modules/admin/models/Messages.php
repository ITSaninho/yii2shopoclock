<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $whom_id
 * @property string $text
 * @property integer $read_it
 * @property integer $last_message
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property User $user
 * @property User $whom
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'whom_id', 'read_it', 'last_message', 'created_at', 'updated_at'], 'integer'],
            [['text'], 'string'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['whom_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['whom_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'whom_id' => 'Whom ID',
            'text' => 'Text',
            'read_it' => 'Read It',
            'last_message' => 'Last Message',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWhom()
    {
        return $this->hasOne(User::className(), ['id' => 'whom_id']);
    }
}
