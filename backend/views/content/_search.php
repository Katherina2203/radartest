<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ContentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'section_id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'title_ru') ?>

    <?php // echo $form->field($model, 'short_discr') ?>

    <?php // echo $form->field($model, 'short_discr_ru') ?>

    <?php // echo $form->field($model, 'full_text') ?>

    <?php // echo $form->field($model, 'full_text_ru') ?>

    <?php // echo $form->field($model, 'RelRef') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <?php // echo $form->field($model, 'views') ?>

    <?php // echo $form->field($model, 'Author') ?>

    <?php // echo $form->field($model, 'AddDate') ?>

    <?php // echo $form->field($model, 'Editor') ?>

    <?php // echo $form->field($model, 'EditDate') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
