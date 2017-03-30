<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Contents');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Content'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
        //    ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function($data){
                      return Html::img(Yii::getAlias('@web').'/images/' . $data->image,//$data['image'],
                               
                         ['width' => '60px']);
                },
                'contentOptions' => ['style' => 'max-width: 60px;white-space: normal'],
            ],
            [
                'attribute' => 'section_id',
                'value' => function ($model) {
                    return empty($model->section_id) ? '-' : $model->sections->name;
                },
            ],
            [
                'attribute' => 'category_id',
                'value' => function ($model) {
                    return empty($model->category_id) ? '-' : $model->category->name;
                },
                'contentOptions' => ['style' => 'max-width: 90px;white-space: normal'],
            ],
            [
                'attribute' => 'title',
                'contentOptions' => ['style' => 'max-width: 380px;white-space: normal'],
            ],
            //'title:ntext',
          //  'title_ru:ntext',
          //   'short_discr:ntext',
            // 'short_discr_ru:ntext',
            // 'full_text:ntext',
            // 'full_text_ru:ntext',
            // 'RelRef:ntext',
           
            // 'image:ntext',
            [
                'attribute' => 'visible', 
                'format' => 'boolean',
                'filter' => ['0' => 'no', '1' => 'yes'],
            ],
             
             'views',
            // 'Author',
            // 'AddDate',
            // 'Editor',
            // 'EditDate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
