<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
use common\models\Refs;
use common\models\Authors;
$this->title = 'Refs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Refs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],

            'RefId',
            [
                'label' => 'Authors',
                'value' => function(Refs $ref){
                    return implode(', ', ArrayHelper::map($ref->getAuthors()->all(), 'AuthorId', 'authorname'));
                },
                'filter' => Authors::find()->select(['Name', 'AuthorId'])->column(),
            ],
           
            [
                'attribute' => 'Title',
                'contentOptions' => ['style' => 'max-width: 150px;white-space: normal'],
            ],

           // 'TitleRus',
            [
                'attribute' => 'Type',
                'format' => 'raw',
                'value' => function ($model, $key, $index) { 
                    return Html::a($model->types->Type, ['view', 'id' => $model->RefId]);
                },
              //  'filter' => Html::activeDropDownList($searchModel, 'Type', ArrayHelper::map(\common\models\Types::find()->select(['Id', 'Type'])->indexBy('Id')->all(), 'Id', 'Type'),['class'=>'form-control','prompt' => 'Выберите тип']),        
            ],
            [
                'attribute' => 'PublisherE',
                'contentOptions' => ['style' => 'max-width: 150px;white-space: normal'],
            ],
             
            // 'PublisherR',
            // 'Volume',
            // 'Number',
            [
                'attribute' => 'Year',
                'format' => 'raw',
                'value' => function ($model, $key, $index) { 
                    return Html::a($model->Year, ['view', 'id' => $model->RefId]);
                },
            ],
            // 'Page',
           // 'Abstract:ntext',
            // 'AbstractRus:ntext',
          //   'Link',
          //   'Owner',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
