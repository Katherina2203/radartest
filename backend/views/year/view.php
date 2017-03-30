<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Year */

$this->title = $model->idy;
$this->params['breadcrumbs'][] = ['label' => Yii::t('publ', 'Years'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="year-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('publ', 'Update'), ['update', 'id' => $model->idy], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('publ', 'Delete'), ['delete', 'id' => $model->idy], [
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
            'idy',
            'year',
        ],
    ]) ?>

</div>
