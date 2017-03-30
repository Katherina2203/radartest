<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "refs".
 *
 * @property integer $RefId
 * @property string $Authors
 * @property string $Title
 * @property string $TitleRus
 * @property integer $Type
 * @property string $PublisherE
 * @property string $PublisherR
 * @property integer $Volume
 * @property string $Number
 * @property integer $Year
 * @property string $Page
 * @property string $Abstract
 * @property string $AbstractRus
 * @property string $Link
 * @property integer $Owner
 */
class Refs extends \yii\db\ActiveRecord
{
    //public $authorArray;
   
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%refs}}';
    }

    
    public function afterSave($insert, $changedAttributes) {
        $this->updateAuthors();
        parent::afterSave($insert, $changedAttributes);
    }
    
    /*when you are going to update form where use authors through */
    private function updateAuthors()
    {
        $currentAuthorId = $this->getAuthors()->select('AuthorId')->column();
        $newAuthorId = $this->getAuthorArray();
        foreach(array_filter(array_diff($newAuthorId, $currentAuthorId)) as $authorId){
            /* @var Author $author*/
            /*массив на добавление authorid*/
            if($author = Authors::findOne($authorId)){
                $this->link('authors', $author);
            }
        }
         foreach(array_filter(array_diff($currentAuthorId, $newAuthorId)) as $authorId){
            /* @var Author $author*/
            if($author = Authors::findOne($authorId)){
                $this->unlink('authors', $author, TRUE);
            }
        }
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Authors', 'Title', 'PublisherE'], 'required'],
            [['Type', 'Volume', 'Year', 'Owner'], 'integer'],
            [['Abstract', 'AbstractRus'], 'string'],
            [['authorArray'], 'rule' => ['integer']],
            [['Authors'], 'string', 'max' => 30],
            [['Title', 'TitleRus'], 'string', 'max' => 255],
            [['PublisherE', 'PublisherR'], 'string', 'max' => 200],
            [['Number'], 'string', 'max' => 5],
            [['Page'], 'string', 'max' => 10],
            [['Link'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'RefId' => Yii::t('app', 'Ref ID'),
            'Authors' => Yii::t('app', 'Authors'),
            'Title' => Yii::t('app', 'Title'),
            'TitleRus' => Yii::t('app', 'Title Rus'),
            'Type' => Yii::t('app', 'Type'),
            'PublisherE' => Yii::t('app', 'Publisher E'),
            'PublisherR' => Yii::t('app', 'Publisher R'),
            'Volume' => Yii::t('app', 'Volume'),
            'Number' => Yii::t('app', 'Number'),
            'Year' => Yii::t('app', 'Year'),
            'Page' => Yii::t('app', 'Page'),
            'Abstract' => Yii::t('app', 'Abstract'),
            'AbstractRus' => Yii::t('app', 'Abstract Rus'),
            'Link' => Yii::t('app', 'Link'),
            'Owner' => Yii::t('app', 'Owner'),
        ];
    }
    
    public function getRefauth()
    {
        return $this->hasOne(Refauth::className(), ['Ref' => 'RefId']);
    }
    
    public function getAuthors()
    {
        return $this->hasMany(Authors::className(), ['AuthorId' => 'Author'])->viaTable('{{%Refauth}}', ['Ref' => 'RefId']);
    }
    
    public function getTypes()
    {
        return $this->hasOne(Types::className(), ['Id' => 'Type']);
    }
    
    private $_authorArray;
    
    public function getAuthorArray(){
        if($this -> _authorArray ===null){
            $this->_authorArray = $this->getAuthors()->select('AuthorId')->column();
        }
        
        return $this->_authorArray;
       //return $this->getAuthors()->select('AuthorId')->column();
    }
    
    public function setAuthorArray($authorname){
        return $this->_authorArray = (array)$authorname;
    }
}
