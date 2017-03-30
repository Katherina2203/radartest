<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Authors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="authors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FirstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NameR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FirstNameR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AddressR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AddressE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'URL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Owner')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('publ', 'Create') : Yii::t('publ', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
