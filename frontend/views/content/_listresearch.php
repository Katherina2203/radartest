<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;
?>

<div class="col-sm-6">
    <div class="box">
  <div class="box-header">
    <div class="content-title">
         <h3><?= Html::a(Html::encode($model->title), Url::toRoute(['viewresearch', 'id' => $model->id]), ['title' => $model->title]) ?></h3>
    </div>
      <div class="box-info">
          <p><?= $model->AddDate?></p>
      </div>
  </div>
    <div class="clearfix"></div>
    <div class="box-body">
        <img src="<?= Url::to(Yii::getAlias('@web'). '/images/' . 'about/123.jpg') //$model->image?>" alt="" class="img-responsive" width="150px" style='float:left;'/>
    
        <?= HtmlPurifier::process($model->short_discr) ?>  
   
            
    
    </div>
       <div class="pull-right">
                <?= Html::a('More', ['viewresearch', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
            </div> 

</div>
</div>
