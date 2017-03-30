<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AuthorsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="authors-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'AuthorId') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'FirstName') ?>

    <?= $form->field($model, 'NameR') ?>

    <?= $form->field($model, 'FirstNameR') ?>

    <?php // echo $form->field($model, 'AddressR') ?>

    <?php // echo $form->field($model, 'AddressE') ?>

    <?php // echo $form->field($model, 'URL') ?>

    <?php // echo $form->field($model, 'Owner') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('publ', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('publ', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
