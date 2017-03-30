<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sections".
 *
 * @property integer $id
 * @property string $name
 * @property string $name_ru
 * @property string $URL
 * @property string $image
 * @property integer $visible
 * @property integer $ord
 */
class Sections extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sections';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'name_ru', 'image', 'ord'], 'required'],
            [['id', 'visible', 'ord'], 'integer'],
            [['name', 'name_ru', 'image'], 'string'],
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
            'name_ru' => Yii::t('app', 'Name Ru'),
            'image' => Yii::t('app', 'Image'),
            'visible' => Yii::t('app', 'Visible'),
            'ord' => Yii::t('app', 'Ord'),
        ];
    }
}
