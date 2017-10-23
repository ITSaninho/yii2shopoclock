<?php

namespace app\models;

use yii\base\Model;
use Yii;
use yii\web\UploadedFile;

class RegistrationForm extends Model
{
    public $email;
    public $password;
    public $auth_key;
    public $secret_key;
    public $nikname;
    public $avatar;
    public $usersename;
    public $phone;
    public $sex;
    public $year;
    public $month;
    public $day;
    public $country;
    public $region;
    public $city;
    public $street;
    public $house;
    public $created_at;
    public $updated_at;
    public $status;
    public $rols_id;
    public $public;

    public function rules()
    {
        return [
            [['nikname', 'email', 'password', 'usersename', 'phone','sex','year','month','day','country','region','city','street','house'],'filter', 'filter' => 'trim'],
            [['nikname', 'email', 'password'],'required'],
            ['nikname', 'string', 'min' => 2, 'max' => 255],
            ['password', 'string', 'min' => 6, 'max' => 255],
            ['email', 'email'],
            ['email', 'unique',
                'targetClass' => User::className(),
                'message' => 'Эта почта уже занята.'],
            ['status', 'default', 'value' => User::STATUS_ACTIVE, 'on' => 'default'],
            ['status', 'in', 'range' =>[
                User::STATUS_NOT_ACTIVE,
                User::STATUS_ACTIVE
            ]],
            ['status', 'default', 'value' => User::STATUS_NOT_ACTIVE, 'on' => 'emailActivation'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'nikname' => 'Логін',
            'email' => 'Емаил',
            'password' => 'Пароль',
            'id' => 'ID',
            'status' => 'Статус',
            'auth_key' => 'Auth Key',
            'created_at' => 'Дата реєстрації',
            'updated_at' => 'Дата змін',
            'first_name' => 'Імя',
            'second_name' => 'Прізвище',
            'middle_name' => 'По батькові',
            'address' => 'Адреса',
            'rols' => 'Роль',
            'avatar' => 'Аватар',
            'sex' => 'Стать',
            'year' => 'Рік',
            'month' => 'Місяць',
            'day' => 'День',
            'country' => 'Країна',
            'region' => 'Регіон',
            'city' => 'Вулиця',
            'street' => 'Вулиця',
            'house' => 'Дім',
        ];
    }

    public function registration()
    {

        $user = new User();
        $user->nikname = $this->nikname;
        $user->email = $this->email;
        $user->avatar = $this->avatar;
        $user->usersename = $this->usersename;
        $user->phone = $this->phone;
        $user->sex = $this->sex;
        $user->year = $this->year;
        $user->month = $this->month;
        $user->day = $this->day;
        $user->country = $this->country;
        $user->region = $this->region;
        $user->city = $this->city;
        $user->street = $this->street;
        $user->house = $this->house;
        $user->created_at = time();
        $user->updated_at = time();
        $user->status = $this->status;
        $user->rols_id = 1;
        $user->public = 1;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save();
    }

    public function sendActivationEmail($user)
    {
        return Yii::$app->mailer->compose('activationEmail', ['user' => $user])
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name.' (отправлено автоматично).'])
            ->setTo($this->email)
            ->setSubject('Активація для '.Yii::$app->name)
            ->send();
    }
}