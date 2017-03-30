<?php

namespace backend\controllers;

use Yii;
use common\models\Content;
use backend\models\ContentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;

use common\models\ImageUpload;
/**
 * ContentController implements the CRUD actions for Content model.
 */
class ContentController extends Controller
{
    /**
     * @inheritdoc
     */
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

    /**
     * Lists all Content models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ContentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays products list 
     */
    public function actionProducts()
    {
        
    }
    
     /**
     * Displays research list 
     */
    public function actionResearch()
    {
        $model = new Content();
        
        $query = Content::find()->where(['section_id' => '8'])->orderBy('AddDate DESC');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
           /* 'pagination' => [
                'pageSize' => 10,
            ],*/
        ]);
        
        return $this->render('research', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    /**
     * Displays a single Content model.
     * @param integer $id
     * @return mixed
     */
    public function actionViewresearch($id)
    {
        return $this->render('viewresearch', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Displays a single Content model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Content model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Content();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Content model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionSetImage($id)
    {
        $model = new ImageUpload();
        if(Yii::$app->request->post()){
            $content = $this->findModel($id);
          //  var_dump($content->title);die;
            $file = UploadedFile::getInstance($model, 'image');
            var_dump($file->basename. '.'. $file->extension); die;
            
            $content->saveImage($model->uploadFile($file));
        }
        
        return $this->render('image',[
             'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Content model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Content model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Content the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Content::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
