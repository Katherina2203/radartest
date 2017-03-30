<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

<div class="body-content">
    <div id='languages'>
        <span> <?= Yii::t('app', 'Current language:') . Yii::$app->language;?></span>
    </div>
     

</div>
    
    <div class="mainpage">
      <div class="box">
        <div class="box-header with-border"><h3 class="box-title">Mainpage</h3></div>         
        <div class='box-body'>
            <div class="col-lg-10">
                <span>Слайдер сверху </span>
            </div>
            <div class="col-lg-10">
            <span>
                Верхнее меню
                6пунктов
            </span>
            </div>

            <div class="col-lg-10">
            <span>
                Портфолио
                6 блоков 
            </span>
            </div>

            <div class="col-lg-10">
                <span>Блок новости</span>
                slider
            </div>
        </div>
      </div>
    </div>
</div>
