<?php

function nel($link)
{
    return path::rebase($link);
}

$a = new Sel();
$response = $a->getall('settings');
$pe = $a->getall('contact');
$title = $response[0]['appname'];
$logo = $response[0]['logo'];
$favicon = $response[0]['favicon'];

function parea()
{
    $p = fetchall('practiceareas');
    $dd = '';

    foreach ($p as $row) {
        $dd .= '<li>
    <a href="'.nel('areas/'.$row['id']).'">'.$row['title'].'</a></li>';
    }

    return $dd;
}

$img = path::rebase('yolkassets/upload/'.$logo);

echo ' 
<div style="display: none" class="mobile-menu-nav-back">
    <a class="logo-mobile" href="'.nel('home').'">
        <img src="'.($logo != '' ? $img : 'main/img/logo.png').'" alt="logo" class="img-fluid"/>
    </a>
</div>
<style>
    @media only screen and (max-width: 768px) {
        .mobile-menu-nav-back {
            display: block !important;
            text-align: left;
        }

        .mobile-menu-nav-back img {
            width: 80px;
            height: 80px;
        }
    }
</style>
<header>
<div class="header-area-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                <div class="header-top-left">
                    <p>
                        <i class="fa fa-map-marker"></i>'.$pe[0]['address'].'</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                <div class="header-top-right">
                    <nav>
                        <ul>
                            <li>
                                <a href="login"></a>
                            </li>
                            <li>
                                <a href="register"></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-sm-12">
                <div class="logo-area">
                    <a href="'.nel('home').'">';
                        echo $logo != '' ? '<img src="'.$img.'" alt="logo">' : '<img src="main/img/logo.png" alt="logo">';
                   echo' </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-sm-12">
                <div class="main-menu-area">
                    <nav>
                        <ul>
                            <li class="current">
                                <a href="'.nel('home').'">
                                    <i class="fa fa-home"></i>
                                </a>
                                
                            </li>
                            <li>
                                <a href="'.nel('about').'">About Us</a>
                            </li>

                            <li>
                                <a href="'.nel('attorney').'">Our Attorney</a>
                            </li>
                            <li>
                                <a href="">PRACTICE AREAS</a>
                                <ul>
                                    
                                    '.parea().'
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="'.nel('awards').'">Awards</a>
                            </li>
                            
                            
                            <li>
                                <a href="'.nel('contactus').'">CONTACT US</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
           <!-- <div class="col-lg-2 col-md-2 col-sm-2 hidden-sm col-sm-12">
                <div class="search-area">
                    <span>
                        <i class="fa fa-search"></i>
                    </span>
                    <input type="text" placeholder="Search Here....">
                </div>
            </div>-->
        </div>
    </div>
</div>
<!-- mobile-menu-area start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li class="current">
                                <a href="home">
                                    <i class="fa fa-home"></i>
                                </a>
                                
                            </li>
                            <li>
                                <a href="'.nel('about').'">About Us</a>
                            </li>

                            <li>
                                <a href="'.nel('attorney').'">Our Attorney</a>
                            </li>
                            <li>
                                <a href="">PRACTICE AREAS</a>
                                <ul>
                                    '.parea().'
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="'.nel('awards').'">Awards</a>
                            </li>
                            
                            
                            <li>
                                <a href="'.nel('contactus').'">CONTACT US</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area end -->
</header>';

function practice()
{
    $p = fetchall('practiceareas');
    foreach ($p as $row) {
        echo '<div class="single-practice">
        <div class="single-practice-content">
            <i class="fa fa-briefcase"></i>
            <h3>
                <a href="">'.$row['title'].'</a>
            </h3>
            <p>'.substr($row['content'], 0, 100).'...</p>
            <div class="read-more">
                <a href="areas/'.$row['id'].'">Read More</a>
            </div>
        </div>
    </div>';
    }
}

