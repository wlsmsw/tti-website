<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="TTI - Your solution in construction and transformation">
        <meta name="author" content="Tochigi-ken Technologies International Inc.">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=base_url('assets/img/tti-icon.png')?>" type="image/x-icon">
        <link rel="icon" href="<?=base_url('assets/img/tti-icon.png')?>" type="image/x-icon">

        <link href="<?=base_url('assets/css/tagsinput.css')?>" rel="stylesheet">
        <link href="<?=base_url('assets/css/cookie.css')?>" rel="stylesheet">

        <title>Tochigi-ken Technologies International Inc.</title>

        <!-- font family -->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/aos.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/animate.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/hover.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/owl.carousel.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/navik.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/stylesheet.css')?>">

    </head>
    <body>
        <div class="trigger"><a href="#menu-desk"><span></span></a></div>

        <div class="navik-header header-opacity header-shadow viewport-lg">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="navik-header-container">
                          
                            <div class="logo" data-mobile-logo="<?=base_url('assets/img/tti-nobg-2.png')?>" data-sticky-logo="<?=base_url('assets/img/tti-nobg-2.png')?>">
                                <img src="<?=base_url('assets/img/tti-nobg-2.png')?>" alt="logo"/>
                            </div>

                            <div class="burger-menu">
                                <div class="line-menu line-half first-line"></div>
                                <div class="line-menu"></div>
                                <div class="line-menu line-half last-line"></div>
                            </div>

                            <nav class="navik-menu menu-caret submenu-top-border submenu-scale">
                                <ul>
                                    <li class="">
                                        <a class="" href="#">Home</a>
                                    </li>
                                    <li class="<?=($page == 'About Us') ? 'active' : ''?>">
                                        <a class="" href="<?=base_url('company-overview')?>">About Us</a>
                                        <ul>
                                            <li><a class="" href="<?=base_url('company-overview')?>">Company Overview</a></li>
                                            <li><a class="" href="<?=base_url('mission-vision')?>">Mission & Vision</a></li>
                                            <li><a class="" href="<?=base_url('quality-policy')?>">Quality Policy & Objectives</a></li>
                                        </ul>
                                    </li>
                                    <li class="<?=($page == 'Products') ? 'active' : ''?>">
                                        <a class="" href="#">Products</a>
                                        <ul>
                                                     
                                            <?php
                                                foreach($products as $k=>$v){
                                                    if(isset($v['sub'])){
                                                        echo '<li><a class="" href="#">'.$v['name'].'</a><ul>';
                                                        foreach($v['sub'] as $k1 => $v1){
                                                            echo '<li><a class="" href="'.base_url('products/'.$k.'/'.$k1).'">'.$v1['name'].'</a></li>';
                                                        }
                                                        echo '</ul>';
                                                    }else{
                                                        echo '<li><a class="" href="'.base_url('products/'.$k).'">'.$v['name'].'</a>';
                                                    }
                                                    echo '</li>';
                                                }
                                            ?>
                                            
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a class="" href="#">Projects</a>
                                        <ul>
                                            <?php 
                                                foreach($projects as $p){
                                                    echo '<li><a class="" href="'.base_url('projects/'.$p['cat_slug']).'">'.$p['cat_name'].'</a></li>';
                                                }
                                            ?>
                                        </ul>
                                    </li>
                                    <li class="<?=($page == 'News') ? 'active' : ''?>">
                                        <a class="" href="<?=base_url('news')?>">News</a>
                                    </li>
                                    
                                    <li class="<?=($page == 'Careers') ? 'active' : ''?>">
                                        <a class="" href="<?=base_url('careers')?>">Careers</a>
                                    </li>
                                    
                                    <li class="<?=($page == 'Contact Us') ? 'active' : ''?>">
                                        <a class="" href="<?=base_url('contact-us')?>">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="wf-banner">
            <div class="banner-content" backg>
                               
                <img src="<?=base_url('assets/img/plan-bg.webp')?>" style="width:100%" id="myVideo">

                <div class="color-overlay"></div>

                <div class="dots-overlay"></div>

                    <div class="banner-caption">
                        <div class="content-wrapper">

                            <h2 data-aos="fade-up" data-aos-delay="200">Your solution in innovative construction</h2>
                            <p data-aos="fade-up" data-aos-delay="400">Our Policy is to create a Global perspective as a solution provider responding to the needs of our customer with Best Quality, Lead Time and Low Cost.</p>
                        </div>
                    </div>
            </div>
        </div>
        
        <section id="wf-intro">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                         <img src="<?=base_url('assets/img/about-us-home.png')?>">
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="about-title">
                            <h2>About Us</h2>
                        </div>

                        <p>Tochigi-ken Technologies International Inc. was established last August 10, 2006 as Cleanroom/ESD Consumables, Toolings and Fabrication Supplier for Semiconductors, Electronics, medical devices, food processing and pharmaceutical companies.</p>
                            
                        <p>As a result of diversification during the period, TTI ventured into other business – Construction. Started with Cleanroom Design and Construct, then expanded to general construction works covering Civil / Architectural, Mechanical, Electrical Works. November 2013 – Started Fabrication / Machine Shop.</p>
                        
                        <p><strong>Our Policy is to create a Global perspective as a solution provider responding to the needs of our customer with Best Quality, Lead Time and Low Cost.</strong></p>

                        <p>&nbsp;</p>

                        <p><strong><a href="<?=base_url('company-overview')?>">READ MORE</a></strong></p>

                    </div>

                    

                </div>
            </div>
        </section>

        <section id="wf-clients">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-12">
                        <div class="clients-title">
                            <h2>Companies we&#39;ve worked with</h2>

                            <div class="clients-slider" data-aos="fade-down">
                                <div class="citem">
                                    <img src="<?=base_url('assets/img/company-logos/company1.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company2.jfif')?>" /> 
                                    <img src="<?=base_url('assets/img/company-logos/company3.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company4.jfif')?>" /> 
                                    <img src="<?=base_url('assets/img/company-logos/company5.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company6.jfif')?>" /> 
                                    <img src="<?=base_url('assets/img/company-logos/company7.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company8.jfif')?>" /> 
                                </div>

                                <div class="citem">
                                    <img src="<?=base_url('assets/img/company-logos/company9.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company10.jfif')?>" /> 
                                    <img src="<?=base_url('assets/img/company-logos/company11.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company12.jfif')?>" /> 
                                    <img src="<?=base_url('assets/img/company-logos/company13.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company14.jfif')?>" /> 
                                    <img src="<?=base_url('assets/img/company-logos/company15.jfif')?>" /><img src="<?=base_url('assets/img/company-logos/company16.jfif')?>" /> 
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--stories-->
        <section id="wf-stories">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="clients-title">
                            <h2>Latest Stories</h2>
                        </div>
                    </div>


                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="story-box hvr-shrink">
                            <img src="<?=base_url('assets/img/const-story1.jpg')?>">
                            <a href="#">New Project Released</a>
                            <p>2025-05-05</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="story-box hvr-shrink">
                            <img src="<?=base_url('assets/img/const-story1.jpg')?>">
                            <a href="#">New Project Released</a>
                            <p>2025-05-05</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="story-box hvr-shrink">
                            <img src="<?=base_url('assets/img/const-story1.jpg')?>">
                            <a href="#">New Project Released</a>
                            <p>2025-05-05</p>
                        </div>
                    </div>

                    
                </div>

            </div>
            </div>
        </section>

        <div id="wf-footer">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="footer-contact">
                            <h2>Contact us</h2>

                            <p><strong>Our Office</strong><br />
                            5th St., Blk 7 Lot 6, Golden Mile Business Park, Brgy. Maduya, Carmona, Cavite</p>

                            <p><strong>Telephone</strong><br />
                            +63 (46) 482-0731<br />
                            +63 (46) 404-8025<br />
                            +63 (46) 482-0742<br />
                            +63 (46) 404-5071<br />

                            <p><strong>E-mail</strong><br />
                            Sales: <a href="mailto:sales@tochigiken-tech.com">sales@tochigiken-tech.com</a><br />
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="footer-sitemap">
                        <h2>About Us</h2>

                        <ul>
                          <li><a href="<?=base_url('company-overview')?>">Company Overview</a></a></li>
                          <li><a href="<?=base_url('mission-vision')?>">Mission & Vision</a></li>
                          <li><a href="<?=base_url('quality-policy')?>">Quality Policy & Objectives</a></a></li>
                        </ul>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="footer-follow">
                            <h2>Social Media</h2>
                            
                            <p>Follow us on our social media accounts</p>
                            
                            <ul>
                              <li><a href="#" target="_blank"><span class="fa fa-facebook"></span></a></li>
                              <li><a href="#" target="_blank"><span class="fa fa-twitter"></span></a></li>
                              <li><a href="#" target="_blank"><span class="fa fa-instagram"></span></a></li>
                              <li><a href="#" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                              <li><a href="#" target="_blank"><span class="fa fa-youtube"></span></a></li>
                            </ul>
                            
                            
                       
                        </div>
                    </div>

                    <div class="clearfix">&nbsp;</div>
                </div>
            </div>
        </div>


        <div id="wf-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright-content">
                            <ul>
                              <li><a href="news.php">News</a></li>
                              <li><a href="contact-us.php">Contact Us</a></li>
                              <li><a href="<?=base_url('cookie-policy')?>">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="copyright-content">
                            <p>&copy; Tochigi-Ken Technologies International Inc. | 2025 All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--scripts-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <script src="https://cdn.plyr.io/2.0.15/plyr.js"></script>

        <script type="text/javascript" src="<?=base_url('assets/js/jquery-1.11.3.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/script.js')?>"></script>

        <script src="<?=base_url('assets/js/navik.menu.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/owl.carousel.js')?>"></script>

        <script type="text/javascript" src="<?=base_url('assets/js/aos.js')?>"></script>

        <script> AOS.init(); </script>


        <!--privacy notice-->
        <div class="privacy-notice" id="ns-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-9">
                        <p><strong>Privacy & Cookie Policy</strong></p>
                        <p>By continuing to browse our site, you are agreeing to our Privacy Policy and Terms of Use.
                    &nbsp;<a href="<?=base_url('cookie-policy')?>"><span class="underlined-text">Read more</span></a></p>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <div class="privacy-button">
                            <button class="btn btn-danger btn-sm" onclick="ns_hide()">Agree</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.privacy-notice').slideDown(500);
            });

            $(".privacy-notice button").click(function () {
                $(".privacy-notice").slideUp(500);
                $( "div#js-header" ).animate({
                  top: "0",
                }, 500, function() {
                // Animation complete.
                });
            });

            function ns_hide() {
                var date = new Date()
                document.cookie = "cookie_policy=true; Max-Age=50400; path=/";
            }

            function ns_show(){
                var isClicked = document.cookie.replace(/(?:(?:^|.*;\s*)cookie_policy\s*\=\s*([^;]*).*$)|^.*$/, "$1");
                if(isClicked==""){ isClicked = false; }else{ isClicked = true; }
                return isClicked;
            }

            $(document).ready(function(){
                if(ns_show()){
                  document.getElementById("ns-box").style.display = "none";
                }
            });
        </script>

    </body>
</html>