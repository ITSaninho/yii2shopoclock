<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "user_rating".
 *
 * @property integer $id
 * @property string $rank
 * @property integer $public
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_id
 * @property integer $voted_id
 *
 * @property User $user
 * @property User $voted
 */
class User_rating extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_rating';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['public', 'created_at', 'updated_at', 'user_id', 'voted_id'], 'integer'],
            [['rank'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['voted_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['voted_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rank' => 'Rank',
            'public' => 'Public',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
            'voted_id' => 'Voted ID',
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
    public function getVoted()
    {
        return $this->hasOne(User::className(), ['id' => 'voted_id']);
    }
}
