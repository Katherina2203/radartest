<?php
use yii\helpers\Html;
use yii\helpers\Url;



?>

<div class="category-index" style="width: 1170px; margin: 0 auto;">
    <div class="col-sm-4" style="border: 1px solid #eee; border-radius: 6px; margin-bottom: 10px;">
        <div class="box">
            <div class="box-header">
                <h3><?= Html::a($model->name, ['products', 'category_id' => $model->id]) ?></h3>
            </div>
            <div class="box-info">
                 <img src="<?= Url::to('@web/' . $model->image)?>" alt=""  />
            </div>
            <div class="box-footer pull-right">
                <a href="#">More</a>
            </div>
        </div>
    </div>
</div>