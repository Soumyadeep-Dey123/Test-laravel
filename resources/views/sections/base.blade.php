<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ultras - Clothing Store eCommerce Store HTML Website Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/template/normalize.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('icomoon/template/icomoon.css') }}">
        <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/template/vendor.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/template/style.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- script================================================== -->
        <script src="js/modernizr.js"></script>
    </head>
    <body>

        <div class="preloader-wrapper">
            <div class="preloader">
            </div>
        </div>
    
        <div class="search-popup">
            <div class="search-popup-container">
    
                <form role="search" method="get" class="search-form" action="">
                    <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s" />
                    <button type="submit" class="search-submit"><a href="#"><i class="icon icon-search"></i></a></button>
                </form>

                <h5 class="cat-list-title">Browse Categories</h5>
        
                <ul class="cat-list">
                    <li class="cat-list-item">
                    <a href="shop.html" title="Men Jackets">Men Jackets</a>
                    </li>
                    <li class="cat-list-item">
                    <a href="shop.html" title="Fashion">Fashion</a>
                    </li>
                    <li class="cat-list-item">
                    <a href="shop.html" title="Casual Wears">Casual Wears</a>
                    </li>
                    <li class="cat-list-item">
                    <a href="shop.html" title="Women">Women</a>
                    </li>
                    <li class="cat-list-item">
                    <a href="shop.html" title="Trending">Trending</a>
                    </li>
                    <li class="cat-list-item">
                    <a href="shop.html" title="Hoodie">Hoodie</a>
                    </li>
                    <li class="cat-list-item">
                    <a href="shop.html" title="Kids">Kids</a>
                    </li>
                </ul>
            </div>
        </div>
        <header id="header">
        <div id="header-wrap">
            <nav class="secondary-nav border-bottom">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-4 header-contact">
                            <p>Let's talk! <strong>+57 444 11 00 35</strong></p>
                        </div>
                        <div class="col-md-4 shipping-purchase text-center">
                        <p>Free shipping on a purchase value of $200</p>
                        </div>
                        <div class="col-md-4 col-sm-12 user-items">
                            <ul class="d-flex justify-content-end list-unstyled">
                                <li>
                                    <a href="login.html"><i class="icon icon-user"></i></a>
                                </li>
                                <li>
                                    <a href="cart.html"><i class="icon icon-shopping-cart"></i></a>
                                </li>
                                <li>
                                    <a href="wishlist.html"><i class="icon icon-heart"></i></a>
                                </li>
                                    <li class="user-items search-item pe-3">
                                    <a href="#" class="search-button"><i class="icon icon-search"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <nav class="primary-nav padding-small">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-2 col-md-2">
                            <div class="main-logo">
                                <a href="index.html"><img src="images/main-logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="navbar">
                                <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                                    <ul class="menu-list">
                                    <li class="menu-item has-sub">
                                        <a href="index.html" class="item-anchor active d-flex align-item-center" data-effect="Home">Home<i class="icon icon-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="index.html" class="item-anchor active">Home</a></li>
                                            <li><a href="home2.html" class="item-anchor">Home v2<span class="text-primary"> (PRO)</span></a></li>
                                        </ul>
                                    </li>
        
                                    <li><a href="about.html" class="item-anchor" data-effect="About">About</a></li>
    
                                    <li class="menu-item has-sub">
                                        <a href="shop.html" class="item-anchor d-flex align-item-center" data-effect="Shop">Shop<i class="icon icon-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="shop.html" class="item-anchor">Shop</a></li>
                                            <li><a href="shop-slider.html" class="item-anchor">Shop slider<span class="text-primary"> (PRO)</span></a></li>
                                            <li><a href="shop-grid.html" class="item-anchor">Shop grid<span class="text-primary"> (PRO)</span></a></li>
                                            <li><a href="shop-list.html" class="item-anchor">Shop list<span class="text-primary"> (PRO)</span></a></li>
                                            <li><a href="single-product.html" class="item-anchor">Single product<span class="text-primary"> (PRO)</span></a></li>
                                            <li><a href="cart.html" class="item-anchor">Cart<span class="text-primary"> (PRO)</span></a></li>
                                            <li><a href="wishlist.html" class="item-anchor">Wishlist<span class="text-primary"> (PRO)</span></a></li>
                                            <li><a href="checkout.html" class="item-anchor">Checkout<span class="text-primary"> (PRO)</span></a></li>
                                        </ul>
                                    </li>
        
                                    <li class="menu-item has-sub">
                                        <a href="#" class="item-anchor d-flex align-item-center" data-effect="Pages">Pages<i class="icon icon-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="coming-soon.html" class="item-anchor">Coming soon<span class="text-primary"> (PRO)</span></a></li>
                                            <li><a href="login.html" class="item-anchor">Login<span class="text-primary"> (PRO)</span></a></li>
                                            <li><a href="faqs.html" class="item-anchor">FAQs<span class="text-primary"> (PRO)</span></a></li>
                                            <li><a href="styles.html" class="item-anchor">Styles</a></li>
                                            <li><a href="thank-you.html" class="item-anchor">Thankyou</a></li>
                                            <li><a href="error.html" class="item-anchor">Error page<span class="text-primary"> (PRO)</span></a></li>
                                        </ul>
                                    </li>
        
                                    <li class="menu-item has-sub">
                                        <a href="blog.html" class="item-anchor d-flex align-item-center" data-effect="Blog">Blog<i class="icon icon-chevron-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="blog.html" class="item-anchor">Blog</a></li>
                                            <li><a href="blog-sidebar.html" class="item-anchor">Blog with sidebar<span class="text-primary"> (PRO)</span></a></li>
                                            <li><a href="blog-masonry.html" class="item-anchor">Blog masonry<span class="text-primary"> (PRO)</span></a></li>
                                            <li><a href="single-post.html" class="item-anchor">Single post</a></li>
                                        </ul>
                                    </li>
        
                                    <li><a href="contact.html" class="item-anchor" data-effect="Contact">Contact</a></li>
        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        </header>


        


            <section id="instagram" class="padding-large">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Follow our instagram</h2>
                </div>
                <p>Our official Instagram account <a href="#">@ultras</a> or <a href="#">#ultras_clothing</a></p>
                <div class="row d-flex flex-wrap justify-content-between">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <figure class="zoom-effect">
                            <img src="images/insta-image1.jpg" alt="instagram" class="insta-image">
                            <i class="icon icon-instagram"></i>
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="images/insta-image2.jpg" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <figure class="zoom-effect">
                            <img src="images/insta-image3.jpg" alt="instagram" class="insta-image">
                            <i class="icon icon-instagram"></i>
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <figure class="zoom-effect">
                            <img src="images/insta-image4.jpg" alt="instagram" class="insta-image">
                            <i class="icon icon-instagram"></i>
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <figure class="zoom-effect">
                            <img src="images/insta-image5.jpg" alt="instagram" class="insta-image">
                            <i class="icon icon-instagram"></i>
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <figure class="zoom-effect">
                            <img src="images/insta-image6.jpg" alt="instagram" class="insta-image">
                            <i class="icon icon-instagram"></i>
                        </figure>
                    </div>
                </div>          
            </div>
            </section>
    
            <section id="shipping-information">
            <hr>
            <div class="container">
                <div class="row d-flex flex-wrap align-items-center justify-content-between">
                    <div class="col-md-3 col-sm-6">
                        <div class="icon-box">
                            <i class="icon icon-truck"></i>
                            <h4 class="block-title">
                                <strong>Free shipping</strong> Over $200
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="icon-box">
                            <i class="icon icon-return"></i>
                            <h4 class="block-title">
                                <strong>Money back</strong> Return within 7 days
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="icon-box">
                            <i class="icon icon-tags1"></i>
                            <h4 class="block-title">
                                <strong>Buy 4 get 5th</strong> 50% off
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="icon-box">
                            <i class="icon icon-help_outline"></i>
                            <h4 class="block-title">
                                <strong>Any questions?</strong> experts are ready
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            </section>
    
            <footer id="footer">
                <div class="container">
                    <div class="footer-menu-list">
                        <div class="row d-flex flex-wrap justify-content-between">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer-menu">
                                    <h5 class="widget-title">Ultras</h5>
                                    <ul class="menu-list list-unstyled">
                                        <li class="menu-item">
                                            <a href="about.html">About us</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Conditions </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog.html">Our Journals</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Careers</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Affiliate Programme</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Ultras Press</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer-menu">
                                    <h5 class="widget-title">Customer Service</h5>
                                    <ul class="menu-list list-unstyled">
                                        <li class="menu-item">
                                            <a href="faqs.html">FAQ</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="contact.html">Contact</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Privacy Policy</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Returns & Refunds</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Cookie Guidelines</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Delivery Information</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer-menu">
                                    <h5 class="widget-title">Contact Us</h5>
                                    <p>Do you have any questions or suggestions? <a href="#" class="email">ourservices@ultras.com</a></p>
                                    <p>Do you need assistance? Give us a call.
                                    <br>
                                    <strong>+57 444 11 00 35</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer-menu">
                                    <h5 class="widget-title">Forever 2018</h5>
                                    <p>Cras mattis sit ornare in metus eu amet adipiscing enim. Ullamcorper in orci, ultrices integer eget arcu. Consectetur leo dignissim lacus, lacus sagittis dictumst.</p>
                                    <div class="social-links">
                                        <ul class="d-flex list-unstyled">
                                            <li>
                                                <a href="#"><i class="icon icon-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-youtube-play"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-behance-square"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <hr>
            </footer>
    
            <div id="footer-bottom">
                <div class="container">
                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                        <div class="copyright">
                            <p>Freebies by <a href="https://templatesjungle.com/">Templates Jungle</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
                        </div>
                        <div class="payment-method">
                            <p>Payment options :</p>
                            <div class="card-wrap">
                                <img src="images/visa-icon.jpg" alt="visa">
                                <img src="images/mastercard.png" alt="mastercard">
                                <img src="images/american-express.jpg" alt="american-express">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        <script src="{{ asset('js/template/jquery-1.11.0.min.js') }}"></script>
        <script src="{{ asset('js/template/plugins.js') }}"></script>
        <script src="{{ asset('js/template/script.js') }}"></script>

    </body>
</html>