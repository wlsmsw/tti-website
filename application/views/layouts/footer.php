<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

        
        
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
                              <li><a href="#" target="_blank"><span class="fa-brands fa-facebook-f"></span></a></li>
                              <li><a href="#" target="_blank"><span class="fa-brands fa-x-twitter"></span></a></li>
                              <li><a href="#" target="_blank"><span class="fa-brands fa-instagram"></span></a></li>
                              <li><a href="#" target="_blank"><span class="fa-brands fa-youtube"></span></a></li>
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
                              <li><a href="<?=base_url('contact-us')?>">Contact Us</a></li>
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
        <script type="text/javascript" src="<?=base_url('assets/js/lightslider.min.js')?>"></script>
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
        
        <!-- light slider projects -->
        <script>
            $("#lightSlider").lightSlider({
                onSliderLoad: function (el) {
                        var maxHeight = 0,
                        container = $(el),
                        children = container.children();
                        children.each(function () {
                            var childHeight = $(this).height();
                                if (childHeight > maxHeight) {
                                    maxHeight = childHeight;
                                }
                        });
                        container.height(maxHeight);
                },
            item:2,
            loop:true,
            slideMove:1,
            auto:false,
            easing: "cubic-bezier(0.25, 0, 0.25, 1)",
            speed:600,
            thumbItem: 10,	
            pager: true,	
            gallery:true,
            galleryMargin: 20,
            thumbMargin: 3,
            responsive : [
              {
                breakpoint:1400,
                settings: {
                  item:2,
                  slideMove:1
                }
              },
              {
                breakpoint:992,
                settings: {
                  item:2,
                  slideMove:1
                }
              },
              {
                breakpoint:768,
                settings: {
                  item:2,
                  slideMove:1
                }
              },
              {
                breakpoint:576,
                settings: {
                  item:1,
                  slideMove:1
                }
              }
            ]
          });

        </script>

    </body>
</html>