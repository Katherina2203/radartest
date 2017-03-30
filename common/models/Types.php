<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "types".
 *
 * @property integer $Id
 * @property string $Type
 * @property string $TypeR
 */
class Types extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'Type', 'TypeR'], 'required'],
            [['Id'], 'integer'],
            [['Type', 'TypeR'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('publ', 'ID'),
            'Type' => Yii::t('publ', 'Type'),
            'TypeR' => Yii::t('publ', 'Type R'),
        ];
    }
}
