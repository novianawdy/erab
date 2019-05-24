<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>e-RAB</title>
	<!-- core CSS -->
    <link href="{{ asset('landing') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('landing') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('landing') }}/css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('landing') }}/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('landing') }}/css/owl.transitions.css" rel="stylesheet">
    <link href="{{ asset('landing') }}/css/main.css" rel="stylesheet">
    <link rel="icon" type="image/png"   href="{{ asset('landing') }}/images/favicon.png" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top top-nav-collapse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('landing') }}/images/logo_blue.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home </a></li>
                        <li class="scroll"><a href="#services">Fitur </a></li>
                        <li class="scroll"><a href="#portfolio">Pilihan Harga</a></li>
                        <li class="scroll"><a href="#meet-team">Data Tim </a></li>
                         <!--<li class="scroll"><a href="#testimonial"> Testimonial </a></li>-->
                       <li class="scroll"><a href="{!! route('login') !!}">Login</a></li>
                    </ul>
              </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({!! asset('landing') !!}/images/slidernew.png);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">
                                    <h2>Build Your Own House </h2>
                                    <p>Bangun rumah impianmu sendiri!</p>
                                    <!--<a class="btn btn-primary btn-lg" href="#">Find Out More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url({!! asset('landing') !!}/images/slidernew2.png);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">
                                        <h2>Build Your Own House </h2>
                                        <p>Bangun rumah impianmu sendiri!</p>
                                    <!--<a class="btn btn-primary btn-lg" href="#">Find Out More</a>-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->



	<section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Fitur eRAB</h2>
               <!-- <p class="text-center wow fadeInDown">Hal yang bisa dilakukan di website ini....</p>-->
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="{{ asset('landing') }}/images/icon1.png" alt="img">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Memilih Design </h4>
                                <p>Seiring berkembangnya teknologi dan infrastruktur, design yang ditawarkan dapat menyesuaikan dengan anggaran serta negosiasi yang menguntungkan kedua belah pihak</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="{{ asset('landing') }}/images/icon2.png" alt="img">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Perhitungan Anggaran</h4>
                                <p>Selain dapat memilih material, juga dapat menghitung dan mengetahui kisaran berapa anggaran biaya yang akan dikeluarkan</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="{{ asset('landing') }}/images/icon3.png" alt="img">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Konsultasi Kekuatan Bangunan</h4>
                                <p>Mempunyai kesempatan bertanya kepada pakar bangunan</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                   <!-- <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                               <img src="images/icon4.png" alt="img">
                            </div>
                            <div class="media-body">
                               <h4 class="media-heading">SEO Services</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur
