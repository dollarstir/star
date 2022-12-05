<?php involve('title.php');
$id = $context['id'];
$r = customfetch('attorney', [['id', '=', $id]]);
$rr = fetchAll('practiceareas');

?>
<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php title($r[0]['name']); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
		============================================ -->
        <link rel="shortcut icon" href="/main/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/main/img/favicon.ico" type="image/x-icon">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="/main/css/bootstrap.min.css">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="/main/css/font-awesome.min.css">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="/main/custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="/main/custom-slider/css/preview.css" type="text/css" media="screen" />
        <!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="/main/css/owl.carousel.css">
        <link rel="stylesheet" href="/main/css/owl.theme.css">
        <link rel="stylesheet" href="/main/css/owl.transitions.css">
        <!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="/main/css/jquery-ui.css">
        <!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="/main/css/meanmenu.min.css">
        <!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="/main/css/animate.css">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="/main/css/normalize.css">
        <!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="/main/css/main.css">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="/main/custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="/main/custom-slider/css/preview.css" type="text/css" media="screen" />
        <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="/main/style.css">
        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="/main/css/responsive.css">
        <!-- modernizr JS
		============================================ -->
        <script src="/main/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body class="about-us">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="/main/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- Header Area Start Here -->
        <?php involve('header.php'); ?>
        <!-- Header Area End Here -->
        <!--  Banner Area Start here -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="main-bennar">
                            <h2><?php title($r[0]['name']); ?></h2>
                            <div class="breadcumb">
                                <ul>
                                    <li>
                                        <a href="home">Home</a>
                                    </li>
                                    <li>Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Banner Area End here -->
        <!-- Team details Inner Area Start Here -->
        <div class="team-details-inner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="team-details-img-wraper">
                            <div class="team-details-img-holder">
                                <a href="/main/single-attorney.html#">
                                    <img src="/yolkassets/upload/<?php echo $r[0]['image']; ?>" alt="attorney" class="img-responsive">
                                </a>
                            </div>
                            <ul class="team-details-social">
                                <li>
                                    <a href="<?php echo $r[0]['facebook']; ?>">
                                        <i aria-hidden="true" class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $r[0]['twitter']; ?>">
                                        <i aria-hidden="true" class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $r[0]['linkedin']; ?>">
                                        <i aria-hidden="true" class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $r[0]['skype']; ?>">
                                        <i aria-hidden="true" class="fa fa-skype"></i>
                                    </a>
                                </li>
                               
                            </ul>
                            <!-- <ul class="team-details-info">
                                <li>
                                    <i class="fa fa-map-marker"></i> 150 Torrent Court Street, UK</li>
                                <li>
                                    <i class="fa fa-phone"></i> (123) 00 8888 999</li>
                                <li>
                                    <i class="fa fa-envelope-o"></i> info@miakolwfirm.com</li>
                                <li>
                                    <i class="fa fa-fax"></i> (123) 00 8888 999</li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="team-details-content-holder">
                            <h3><?php echo $r[0]['name']; ?></h3>
                            <h4 class="title-bar50"><?php echo $r[0]['position']; ?></h4>
                            <!-- <p>
                                <span>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Ut enim ad minim.Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint.Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit.</span>
                            </p> -->
                            <p><?php echo $r[0]['bio']; ?></p>
                            <!-- <div class="skill1-area">
                                <div class="progress">
                                    <div class="lead">Family Law</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 95%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;"
                                        data-progress="95%" class="progress-bar wow fadeInLeft animated">
                                        <span>95%</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="lead">Business Law</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 85%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;"
                                        data-progress="85%" class="progress-bar wow fadeInLeft animated">
                                        <span>85%</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="lead">Crime Law</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 70%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;"
                                        data-progress="70%" class="progress-bar wow fadeInLeft animated">
                                        <span>70%</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team details Inner Area End Here -->
        <!-- Our Attorney Start Here -->
        <div class="our-attorney-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title-area">
                            <h2>Our Attorney</h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates
                                libero possimus sapien3e sint odit iusto blanditiis doloribus.</p> -->
                        </div>
                    </div>
                </div>
                <div class="our-attorney">
                <?php attorney1(); ?>
                </div>
            </div>
        </div>
        <!-- Our Attorney End Here -->
        <!-- Partner Logo Area Start Here -->
        <!-- <div class="client-logo-area">
            <div class="container">
                <div class="client-logo">
                    <div class="single-logo">
                        <a href="/main/single-attorney.html#">
                            <img src="/main/img/client/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-attorney.html#">
                            <img src="/main/img/client/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-attorney.html#">
                            <img src="/main/img/client/3.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-attorney.html#">
                            <img src="/main/img/client/4.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-attorney.html#">
                            <img src="/main/img/client/5.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-attorney.html#">
                            <img src="/main/img/client/6.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-attorney.html#">
                            <img src="/main/img/client/7.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-attorney.html#">
                            <img src="/main/img/client/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-attorney.html#">
                            <img src="/main/img/client/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-attorney.html#">
                            <img src="/main/img/client/3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Partner Logo Area End Here -->
        <!-- Get Free Consultation Start Here -->
        <div class="get-free-consultation-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="consultation-text">
                            <h3>If you have any legal problem in your life ... We are available</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="contact-buttom">
                            <a href="/contactus">Get Free Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Get Free Consultation End Here -->
        <!-- Footer Area Start Here -->
       <?php involve('footer.php'); ?>
        <!-- Footer Area End Here -->
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- jquery
		============================================ -->
        <script src="/main/js/vendor/jquery-1.11.3.min.js"></script>
        <!-- bootstrap JS
		============================================ -->
        <script src="/main/js/bootstrap.min.js"></script>
        <!-- wow JS
		============================================ -->
        <script src="/main/js/wow.min.js"></script>
        <!-- price-slider JS
		============================================ -->
        <script src="/main/js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
		============================================ -->
        <script src="/main/js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
		============================================ -->
        <script src="/main/js/owl.carousel.min.js"></script>
        <!-- scrollUp JS
		============================================ -->
        <script src="/main/js/jquery.scrollUp.min.js"></script>
        <!-- plugins JS
		============================================ -->
        <script src="/main/js/plugins.js"></script>
        <!-- Nivo slider js
        ============================================ -->
        <script src="/main/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="/main/custom-slider/home.js" type="text/javascript"></script>
        <!-- main JS
		============================================ -->
        <script src="/main/js/main.js"></script>

    </body>

</html>
