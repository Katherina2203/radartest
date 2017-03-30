<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Types */

$this->title = Yii::t('publ', 'Create Types');
$this->params['breadcrumbs'][] = ['label' => Yii::t('publ', 'Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="types-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