ing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipis
ing elit, sed do eiusmod .</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                               <img src="images/icon5.png" alt="img">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">iOS Development</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur
ing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipis
ing elit, sed do eiusmod .</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="images/icon6.png" alt="img">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Andriod Development</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur
ing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipis
ing elit, sed do eiusmod .</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

   <!-- <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Fun Facts</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="animated-number" data-digit="136800" data-duration="1000"></div>
                        <strong>Lorem Ipsum</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="animated-number" data-digit="1231+" data-duration="1000"></div>
                        <strong>Lorem Ipsum</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="animated-number" data-digit="6000" data-duration="1000"></div>
                        <strong>Lorem Ipsum</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="animated-number" data-digit="2000" data-duration="1000"></div>
                        <strong>Lorem Ipsum</strong>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#animated-number-->

        <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Pilihan Harga</h2>
                <p class="text-center wow fadeInDown">Seiring berkembangnya teknologi dan infrastruktur, kini para pengguna juga dapat melihat referensi mengenai harga material dan bahan bangunan dengan mudah dan efisien</p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">Semua Material</a></li>
                    <li><a href="#" data-filter=".batu">Batu</a></li> <!--aka batu-->
                    <li><a href="#" data-filter=".genteng"> Genteng  </a></li> <!-- aka genteng-->
                    <li><a href="#" data-filter=".pasir">Pasir </a></li> <!-- aka pasir-->
                    <li><a href="#" data-filter=".paku">Paku </a></li> <!-- aka paku-->
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item batu">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/batu/blondos.png" alt="">
                        <div class="portfolio-info">
                            <h3>Batu Blondos</h3>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item batu">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/batu/kali.png" alt="">
                        <div class="portfolio-info">
                            <h3>Batu Kali</h3>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item batu">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/batu/karang.png" alt="">
                        <div class="portfolio-info">
                            <h3>Batu Karang</h3>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item batu">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/batu/krecak.png" alt="">
                        <div class="portfolio-info">
                            <h3>Batu Krecak</h3>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item batu">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/batu/krokos.png" alt="">
                        <div class="portfolio-info">
                            <h3>Batu Krokos</h3>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item genteng">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/genteng/gentengbeton.png" alt="">
                        <div class="portfolio-info">
                            <h3>Genteng Beton</h3>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item genteng">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/genteng/gentengkeramik.png" alt="">
                        <div class="portfolio-info">
                            <h3>Genteng Keramik</h3>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
                <div class="portfolio-item genteng">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/genteng/gentengmetalberpasir.png" alt="">
                        <div class="portfolio-info">
                            <h3>Genteng Metal Berpasir</h3>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item genteng">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/genteng/gentengplentong.png" alt="">
                        <div class="portfolio-info">
                            <h3>Genteng Plentong</h3>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item genteng">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/genteng/gentengseng.png" alt="">
                        <div class="portfolio-info">
                            <h3>Genteng Seng</h3>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item genteng">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/genteng/gentengsengmerah.png" alt="">
                        <div class="portfolio-info">
                            <h3>Genteng Seng Merah</h3>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item pasir">
                        <div class="portfolio-item-inner">
                            <img class="img-responsive" src="{{ asset('landing') }}/images/pasir pipa triplek/pasirbeton.png" alt="">
                            <div class="portfolio-info">
                                <h3>Genteng Pasir Beton</h3>
                            </div>
                        </div>
                </div>
                <div class="portfolio-item pasir">
                        <div class="portfolio-item-inner">
                            <img class="img-responsive" src="{{ asset('landing') }}/images/pasir pipa triplek/pasirkapur.png" alt="">
                            <div class="portfolio-info">
                                <h3>Genteng Pasir Kapur</h3>
                            </div>
                        </div>
                </div>
                <div class="portfolio-item pasir">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/pasir pipa triplek/pasirurug.png" alt="">
                        <div class="portfolio-info">
                            <h3>Genteng Pasir Urug</h3>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item paku">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/paku dan korslet/pakukarpettalang.png" alt="">
                        <div class="portfolio-info">
                            <h3>Paku Talang</h3>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item paku">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/paku dan korslet/pakuscrup.png" alt="">
                        <div class="portfolio-info">
                            <h3>Paku Scrup</h3>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item paku">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('landing') }}/images/paku dan korslet/pakuseng.png" alt="">
                        <div class="portfolio-info">
                            <h3>Paku Seng</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h1 class=" text-center wow fadeInDown">e-RAB TEAM</h1>
                <!--<p class="text-center wow fadeInDown">Berikut adalah orang - orang yang mengembangkan website E-Rab ini</p>-->
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img src="{{ asset('landing') }}/images/erabtim/reza.png" alt="">
                        </div>
                        <div class="team-info" style="text-align: center;">
                            <h3>Reza Haris Faruqul A</h3>
                            <span>UI/UX Designer</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img src="{{ asset('landing') }}/images/erabtim/imam.png" alt="">
                        </div>
                        <div class="team-info" style="text-align: center;">
                            <h3>Imam Syuhada</h3>
                            <span>Database Engineer</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                        <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                            <div class="team-img">
                                <img src="{{ asset('landing') }}/images/erabtim/novi.png" alt="">
                            </div>
                            <div class="team-info" style="text-align: center;">
                                <h3>Noviana W</h3>
                                <span>BackEnd</span>
                            </div>
                        </div>
                    </div>

                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img src="{{ asset('landing') }}/images/erabtim/andri.png" alt="">
                        </div>
                        <div class="team-info" style="text-align: center;">
                            <h3 class="text-center">Andri Cahya</h3>
                            <span >FrontEnd</span>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </section><!--/#meet-team-->


   <!-- <section id="testimonial">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">testimonials</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-sm-6">
                <div class="panel-one">
                <div class="user-img"><img alt="" src="images/testimonail_1.jpg"></div>
                <div class="testi-info">
                <h4>Jonathon Andrew</h4>
                <h5>Lorem ipsum dolor sit amet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                </div>


                </div>
                <div class="col-sm-6">
                <div class="panel-one">
                <div class="user-img"><img alt="" src="images/testimonail_2.jpg"></div>
                <div class="testi-info">
                <h4>Jonathon Andrew</h4>
                <h5>Lorem ipsum dolor sit amet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                </div>


                </div>
                <div class="col-sm-6">
                <div class="panel-one">
                <div class="user-img"><img alt="" src="images/testimonail_3.jpg"></div>
                <div class="testi-info">
                <h4>Jonathon Andrew</h4>
                <h5>Lorem ipsum dolor sit amet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                </div>


                </div>
                <div class="col-sm-6">
                <div class="panel-one">
                <div class="user-img"><img alt="" src="images/testimonail_4.jpg"></div>
                <div class="testi-info">
                <h4>Jonathon Andrew</h4>
                <h5>Lorem ipsum dolor sit amet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
                </div>


                </div>







            </div>

        </div>
    </section> <!--/#testimonial-->



  <!--  <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">CONTACT US</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
            <div class="col-sm-6">
            <div class="address">
            <h4>Address</h4>
            <p>Lorem ipsum dolor sit amet, ETX consectetur adipiscing elit,<br>
 sed do ETX eiusmod tempor incididunt ut labore et</p>
            </div>

            <div class="address">
            <h4>Phone </h4>
            <p>123-456-7890</p>
            </div>

            <div class="address">
            <h4>Email</h4>
            <p><a href="#">info@companyname.com </a></p>
            </div>

            <div class="address">
            <h4>Follow Us</h4>
            <p><a href="#"><i class="fa fa-facebook"></i></a>  &nbsp; <a href="#"><i class="fa fa-twitter"></i></a> &nbsp; <a href="#"><i class="fa fa-google-plus"></i></a></p>
            </div>
            </div>

            <div class="col-sm-6">

            <form action="#" method="post" name="contact-form" id="main-contact-form">
                                <div class="form-group">
                                    <input type="text" required placeholder="Name" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="email" required placeholder="Email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" required placeholder="Subject" class="form-control" name="subject">
                                </div>
                                <div class="form-group">
                                    <textarea required placeholder="Message" rows="8" class="form-control" name="message"></textarea>
                                </div>
                                <button class="btn btn-primary" type="submit">SUBMIT</button>
                            </form>
            </div>


            </div>


        </div>
    </section><!--/#get-in-touch-->




    <footer id="footer">
        <div class="container text-center">
         <!-- All rights reserved © 2016 | <a href="http://www.pfind.com/goodies/bizexpress/">BizExpress Template</a> from <a href="http://www.pfind.com/goodies/">pFind.com</a>-->
         elektronik Rancangan Anggaran Biaya
        </div>
    </footer><!--/#footer-->

    <script src="{{ asset('landing') }}/js/jquery.js"></script>
    <script src="{{ asset('landing') }}/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{ asset('landing') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('landing') }}/js/mousescroll.js"></script>
    <script src="{{ asset('landing') }}/js/smoothscroll.js"></script>
    <script src="{{ asset('landing') }}/js/jquery.prettyPhoto.js"></script>
    <script src="{{ asset('landing') }}/js/jquery.isotope.min.js"></script>
    <script src="{{ asset('landing') }}/js/jquery.inview.min.js"></script>
    <script src="{{ asset('landing') }}/js/wow.min.js"></script>
    <script src="{{ asset('landing') }}/js/main.js"></script>
	<script src="{{ asset('landing') }}/js/scrolling-nav.js"></script>
<script>

    $(document).ready(function($) {
      $("#owl-example").owlCarousel();
    });

    $("body").data("page", "frontpage");

$("#owl-example").owlCarousel({
        items:3,
/*        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,9],
        itemsTablet: [768,5],
        itemsTabletSmall: false,
        itemsMobile : [479,4]*/
})

    </script>
</body>
</html>
