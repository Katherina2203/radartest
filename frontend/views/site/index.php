<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = Yii::t('app', 'Microwave Electronics Department');
?>
<!--
        ==================================================
        Slider Section Start
        ================================================== -->
        <section id="hero-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                            
                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                <span><?php echo $this->title; ?></span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">ANTENNAS</b>
                                    <b>RADARS</b>
                                    <b>SAR</b>
                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    Several words about main,<br> Some text of our works.
                                </h2>
                                <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works" >View Products</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->
            <!--
            ==================================================
            Slider Section Start
            ================================================== -->
          
            <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
            <section id="works" class="works">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">Our Products</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            industrial applications of microwaves, Radars, llll
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                <div class="img-wrapper">
                                    <img src="<?= Url::to(Yii::getAlias('@web') . '/images/portfolio/radars.jpg')?>" class="img-responsive" alt="this is a title" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="template/images/portfolio/radars.jpg">Demo</a>
                                            <a target="_blank" href="single-portfolio.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    Radars
                                </a>
                                </h4>
                                <p>
                                    Metheorological radars
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="img-wrapper">
                                    <img src="<?= Url::to(Yii::getAlias('@web') . '/images/portfolio/ku_band.jpg')?>" class="img-responsive" alt="this is a title" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="/images/portfolio/ku_band.jpg">Demo</a>
                                            <a target="_blank" href="single-portfolio.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    Antennas
                                </a>
                                </h4>
                                <p>
                                    X-band, V-band, Ka-band, Ku-band...
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="img-wrapper">
                                    <img src="<?= Url::to(Yii::getAlias('@web') . '/images/portfolio/receivers.jpg')?>" class="img-responsive" alt="" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="/images/portfolio/receivers.jpg">Demo</a>
                                            <a target="_blank" href="single-portfolio.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    Digital receivers
                                </a>
                                </h4>
                                <p>
                                   Low-noise, high-dynamic-range,
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="img-wrapper">
                                    <img src="<?= Url::to(Yii::getAlias('@web') . '/images/portfolio/generators.jpg')?>" class="img-responsive" alt="" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="/images/portfolio/item-4.jpg">Demo</a>
                                            <a target="_blank" href="#">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    Generators
                                </a>
                                </h4>
                                <p>
                                    2 kV, 5kV, Subnanosecond Pulse Generator
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="img-wrapper">
                                    <img src="<?= Url::to(Yii::getAlias('@web') . '/images/portfolio/clinotrons.jpg')?>" class="img-responsive" alt="" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="/images/portfolio/clinotrons.jpg">Demo</a>
                                            <a target="_blank" href="#">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    Clinotrons
                                </a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor.
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                                <div class="img-wrapper">
                                    <img src="<?= Url::to(Yii::getAlias('@web') . '/images/portfolio/magnetrons.jpg')?>" class="img-responsive" alt="" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="/images/portfolio/magnetrons.jpg">Demo</a>
                                            <a target="_blank" href="single-portfolio.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    Magnetrons
                                </a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor.
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <center><button type="submit" value="All Products"><?php Yii::t('app', 'All Products') ?>All Products</button></center>
            </section> <!-- #works -->
              <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                <h2>
                                Our philosophy
                                </h2>
                                <p>
                                    From basic studies to practical work and high-quality commercial products and services
                                   
                                </p>
                                <p>
                                     is shared and realized by our highly qualified and motivated researchers, engineers, designers, technicians, and manufacturers.
                                </p>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                                <img src="<?= Url::to(Yii::getAlias('@web') . '/images/about/123.jpg')?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->
            
            
            <!-- news slider -->
            <section id="news-slider">
                <div class="container">
                    <div class="row" style="margin-top: 35px;">
                        <div class="section-heading">
                          <h1 class="title wow fadeInDown" data-wow-delay=".3s">Our News</h1>
                          </div>
                  <!--      <div class="col-md-3">
                           
                            <span>26.07.2016</span>
                            <img src="source-templ/images/portfolio/generators.jpg" class="img-responsive"/>
                            <p>Dr. Ievgen Gorovyi has participated in Signal Processing Symposium (SPS-2015) in Debe, Poland.</p>
                        </div>
                        <div class="col-md-3">
                            
                            <span>26.07.2016</span>
                             <img src="source-templ/images/portfolio/receivers.jpg" class="img-responsive"/>
                              <p>Dr. Ievgen Gorovyi has participated in Signal Processing Symposium (SPS-2015) in Debe, Poland.</p>
                        </div>
                        <div class="col-md-3">
                            
                            <span>26.07.2016</span>
                             <img src="source-templ/images/portfolio/radars.jpg" class="img-responsive"/>
                              <p>Dr. Ievgen Gorovyi has participated in Signal Processing Symposium (SPS-2015) in Debe, Poland.</p>
                        </div>
                        <div class="col-md-3">
                           
                            <span>26.07.2016</span>
                             <img src="source-templ/images/portfolio/radars.jpg" class="img-responsive"/>
                              <p>Dr. Ievgen Gorovyi has participated in Signal Processing Symposium (SPS-2015) in Debe, Poland.</p>
                        </div>
                  -->
                    </div>
                </div>
            </section>
            
            <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-lg-4"><img src="source-templ/images/portfolio/generators.jpg"  class="img-responsive" alt="properties"/></div>
                                <div class="col-lg-8">
                                    <h5><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Dr. Ievgen Gorovyi has participated in Signal Processing Symposium (SPS-2015) in Debe, Poland.</a></h5>
                                    <p class="date">26.07.2016</p>
                                    <a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27"  class="more">More Detail</a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-4"><img src="source-templ/images/portfolio/generators.jpg"  class="img-responsive" alt="properties"/></div>
                                <div class="col-lg-8">
                                    <h5><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Dr. Ievgen Gorovyi has participated in Signal Processing Symposium (SPS-2015) in Debe, Poland.</a></h5>
                                    <p class="date">26.07.2016</p>
                                    <a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27"  class="more">More Detail</a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-4"><img src="source-templ/images/portfolio/generators.jpg"  class="img-responsive" alt="properties"/></div>
                                <div class="col-lg-8">
                                    <h5><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Integer sed porta quam</a></h5>
                                    <p class="date">26.07.2016</p>
                                    <a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27"  class="more">More Detail</a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-4"><img src="source-templ/images/portfolio/generators.jpg"  class="img-responsive" alt="properties"/></div>
                                <div class="col-lg-8">
                                    <h5><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Integer sed porta quam</a></h5>
                                    <p class="date">26.07.2016</p>
                                    <a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27"  class="more">More Detail</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- end news slider -->
            <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
            <section id="feature">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">Our Activities</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-flask-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Scientific publications</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Well documented research</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                                </div>
                            </div>
                        </div>
                       
                  
                    </div>
                </div>
            </section> <!-- /#feature -->
                            
            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                            
                                <form action="#" method="post">
                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Write your full name here...">
                                </div>
                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                                    <input type="text" class="form-control" placeholder="Write your email address here...">
                                </div>
                                <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
                                    <textarea class="form-control" rows="3" placeholder="Write your message here..."></textarea>
                                </div>
                                <a class="btn btn-default wow bounceIn" data-wow-duration="500ms" data-wow-delay="1300ms" href="#" role="button">send your message</a>
                            </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            
            
            