<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RefsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'RefId') ?>

    <?= $form->field($model, 'Authors') ?>

    <?= $form->field($model, 'Title') ?>

    <?= $form->field($model, 'TitleRus') ?>

    <?= $form->field($model, 'Type') ?>

    <?php // echo $form->field($model, 'PublisherE') ?>

    <?php // echo $form->field($model, 'PublisherR') ?>

    <?php // echo $form->field($model, 'Volume') ?>

    <?php // echo $form->field($model, 'Number') ?>

    <?php // echo $form->field($model, 'Year') ?>

    <?php // echo $form->field($model, 'Page') ?>

    <?php // echo $form->field($model, 'Abstract') ?>

    <?php // echo $form->field($model, 'AbstractRus') ?>

    <?php // echo $form->field($model, 'Link') ?>

    <?php // echo $form->field($model, 'Owner') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
