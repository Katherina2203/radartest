<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "refauth".
 *
 * @property integer $Ref
 * @property integer $Author
 * @property integer $ord
 */
class Refauth extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%refauth}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Ref', 'Author', 'ord'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Ref' => Yii::t('publ', 'Ref'),
            'Author' => Yii::t('publ', 'Author'),
            'ord' => Yii::t('publ', 'Ord'),
        ];
    }
}
