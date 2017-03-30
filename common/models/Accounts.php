<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "accounts".
 *
 * @property integer $id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $pass_md5
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $auth_key
 * @property string $sid
 * @property integer $permissions
 * @property string $LastLogin
 * @property integer $status
 */
class Accounts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accounts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'username', 'password', 'pass_md5', 'password_hash', 'password_reset_token', 'auth_key', 'sid', 'status'], 'required'],
            [['permissions', 'status'], 'integer'],
            [['LastLogin'], 'safe'],
            [['name', 'username', 'pass_md5', 'sid'], 'string', 'max' => 40],
            [['password'], 'string', 'max' => 12],
            [['password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'pass_md5' => Yii::t('app', 'Pass Md5'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'sid' => Yii::t('app', 'Sid'),
            'permissions' => Yii::t('app', 'Permissions'),
            'LastLogin' => Yii::t('app', 'Last Login'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
