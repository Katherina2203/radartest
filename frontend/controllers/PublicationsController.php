<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;

use common\models\Refs;
use common\models\Year;
use common\models\Types;


class PublicationsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    
    public function actionIndex()
    {
        $modeltypes = new Types();
        
        $modelrefs = new Refs();
        $query = Refs::find()->orderBy('year DESC');
        $dataProviderrefs = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        
        
        return $this->render('index', [
            'modeltypes' => $modeltypes,
            'modelrefs' => $modelrefs,
            'dataProviderrefs' => $dataProviderrefs,
        ]);
    }
    
    public function actionRefs($id)
    {
        $modelyear = new Year();
        $modelrefs = new Refs();
        
        $query = Refs::find()->orderBy('year DESC');
        $dataProviderrefs = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        
        
        return $this->render('refs', [
            'modelyear' => $this->findModel($id),
            'modelrefs' => $modelrefs,
            'dataProviderrefs' => $dataProviderrefs,
        ]);
    }
    
    public function actionView($id)
    {
        
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    
    
    protected function findModel($id)
    {
        if (($model = Content::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
