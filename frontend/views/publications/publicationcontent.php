<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\bootstrap\Tabs;

use yii\data\ActiveDataProvider;

use common\models\Types;
use common\models\Refs;

$modeltypes = new Types();
$modelrefs = new Refs();

 $query = Refs::find()->orderBy('year DESC');
        $dataProviderrefs = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

?>
<div class="publications-content">

    <div class="publications-banner">
         <h3>Publications</h3>
         <img src="<?= Url::to(Yii::getAlias('@web') . '/images/about/123.jpg')?>" class="img-responsive" width="550px"/>
    </div>
    <div class="row">
    <div class="filter-publication-form">
    <div class="col-lg-6">
        <h3>Title and Author Search</h3>
        <div class="box">
            <div class="box-header">Years</div>
            <div class="box-body">
                 <select>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                </select>
            </div>
       
        </div>
       
        <div class="box">
            <div class="box-header">Authors</div>
            <div class="box-body">
                 <select>
                    <option>Vavriv</option>
                    <option>Volkov</option>
                  
                </select>
            </div>
       
        </div>
        <div class="box">
            <div class="box-header">Authors</div>
            <div class="box-body">
                <?= Tabs::widget([
                    'items'=>[
                          [
                            'label' => 'Выпадающий список табов',
                            'items' => [
                                [
                                    'label' => 'Первый таб из выпадающего списка',
                                    'content' => '<h2>Обновите свои познания в Yii 2 and Twitter Bootstrap. Все возможнсти уже обернуты в удобные интерфейсы.</h2>'
                                ],
                                [
                                    'label' => 'Второй таб из выпадающего списка',
                                    'content' => '<h2>Один в поле не воин, а двое - уже компания.</h2>'
                                ],
                                [
                                    'label' => 'Это третий таб из выпадающего списка',
                                    'content' => '<h2>Третий не лишний!</h2>'
                                ]
                            ]
                        ]
                    ]
                ]);
                ?>
            </div>
       
        </div>
        <div class="clear"></div>
        <p>
            <?= Html::a('All publications', ['publication/indexall'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
        <div class="col-lg-6">
            <h3>Full text search</h3>
             <div class="box">
            <div class="box-header">Keywords</div>
            <div class="box-body">
                <input placeholder="Put your keyword"></input>
            </div>
       
        </div>
        </div>
    </div>
</div>
<div class="publications-refs">
    <?= Tabs::widget([
        'items' => [
        [
            'label' => 'Публикации в журналах',
            'content' => '_listpublications',
            'active' => true
        ],
        [
            'label' => 'Книги и разделы книг',
            'content' => '<h2>jQuery - один из самых популярных JavaScript фреймворков, который работает с объектами DOM.</h2>'
        ],
        [
            'label' => 'Доклады на международных конференциях',
            'content' => '<h2>Twitter Bootstrap - супер фреймворк, объединяющий в себе html, css, и JavaScript для для верстки веб-интерфейсов и страниц.</h2>',
            'headerOptions' => [
                'id' => 'headerOptions'
            ],
            'options' => [
                'id' => 'options'
            ]
        ],
       
      
    ]
    ]); ?>
    
    <h2> types <?= Html::encode($modelrefs->types) ?></h2>
<?php Pjax::begin(); ?> 
    <?= ListView::widget([
            'dataProvider' => $dataProviderrefs,
            'itemView' => '_listpublications',
        
            'options' => [
                'tag' => 'div',
                'class' => 'publications-list',
                'id' => 'publications-list',
            ],
        // 'layout' => "{pager}\n{items}\n{summary}",
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
   

</div>