function testimony($type)
{
    $t = fetchall('testimony');
    foreach ($t as $row) {
        if ($type == 1) {
            echo '<div class="single-client-area">
                <h3>
                    <a href="">'.$row['name'].'t</a>
                </h3>
                <p class="designation">'.$row['position'].'</p>
                <div class="picture">
                    <a href="">
                        <img src="yolkassets/upload/'.$row['image'].'" alt="">
                    </a>
                    <ul>
                        <li>
                            <a href="">
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li class="disable">
                            <a href="">
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>'.$row['comment'].'</p>
            </div>';
        } elseif ($type == 2) {
            echo '<div class="single-testimonial">
            <p>'.$row['comment'].'</p>
            <div class="picture">
                <a href="">
                    <img alt="" src="yolkassets/upload/'.$row['image'].'">
                </a>
                <h3>
                    <a href="">'.$row['name'].'</a>
                </h3>
                <h4>
                    <a href="">'.$row['position'].'</a>
                </h4>
            </div>
        </div>';
        }
    }
}
function attorney()
{
    $a = fetchall('attorney');

    foreach ($a as $row) {
        echo '<div class="single-attorney">
        <div class="attorney-picture">
            <a href="">
                <img src="yolkassets/upload/'.$row['image'].'" alt="" style="width:100%;height:400px;">
            </a>
            <div class="overlay">
            <h2>
                <a href="viewattorney/'.$row['id'].'">View Bio</a>
             </h2>
                <div class="social-media">
                    <ul>
                        <li>
                            <a href="'.$row['facebook'].'">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="'.$row['twitter'].'">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="'.$row['linkedin'].'">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="'.$row['skype'].'">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="attorney-content">
            <h3>
                <a href="viewattorney/'.$row['id'].'">'.$row['name'].'</a>
            </h3>
            <p>'.$row['position'].'</p>
        </div>
    </div>';
    }
}

function attorney1()
{
    $a = fetchall('attorney');

    foreach ($a as $row) {
        echo '<div class="single-attorney">
        <div class="attorney-picture">
            <a href="">
                <img src="/yolkassets/upload/'.$row['image'].'" alt="" style="width:100%;height:400px;">
            </a>
            <div class="overlay">
                <h2>
                    <a href="/viewattorney/'.$row['id'].'">View Bio</a>
                </h2>
                <div class="social-media">
                    <ul>
                        <li>
                            <a href="'.$row['facebook'].'">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="'.$row['twitter'].'">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="'.$row['linkedin'].'">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="'.$row['skype'].'">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="attorney-content">
            <h3>
                <a href="/viewattorney/'.$row['id'].'">'.$row['name'].'</a>
            </h3>
            <p>'.$row['position'].'</p>
        </div>
    </div>';
    }
}

function simages()
{
    $i = 0;
    $f = fetchall('homeslide', [], '2');
    foreach ($f as $row) {
        ++$i;
        echo '<div id="ensign-nivoslider" class="slides">
                    
        <img src="yolkassets/upload/'.$row['slideimage'].'" alt="image" title="#slider-direction-'.($i).'" />
    </div>';
    }
}

function slider()
{
    $i = 0;
    $cc = $i == 1 ? 't-cn slider-direction' : 'slider-direction';
    $f = fetchall('homeslide', [], '1');
    foreach ($f as $row) {
        ++$i;

        echo '<div id="ensign-nivoslider" class="slides">
                    
        <img src="yolkassets/upload/'.$row['slideimage'].'" alt="image" title="#slider-direction-'.($i).'" />
    </div>
<!-- direction 1 -->
<div id="slider-direction-'.$i.'" class="'.$cc.'">
    <div class="slider-progress"></div>
    <div class="slider-content t-cn s-tb slider-'.$i.'">
        <div class="title-container s-tb-c title-compress">
            <div data-wow-delay="0.2s" data-wow-duration="2s" class="tp-caption big-title rs-title customin customout bg-sld-cp-primary wow zoomIn"
                style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: zoomIn;">
               '.$row['slidetitle'].'
            </div>
            <div data-wow-delay="0.3s" data-wow-duration="3s" class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomIn"
                style="visibility: visible; animation-duration: 3s; animation-delay: 0.3s; animation-name: zoomIn;">
                '.$row['slidesubtitle'].'
            </div>
        </div>
        <div data-wow-delay="0.4s" data-wow-duration="4s" class="button wow fadeIn" style="visibility: visible; animation-duration: 4s; animation-delay: 0.4s; animation-name: fadeIn;">
            <a href="'.$row['btnlink'].'" class="btn btn-success">'.$row['btntitle'].'</a>
        </div>
    </div>
</div>';
    }
}
