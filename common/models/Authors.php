<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property integer $AuthorId
 * @property string $Name
 * @property string $FirstName
 * @property string $NameR
 * @property string $FirstNameR
 * @property string $AddressR
 * @property string $AddressE
 * @property string $URL
 * @property integer $Owner
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'FirstName'], 'required'],
            [['Owner'], 'integer'],
            [['Name', 'URL'], 'string', 'max' => 50],
            [['FirstName', 'FirstNameR'], 'string', 'max' => 10],
            [['NameR'], 'string', 'max' => 30],
            [['AddressR', 'AddressE'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'AuthorId' => Yii::t('publ', 'Author ID'),
            'Name' => Yii::t('publ', 'Name'),
            'FirstName' => Yii::t('publ', 'First Name'),
            'NameR' => Yii::t('publ', 'Name R'),
            'FirstNameR' => Yii::t('publ', 'First Name R'),
            'AddressR' => Yii::t('publ', 'Address R'),
            'AddressE' => Yii::t('publ', 'Address E'),
            'URL' => Yii::t('publ', 'Url'),
            'Owner' => Yii::t('publ', 'Owner'),
        ];
    }
    
    public function getAuthorname()
    {
        return $this->FirstName. ' '. $this->Name;
    }
}
