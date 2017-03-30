<?php
use yii\widgets\Breadcrumbs;
//use dmstr\widgets\Alert;
use common\widgets\Alert;

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\helpers\Html;

?>
<div class="content-wrapper">
    <div class="breadcrumb">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]); ?>
    </div>
    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
    <div class="clearfix"></div>
</div>