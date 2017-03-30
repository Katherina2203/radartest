<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Types */

$this->title = $model->Type;
$this->params['breadcrumbs'][] = ['label' => Yii::t('publ', 'Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="types-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('publ', 'Update'), ['update', 'id' => $model->Type], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('publ', 'Delete'), ['delete', 'id' => $model->Type], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('publ', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'Type',
            'TypeR',
        ],
    ]) ?>

</div>
