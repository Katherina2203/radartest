<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-products" style="width: 1170px; margin: 0 auto;">
    <div class="content-title">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?php Pjax::begin(); ?> 
    <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_listnews',
        
            'options' => [
                'tag' => 'div',
                'class' => 'product-list',
                'id' => 'product-list',
            ],
            'summary' => 'Показано {count} из {totalCount}',
            'emptyText' => '<p>Список пуст</p>',
        
            'pager' => [
                'firstPageLabel' => 'Первая',
                'lastPageLabel' => 'Последняя',
                'nextPageLabel' => 'Следующая',
                'prevPageLabel' => 'Предыдущая',        
                'maxButtonCount' => 5,
            ],
        ]);
    ?>
    <?php Pjax::end(); ?> 
</div>

