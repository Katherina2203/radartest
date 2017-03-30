<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Year */

$this->title = Yii::t('publ', 'Create Year');
$this->params['breadcrumbs'][] = ['label' => Yii::t('publ', 'Years'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="year-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
