<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use common\models\Authors;
/* @var $this yii\web\View */
/* @var $model common\models\Refs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Authors')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TitleRus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Type')->textInput() ?>

    <?= $form->field($model, 'PublisherE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PublisherR')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'authorArray')->checkboxList(Authors::find()->select(['Name', 'AuthorId'])->indexBy('AuthorId')->column()) ?>

    <?= $form->field($model, 'Volume')->textInput() ?>

    <?= $form->field($model, 'Number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Year')->textInput() ?>

    <?= $form->field($model, 'Page')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Abstract')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'AbstractRus')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Owner')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
