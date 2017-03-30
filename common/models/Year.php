<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "year".
 *
 * @property integer $idy
 * @property integer $year
 */
class Year extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'year';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['year'], 'required'],
            [['year'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idy' => Yii::t('publ', 'Idy'),
            'year' => Yii::t('publ', 'Year'),
        ];
    }
}
