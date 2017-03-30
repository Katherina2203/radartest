<?php

$this->title = 'Publications';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="publications-index" style="width: 1170px; margin: 0 auto;">
    <?=  $this->render("publicationleft") ?>
    <?=  $this->render("publicationcontent") ?>
</div>