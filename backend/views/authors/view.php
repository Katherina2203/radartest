<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Authors */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('publ', 'Authors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('publ', 'Update'), ['update', 'id' => $model->AuthorId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('publ', 'Delete'), ['delete', 'id' => $model->AuthorId], [
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
            'AuthorId',
            'Name',
            'FirstName',
            'NameR',
            'FirstNameR',
            'AddressR',
            'AddressE',
            'URL:url',
            'Owner',
        ],
    ]) ?>

</div>
