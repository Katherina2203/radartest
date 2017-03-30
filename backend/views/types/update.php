<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Types */

$this->title = Yii::t('publ', 'Update {modelClass}: ', [
    'modelClass' => 'Types',
]) . $model->Type;
$this->params['breadcrumbs'][] = ['label' => Yii::t('publ', 'Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Type, 'url' => ['view', 'id' => $model->Type]];
$this->params['breadcrumbs'][] = Yii::t('publ', 'Update');
?>
<div class="types-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
