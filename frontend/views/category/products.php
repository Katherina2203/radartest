<?php
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ListView;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$this->title = 'Category_id';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['category/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-products" style="width: 1170px; margin: 0 auto;">
   <div class="box-sidebar">
          <div class="box-header"><h3>Years</h3></div>
            <?php common\widgets\YearWidget::begin(); ?>
            <?php common\widgets\YearWidget::end(); ?>
    </div>
    
        <h1>Category_id<?= $model->category_id; ?></h1>
<?php Pjax::begin(); ?> 
    <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_listproducts',
        
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


