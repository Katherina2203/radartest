<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

$this->title = 'About us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us">
       <?php
            foreach ($dataProvider->models as $model) {
                    echo $this->render('abouts', [
                        'model' => $model
                    ]);
                }
?>
      
</div>

