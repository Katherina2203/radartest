<?php
use yii\helpers\Html;
use yii\helpers\Url;
// Общий список продукции
$this->title = 'Products';

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content-products">
<div class="row">
            <?php
            foreach ($dataProvider->models as $model) {
                    echo $this->render('product', [
                        'model' => $model
                    ]);
                }
            ?>

</div>
    <section>
         <?= yii\widgets\Menu::widget([
            'options' => ['class' => 'sidebar-menu'],
            'items' => [
                 ['label' => Yii::t('app', 'My profile'), 'url' => ['/']],
             ]
         ]);?>
    </section>
<!--<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <h1>Категории</h1>
    <ul>
    <?php
  /*  foreach ($categories->models as $category) {
        echo $this->render('//category/shortViewCategory', [
            'model' => $category
        ]);
    }*/
    ?>
    </ul>
</div>-->
    
    
    
</div>

