<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = Yii::t('app', 'Categories');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="category-index" style="width: 1170px; margin: 0 auto;">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?> 
    <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_listcategory',
        
            'options' => [
                'tag' => 'div',
                'class' => 'category-list',
                'id' => 'category-list',
            ],
           // 'summary' => 'Показано {count} из {totalCount}',
            'emptyText' => '<p>Список пуст</p>',
        ]);
    ?>
    <?php Pjax::end(); ?> 
</div>

