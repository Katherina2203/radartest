<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Refs */

$this->title = 'Update Refs: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Refs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->RefId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
