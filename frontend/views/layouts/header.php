<?php
use yii\bootstrap\Nav;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
?>
<header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <!-- logo -->
                    <div class="navbar-brand">
                        <a href="#" >
                            <img src="<?= Url::to('@web/images/'. 'RIAN_logo.png')?>" alt=""  />
                        </a>
                    </div>
                    <!-- /logo -->
               
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                       <?php
                        $menuItems = [
                                ['label' => Yii::t('app', 'Home'), 'url' => 'index'],
                                ['label' => Yii::t('app', 'About'), 'url' => 'about'],
                                ['label' => Yii::t('app', 'Products'), 'url' => 'category'
                                
                                ],
                                ['label' => Yii::t('app', 'Research'), 'url' => 'content/research'],
                                ['label' => Yii::t('app', 'Publications'), 'url' => 'publications'],
                        ['label' => Yii::t('app', 'News'), 'url' => 'content/news'],
                           
                              ['label' => Yii::t('app', 'Contacts'), 'url' => 'contact'],
                        ];
                         echo Nav::widget([
                            //  'options' => ['class' => 'navbar-nav navbar-pills'],
                              'items' => $menuItems,
                              'options' => ['class' =>'nav-tabs nav-pills'], 
                            //  'activeCssClass' => 'active',
                         ]);
                      ?>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
</header>
<div class="breadcrumb">
                <?= Breadcrumbs::widget([
                   'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]
                ) ?>
</div>