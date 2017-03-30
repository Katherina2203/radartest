<?php

use common\widgets\CategoriesWidget;

$this->title = 'Admin Panel';
?>
<div class="site-index">

    <div class="jumbotron">
         <p><input placeholder="Select type of products"> <a class="btn btn-lg btn-success" href="elements/index">Search</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h3>Orders</h3>
                
                <a href="">Electronics components</a><br/>
                <a href="">Matherials</a><br/>
                <a href="">Computers</a><br/>
                <a href="">Equipments</a>

                <p><a class="btn btn-default" href="requests/index">Посмотреть все заявки</a></p>
            </div>
            <div class="col-lg-4">
                <h3>Projects</h3>
               <ul><?php 
                    foreach (\common\models\Themes::find()->where(['status'=> 1])->all() as $theme): ?>
                     <li><a href=""><?php echo $theme->name ?></a></li>
                    <?php endforeach;?>
                </ul>
              

                <p><a class="btn btn-default" href="themes/index">View All Project</a></p>
            </div>
            <div class="col-lg-4">
                <h3>Categories of electronic components</h3>

                <?php 
                         CategoriesWidget::begin();?>
           
                   <?php CategoriesWidget::end(); ?>

                <p><a class="btn btn-default" href="category/index">View All Categories</a></p>
            </div>
        </div>
        <hr/>
        <div class="row">
            <h3>test</h3>
        </div>
    </div>
</div>
