<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property integer $section_id
 * @property string $name
 * @property string $name_ru
 * @property string $image
 * @property integer $visible
 * @property integer $ord
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['section_id', 'name', 'name_ru', 'image'], 'required'],
            [['section_id', 'visible', 'ord'], 'integer'],
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
            'section_id' => Yii::t('app', 'Section ID'),
            'name' => Yii::t('app', 'Name'),
            'name_ru' => Yii::t('app', 'Name Ru'),
            'image' => Yii::t('app', 'Image'),
            'visible' => Yii::t('app', 'Visible'),
            'ord' => Yii::t('app', 'Ord'),
        ];
    }
    
    public function getSections()
    {
        return $this->hasOne(Sections::className(), ['id' => 'section_id']);
    }
}
