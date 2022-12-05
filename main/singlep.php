<?php involve('title.php');
$id = $context['id'];
$r = customfetch('practiceareas', [['id', '=', $id]]);
$rr = fetchAll('practiceareas');

?>
<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php title($r[0]['title']); ?></title>
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

    <body class="blog">
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
                            <h2><?php echo $r[0]['title']; ?></h2>
                            <div class="breadcumb">
                                <ul>
                                    <li>
                                        <a href="/home">Practice Areas</a>
                                    </li>
                                    <li><?php echo $r[0]['title']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Banner Area End here -->
        <!-- Blog Area Start -->
        <div class="total-blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                        <div class="single-blog-post">
                            <div class="blog-image">
                                <a href="">
                                    <img src="/yolkassets/upload/<?php echo $r[0]['image']; ?>" alt="<?php echo $r[0]['title']; ?>">
                                </a>
                            </div>
                            <h2><?php echo $r[0]['title']; ?></h2>
                           
                            <p><?php echo $r[0]['content']; ?></p>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="blog-sidebar-area">
                            <!-- <div class="single-sidebar">
                                <h2>SEARCH</h2>
                                <div class="sidebar-search">
                                    <input type="text" placeholder="Search...">
                                    <span>
                                        <button type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div> -->
                            <div class="single-sidebar">
                                <h2>Practice Areas</h2>
                                <div class="sidebar-category">
                                    <ul>
                                        
                                        <?php
                                            foreach ($rr as $row) {
                                                echo '<li>
                                                <a href="'.path::rebase('areas/'.$row['id']).'">'.$row['title'].'</a>
                                            </li>';
                                            }

                                        ?>

                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="single-sidebar">
                                <h2>Recent Post</h2>
                                <div class="sidebar-recent-post">
                                    <div class="media single-post">
                                        <div class="pull-left">
                                            <a href="/main/single.html">
                                                <img class="media-object" src="main/img/blog/4.jpg" alt="post">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="/main/single.html">New Lawyer</a>
                                            </h4>
                                            <div class="posted-date">
                                                <a href="/main/single.html">February 01, 2016</a>
                                            </div>
                                            <p>Lorem consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="media single-post">
                                        <div class="pull-left">
                                            <a href="/main/single.html">
                                                <img class="media-object" src="main/img/blog/5.jpg" alt="post">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="/main/single.html">Law start</a>
                                            </h4>
                                            <div class="posted-date">
                                                <a href="/main/single.html">February 01, 2016</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit ametet</p>
                                        </div>
                                    </div>
                                    <div class="media single-post">
                                        <div class="pull-left">
                                            <a href="/main/single.html">
                                                <img class="media-object" src="main/img/blog/6.jpg" alt="post">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="/main/single.html">Lawyer Said</a>
                                            </h4>
                                            <div class="posted-date">
                                                <a href="/main/single.html">February 01, 2016</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit ametet</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="single-sidebar">
                                <h2>Tags</h2>
                                <div class="popular-tags">
                                    <ul>
                                        <li>
                                            <a href="/main/single.html">Dental</a>
                                        </li>
                                        <li>
                                            <a href="/main/single.html">Medicare</a>
                                        </li>
                                        <li>
                                            <a href="/main/single.html">Medical</a>
                                        </li>
                                        <li>
                                            <a href="/main/single.html">Pharmacy</a>
                                        </li>
                                        <li>
                                            <a href="/main/single.html">Boilogist</a>
                                        </li>
                                        <li>
                                            <a href="/main/single.html">lipu</a>
                                        </li>
                                        <li>
                                            <a href="/main/single.html">Weight loss occurs</a>
                                        </li>
                                        <li>
                                            <a href="/main/single.html">Corniya</a>
                                        </li>

                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
        <!-- Make An Appointment Area Start here -->
        <div class="make-appointment-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="make-appointment">
                            <h2>Need An Appointment For Legal HElp?</h2>
                            <a href="<?php echo path::rebase('contactus'); ?>">Make An Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Make An Appointment Area End here -->
        <!-- Partner Logo Area Start Here -->
        <!-- <div class="client-logo-area">
            <div class="container">
                <div class="client-logo">
                    <div class="single-logo">
                        <a href="/main/single-practice.html#">
                            <img src="main/img/client/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-practice.html#">
                            <img src="main/img/client/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-practice.html#">
                            <img src="main/img/client/3.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-practice.html#">
                            <img src="main/img/client/4.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-practice.html#">
                            <img src="main/img/client/5.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-practice.html#">
                            <img src="main/img/client/6.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-practice.html#">
                            <img src="main/img/client/7.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-practice.html#">
                            <img src="main/img/client/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-practice.html#">
                            <img src="main/img/client/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="single-logo">
                        <a href="/main/single-practice.html#">
                            <img src="main/img/client/3.jpg" alt="">
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
                            <a href="<?php echo path::rebase('contactus'); ?>">Get Free Consultation</a>
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
