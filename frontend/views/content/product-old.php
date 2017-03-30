<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = 'Products';

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-default">
    <div class="panel-heading">
        
        <h3><?= $model->title ?></h3>
       
            <div class="meta">
                <p>Категория: <?= Html::a($model->category->name, ['view', 'id' => $model->category_id])   ?></p>
            </div>
      
     </div>
   
    <div class="panel-body">
         

        <div class="content">
            <a href="#" >
                <img src="<?= Url::to('@web/'. $model->image)?>" alt="" width="260px" />
            </a>
            <?= $model->short_discr ?>
        </div>
    </div>
    <div class="panel-footer">
        <?= Html::a('More', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </div>
</div>

