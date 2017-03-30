<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

use common\models\Category;
use backend\models\CategorySearch;
use common\models\Content;

/**
 * Description of CategoryController
 *
 * @author КАТЕРИНА
 */
class CategoryController extends Controller
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
        $model = new Category();
        $searchModel = new CategorySearch();
       // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $query = Category::find()->where(['section_id' => '3'])->orderBy('ord ASC');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        return $this->render('index', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    
    public function actionProducts($category_id)
    {
        $model = new Content();
        
        $query = Content::find()->where(['category_id' => $category_id])->orderBy('AddDate DESC');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        
        return $this->render('products', [
            'model' => $model,
          //  'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
