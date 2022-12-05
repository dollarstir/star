<?php

// function nell($link)
// {
//     return path::rebase($link);
// }
$a = new Sel();
$response = $a->getall('settings');
$footer = $response[0]['footertext'];
$add = $a->getall('contact');

// function parea()
// {
//     $do = fetchall('practiceareas');
//     $din = '';

//     foreach ($do as $row) {
//         $din .= '<li>
//     <a href="'.nel('areas/'.$row['id']).'">'.$row['title'].'</a></li>';
//     }

//     return $din;
// }
echo '   <footer>
<div class="footer-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer footer-one">
                    <h2>About Us</h2>
                    <p>'.$response[0]['shortnote'].'</p>
                   
                    <div class="social-media">
                        <ul>
                            <li>
                                <a href="'.$response[0]['facebook'].'">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="'.$response[0]['twitter'].'">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="'.$response[0]['linkedin'].'">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="'.$response[0]['skype'].'">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer footer-two">
                    <h2>Explore Our Work</h2>
                    <ul>
                        '.parea().'
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer footer-three">
                    <h2>Keep in Touch</h2>
                    <ul>
                        <li>
                            <i class="fa fa-clock-o"></i> Sat-Mon</li>
                        <li>
                            <i class="fa fa-map-marker"></i> '.$add[0]['address'].'</li>
                        <li>
                            <i class="fa fa-phone"></i> '.$add[0]['phone'].'</li>
                        <li>
                            <i class="fa fa-envelope-o"></i> '.$add[0]['email'].'</li>
                            <li>
                            <i class="fa fa-envelope-o"></i> '.$add[0]['email2'].'</li>
                        <li>
                            <i class="fa fa-fax"></i> '.$add[0]['telephone'].'</li>
                    </ul>
                </div>
            </div>
            <!--<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer footer-four">
                    <h2>flickr GALLERY</h2>
                    <ul>
                        <li>
                            <a href="main/index.html#">
                                <img src="main/img/1.jpg" alt=""> </a>
                        </li>
                        <li>
                            <a href="main/index.html#">
                                <img src="main/img/2.jpg" alt=""> </a>
                        </li>
                        <li>
                            <a href="main/index.html#">
                                <img src="main/img/3.jpg" alt=""> </a>
                        </li>
                        <li>
                            <a href="main/index.html#">
                                <img src="main/img/1.jpg" alt=""> </a>
                        </li>
                        <li>
                            <a href="main/index.html#">
                                <img src="main/img/2.jpg" alt=""> </a>
                        </li>
                        <li>
                            <a href="main/index.html#">
                                <img src="main/img/3.jpg" alt=""> </a>
                        </li>
                    </ul>
                </div>
            </div>-->
        </div>
    </div>
</div>
<div class="footer-buttom-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-buttom">
                    <div class="scrollup">
                        <a href="main/index.html#">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                    <p> Copyright &copy; '.date('Y').'  '.$footer.' All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>';
