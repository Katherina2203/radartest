

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
<h3><?= $model->title ?></h3>
 
<div class="meta">
    <p>Категория: <?= $model->category_id ?></p>
</div>
 
<div class="view-product">
    <a href="#" >
        <img src="<?= Url::to('@web/'. $model->image)?>" alt="" width="360px" />
    </a>
    <?= $model->full_text ?>
</div>
 
<?= Html::a('More', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
