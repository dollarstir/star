<?php involve('title.php');
$a = new Sel();
$re = $a->getall('attorney');
?>
<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> <?php title('Our Attorney'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
		============================================ -->
        <link rel="shortcut icon" href="main/main/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="main/main/img/favicon.ico" type="image/x-icon">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/bootstrap.min.css">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/font-awesome.min.css">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="main/custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="main/custom-slider/css/preview.css" type="text/css" media="screen" />
        <!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/owl.carousel.css">
        <link rel="stylesheet" href="main/css/owl.theme.css">
        <link rel="stylesheet" href="main/css/owl.transitions.css">
        <!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/jquery-ui.css">
        <!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/meanmenu.min.css">
        <!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/animate.css">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/normalize.css">
        <!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="main/css/main.css">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="main/custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="main/custom-slider/css/preview.css" type="text/css" media="screen" />
        <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="main/style.css">
        <!-- Responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="main/css/responsive.css">
        <!-- modernizr JS
		============================================ -->
        <script src="main/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body class="blog">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="main/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
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
                            <h2>ATTORNEY</h2>
                            <div class="breadcumb">
                                <ul>
                                    <li>
                                        <a href="home">Home</a>
                                    </li>
                                    <li>Attorney</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Banner Area End here -->
        <!-- Latest News Area Start Here -->
        <div class="latest-news-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title-area">
                            <h2>OUR ATTORNEY</h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa, a voluptates
                                libero possimus sapiente sint odit iusto blanditiis doloribus.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($re as $row) {
                        echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-news-area">
                            <div class="news-featured-image">
                                <a href="viewattorney/'.$row['id'].'">
                                    <img src="yolkassets/upload/'.$row['image'].'" alt="image" style="height:400px;width:100%;">
                                </a>
                                
                            </div>
                            <h3>
                                <a href="viewattorney/'.$row['id'].'">'.$row['name'].'</a>
                            </h3>
                            <p>'.$row['position'].'</p>
                        </div>
                    </div>';
                    }

                    ?>

                    
                </div>
                <!-- <div class="pagination-area">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="pagination">
                                <ul class="text-center">
                                    <li class="active">
                                        <a href="main/">1</a>
                                    </li>
                                    <li>
                                        <a href="main/">2</a>
                                    </li>
                                    <li>
                                        <a href="main/">3</a>
                                    </li>
                                    <li>
                                        <a href="main/">4</a>
                                    </li>
                                    <li>
                                        <a href="main/">5</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Latest News Area End Here -->
        <!-- Make An Appointment Area Start here -->
        <div class="make-appointment-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="make-appointment">
                            <h2>Need An Appointment For Legal HElp?</h2>
                            <a href="contactus">Make An Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Make An Appointment Area End here -->
        <!-- Partner Logo Area Start Here -->
      
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
                            <a href="contact">Get Free Consultation</a>
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
        <script src="main/js/vendor/jquery-1.11.3.min.js"></script>
        <!-- bootstrap JS
		============================================ -->
        <script src="main/js/bootstrap.min.js"></script>
        <!-- wow JS
		============================================ -->
        <script src="main/js/wow.min.js"></script>
        <!-- price-slider JS
		============================================ -->
        <script src="main/js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
		============================================ -->
        <script src="main/js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
		============================================ -->
        <script src="main/js/owl.carousel.min.js"></script>
        <!-- scrollUp JS
		============================================ -->
        <script src="main/js/jquery.scrollUp.min.js"></script>
        <!-- plugins JS
		============================================ -->
        <script src="main/js/plugins.js"></script>
        <!-- Nivo slider js
        ============================================ -->
        <script src="main/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="main/custom-slider/home.js" type="text/javascript"></script>
        <!-- main JS
		============================================ -->
        <script src="main/js/main.js"></script>
    </body>

</html>
