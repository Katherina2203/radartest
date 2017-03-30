<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;
?>
 
<div class="row">
    
    <div class="content-title">
        <h3><?= Html::encode($model->title) ?></h3>
       
    </div>
    <img src="<?= Url::to('@web/' . $model->image)?>" alt=""  />
    <?= HtmlPurifier::process($model->short_discr) ?>    
   
        <?= Html::a('More', ['viewnew', 'id' => $model->id], ['class' => 'btn btn-default']) ?>

</div>