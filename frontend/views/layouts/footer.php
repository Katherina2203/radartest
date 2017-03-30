<?php
use yii\bootstrap\Nav;
?>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h4>Information</h4>
                
                <?php
                         $menuItems = [
                              ['label' => 'About', 'url' => 'site/about'],
                              ['label' => 'News', 'url' => '/content/news/'],
                              ['label' => 'Site map', 'url' => '/products/index'],
                              ['label' => 'Contact', 'url' => '#'],
                         ];
                         echo Nav::widget([
                              'options' => ['class' => 'row'],
                              'items' => $menuItems,
                         ]);
                      ?>
            </div>
            <div class="col-lg-3">
                <h4>Newsletter</h4>
                <p>Вы можете подписаться на новости, заполнив поля формы.</p>
                <?php use yii\bootstrap\ActiveForm;?>
                <?php
                    $form = \yii\bootstrap\ActiveForm::begin([
                     'enableClientValidation' => false,
                     'enableAjaxValidation' => true,
                    ]);
                ?>
                
            
                    <input type="text" placeholder="Enter Your email address" class="form-control"><br/>
                    
                   
                <?= \yii\helpers\Html::submitButton('Subscribe',['class' => 'btn btn-success'])?>
                <?php ActiveForm::end(); ?>
             
            </div>
            <div class="col-lg-3">
             <!--   <div>
                    <div  id="language-selector" class="pull-right" style="position: relative; top: 60px;">
                    <?php// \common\widgets\LanguageSelector::widget(); ?>
                </div>
              </div>-->
            </div>
            <div class="col-lg-3">
                <h4>Contact us</h4>
                  <p><b>Microwave Electronics Department</b><br>
                    <span class="glyphicon glyphicon-map-marker"></span> Str. Mustetstv, 4, Kharkov, Ukraine <br>
                    <span class="glyphicon glyphicon-envelope"></span> vavriv@rian.kharkov.ua<br>
                    <span class="glyphicon glyphicon-earphone"></span> 38 (057) 720-37-18
                  </p>
            </div>  
        </div>

        <div class="row">
            <div class="copyright" style=" margin: 0 auto 0 auto;
    text-align: center;
    padding-top: 20px;
    padding-bottom: 20px;
    font-size: 80%;

">
                <p >&copy; <span><?= date('Y ') ?></span><?php echo Yii::t('app', 'Microwave Electronics Department')?> </p>
            </div>   
        </div>
   </div>
</footer> <!-- /#footer -->
                

