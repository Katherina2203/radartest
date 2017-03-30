<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Category'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'section_id',
                'value' => 'sections.name'
            ],
           
            'name:ntext',
            'name_ru:ntext',
            'image:ntext',
            [
                'attribute' => 'visible',
                'format' => 'raw',
                'value' => function($data){
                    if($data->visible == '1'){
                        return '<span style="color: green"><i class="glyphicon glyphicon-eye-open"></i></span>';
                    }else{
                        return '<span style="color: grey"><i class="glyphicon glyphicon-eye-close"></i></span>';
                    }
                }
            ],
            
            'ord',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
