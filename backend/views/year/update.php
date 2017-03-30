<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Year */

$this->title = Yii::t('publ', 'Update {modelClass}: ', [
    'modelClass' => 'Year',
]) . $model->idy;
$this->params['breadcrumbs'][] = ['label' => Yii::t('publ', 'Years'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idy, 'url' => ['view', 'id' => $model->idy]];
$this->params['breadcrumbs'][] = Yii::t('publ', 'Update');
?>
<div class="year-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
