<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Content */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
         <?= Html::a(Yii::t('app', 'Set image'), ['set-image', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'section_id',
            'category_id',
            'title:ntext',
            'title_ru:ntext',
            'short_discr:ntext',
            'short_discr_ru:ntext',
            'full_text:ntext',
            'full_text_ru:ntext',
            'RelRef:ntext',
            [
                'attribute' => 'image',
                
            ],
            [
                'attribute' => 'visible',
                'format' => 'boolean',
                'filter' => ['0' => 'no', '1' => 'yes'],
                
            ],
           
            'views',
            'Author',
            'AddDate',
            'Editor',
            'EditDate',
        ],
    ]) ?>

</div>
