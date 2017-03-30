<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $model common\models\Refs */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Refs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->RefId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->RefId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Add author', ['addauthor', 'refid' => $model->RefId], ['class' => 'btn btn-warning']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'RefId',
            'Authors',
            'Title',
            'TitleRus',
            'Type',
            'PublisherE',
            'PublisherR',
            'Volume',
            'Number',
            'Year',
            'Page',
            'Abstract:ntext',
            'AbstractRus:ntext',
            'Link',
            'Owner',
        ],
    ]) ?>
    
     <?= GridView::widget([
        'dataProvider' => new yii\data\ActiveDataProvider(['query' => $model->getTypes()]),
     //   'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'Id',
            'Type',
            'TypeR',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
