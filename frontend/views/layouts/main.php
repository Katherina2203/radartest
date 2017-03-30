<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\TimerAsset;



  TimerAsset::register($this);
   // $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/bower/bootstrap/dist');
    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@web/template');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?= Html::encode($this->title) ?></title>
     <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    
    <?php $this->head() ?>
     <!-- Mobile Specific Metas
    ================================================== -->
   
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <?=  $this->render("header") ?>
   
    <?= $this->render(
            'content.php',
            [   'content' => $content, 
                'directoryAsset' => $directoryAsset
            ]); ?>
    
    <?=  $this->render("footer") ?>
</div>  

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

