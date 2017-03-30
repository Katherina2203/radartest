<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
  <div class="pull-left">
            <div class="wow fadeInLeft animated " data-wow-duration="500ms" data-wow-delay="0ms">
                <img src="<?= Url::to(Yii::getAlias('@web') . '/images/Kostya_copy.jpg')?>" class="img-responsive" width="450px"/>
            </div>
        </div>
      
        
    <div class="col-md-6">
        <p><?= $model->full_text ?></p>
    </div>