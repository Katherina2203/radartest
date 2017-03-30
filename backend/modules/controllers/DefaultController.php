<?php
namespace backend\modules\controllers;

use yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;

/**
 * Default controller for the `myaccount` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    //  public $layout = '/myaccount';
    
    public function actionIndex()
    {
        
        
        return $this->render('index');
    }
    
    
    
    
}
