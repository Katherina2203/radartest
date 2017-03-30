<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
dfdfd
    <div class="pull-left">
        <img src="<?= Url::to(Yii::getAlias('@web') . '/images/Kostya_copy.jpg')?>" class="img-responsive" width="450px"/>
    </div>
   
    <div class="container">
        <?php ?>
        <h3><?= $model->title?> </h3>
        <div class="box">
            <?= $model->full_text ?>
        </div>
  <!--  <p>The Department philosophy is: From basic studies to practical work and high-quality commercial products and services. This philosophy is shared and realized by our highly qualified and motivated researchers, engineers, designers, technicians, and manufacturers. The Department laboratories are equipped by the state-of-the-art measurement and testing equipment, modern computer aided design and simulation capabilities. The Department workshop is fully equipped for production of microwave and millimeter wave components, devices, and vacuum tubes.</p>
    <p>Department of Microwave Electronics was established in 1989 as the result of integration of several experimental and theoretical research groups which actively worked in the fields of microwave and millimeter-wave vacuum tubes, signal processing, nonlinear phenomena, and dynamical system theory. From the date of establishment, Prof. D.M. Vavriv heads the Department.

        Over the years, the research and development work has been essentially extended and the main Department activities include now the following areas:
    </p>
    -->    
    </div>
</div>