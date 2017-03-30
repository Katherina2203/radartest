<?php
namespace common\widgets;

use \yii\bootstrap\Widget;
use common\models\Year;

class YearWidget extends Widget
{
    
    public function init()
    {
       parent::init();
    } 
   
    public function run() 
    {
       
      $models = Year::find()->orderBy('year DESC')->all();
       return $this->render('year', array(
           'models' => $models,
       ))  ;
    }
}
            
                

