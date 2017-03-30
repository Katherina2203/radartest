<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\grid\GridView;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = 'Research';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-research">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Html::a(Yii::t('app', 'Create Research'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            'id',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function($data){
                      return Html::img(Yii::getAlias('@web').'/images/' . $data->image,//$data['image'],
                               
                         ['width' => '60px']);
                }
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
                'format' => 'raw',
                'value' => function($data){
                    return Html::a($data->title, ['viewresearch', $data->id]);
                },
                'contentOptions' => ['style' => 'max-width: 380px;white-space: normal'],
            ],
           
            // 'image:ntext',
             'visible',
             'views',
            ['class' => 'yii\grid\ActionColumn'],
        ]
    ]); ?>
    <?php Pjax::end(); ?>
</div>
