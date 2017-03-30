<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

use common\models\Types;
use common\models\Refs;

$modelrefs = new Refs();

?>
    <div class="publications-title">
        <strong><?php  $modelrefs->getAuthors()->all();
                //where(['Type' => new yii\db\Expression(':Type', [':Type' =>  $modelrefs->getTypes()])])->all();
    //Html::a(ArrayHelper::map($modelrefs->getAuthors()->all(), 'AuthorId', 'Name'), Url::toRoute(['viewresearch', 'id' => $model->RefId]), ['title' => $model->Authors]).',' 
?>
        </strong>
        <strong><?= Html::a(Html::encode($model->Title), Url::toRoute(['viewresearch', 'id' => $model->RefId]), ['title' => $model->Title]).',' ?></strong>
        <p>
    <?=   $model->PublisherE .', '.$model->Volume.', '.$model->Number.', '. 'pp. ' . $model->Page .', '. 'Published in <strong>('.$model->Year. ')</strong>';?>
    </p>
    </div>




