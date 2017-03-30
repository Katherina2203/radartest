<?php
namespace common\models;

use Yii;

use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "content".
 *
 * @property integer $id
 * @property integer $section_id
 * @property integer $category_id
 * @property string $title
 * @property string $title_ru
 * @property string $short_discr
 * @property string $short_discr_ru
 * @property string $full_text
 * @property string $full_text_ru
 * @property string $RelRef
 * @property string $image
 * @property integer $visible
 * @property integer $views
 * @property string $Author
 * @property string $AddDate
 * @property integer $Editor
 * @property string $EditDate
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }
    public function behaviors() {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'AddDate',
                'updatedAtAttribute' => 'EditDate',
                'value' => new \yii\db\Expression('NOW()'),
            ],
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'Author',
                'updatedByAttribute' => 'Editor',
            ],
        ];
         
    }
    
    public function beforeSave($insert)
    {
        if ($insert) {
            $this->Editor = \yii::$app->user->identity->id;
          //  $this->CreatedOn = time();
        } else {
            $this->Editor = \yii::$app->user->identity->id;
            //$this->ModifiedOn = time();
        }
    
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
             //   $this->active = self::ELEMENT_ACTIVE;
            }
            return true;
        } else {
            return false;
        }
    }
   

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['section_id', 'category_id', 'title', 'title_ru', 'short_discr', 'short_discr_ru', 'full_text', 'full_text_ru', 'image', 'Author', 'Editor'], 'required'],
            [['section_id', 'category_id', 'visible', 'views', 'Editor'], 'integer'],
            [['title', 'title_ru', 'short_discr', 'short_discr_ru', 'full_text', 'full_text_ru', 'RelRef', 'image'], 'string'],
          //  [['AddDate', 'EditDate'], 'safe'],
            [['Author'], 'string', 'max' => 30],
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
            'category_id' => Yii::t('app', 'Category ID'),
            'title' => Yii::t('app', 'Title'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'short_discr' => Yii::t('app', 'Short Discr'),
            'short_discr_ru' => Yii::t('app', 'Short Discr Ru'),
            'full_text' => Yii::t('app', 'Full Text'),
            'full_text_ru' => Yii::t('app', 'Full Text Ru'),
            'RelRef' => Yii::t('app', 'Rel Ref'),
            'image' => Yii::t('app', 'Image'),
            'visible' => Yii::t('app', 'Visible'),
            'views' => Yii::t('app', 'Views'),
            'Author' => Yii::t('app', 'Author'),
            'AddDate' => Yii::t('app', 'Add Date'),
            'Editor' => Yii::t('app', 'Editor'),
            'EditDate' => Yii::t('app', 'Edit Date'),
        ];
    }
    
    public function getSections()
    {
        return $this->hasOne(Sections::className(), ['id' => 'section_id']);
    }
    
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    
    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }
}
