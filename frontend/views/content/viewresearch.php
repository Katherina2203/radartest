<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;


$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Research'), 'url' => ['research']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="view-research" style="width: 1170px; margin: 0 auto">
    <div class="">

        <h2><?= Html::encode($model->title) ?></h2>
        <img src="<?= Url::to('@web/' . $model->image)?>" alt=""  />
        <?= $model->full_text ?>    

    </div>
</div>