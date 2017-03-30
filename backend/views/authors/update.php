<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Authors */

$this->title = Yii::t('publ', 'Update {modelClass}: ', [
    'modelClass' => 'Authors',
]) . $model->Name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('publ', 'Authors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->AuthorId]];
$this->params['breadcrumbs'][] = Yii::t('publ', 'Update');
?>
<div class="authors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
