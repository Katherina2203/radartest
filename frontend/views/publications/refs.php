<?php

?>
<div class="publications-refs">
      <h2> types <?= Html::encode($this->title) ?></h2>
<?php Pjax::begin(); ?> 
    <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_listpublications',
        
            'options' => [
                'tag' => 'div',
                'class' => 'publications-list',
                'id' => 'publications-list',
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

