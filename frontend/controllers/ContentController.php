<?php

namespace frontend\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

use common\models\Content;
use backend\models\ContentSearch;
use common\models\Category;

class ContentController extends \yii\web\Controller
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
        return $this->render('index');
    }
    
   
    
    public function actionProducts($id)
    {
      //  $modelCategory = new Category();
      //  $modelCategory = $this->findModel($id);
        $model = new Content();
        $model->category_id = $id;
        
        $query = Content::find()->where(['category_id' => $id])->orderBy('AddDate DESC');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        
        return $this->render('products', [
            'model' => $model,
            'dataProvider' => $dataProvider,
            'modelCategory' => $modelCategory,
        ]);
    }
    
    public function actionViewproduct($id)
    {
        return $this->render('viewproduct', [
            'model' => $this->findModel($id),
        ]);
    }
    
    public function actionAbout()
    {
        $model = new Content();
        
        $query = Content::find()->where(['section_id' => '2']); //'category_id' => '8'
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        return $this->render('about', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionPublications()
    {
          $model = new Content();
        
        $query = Content::find()->where(['section_id' => '4'])->orderBy('AddDate DESC');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        
        return $this->render('publications', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionResearch()
    {
        $model = new Content();
        $searchModel = new ContentSearch();
        
        $query = Content::find()->where(['section_id' => '8', 'visible' => '1']);;
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
          /*  'pagination' => [
                'pageSize' => 10,
            ],*/
        ]);
        
        return $this->render('research', [
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }
    
    public function actionViewresearch($id)
    {
        return $this->render('viewresearch', [
            'model' => $this->findModel($id),
        ]);
    }
    
    public function actionNews()
    {
        $model = new Content();
        
        $query = Content::find()->where(['section_id' => '6'])->orderBy('AddDate DESC');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        
        return $this->render('news', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionViewnew($id)
    {
        return $this->render('viewnew', [
            'model' => $this->findModel($id),
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
