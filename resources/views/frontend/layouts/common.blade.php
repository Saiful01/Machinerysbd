<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Rhyssa</title>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/chosen.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Heebo:100,300,400,500,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700" rel="stylesheet">


    <style>
        .header-content {
            padding: 10px 0 10px 0;
        }
    </style>
</head>
<body class="index-opt-1">
<div class="wrapper">
    <!-- HEADER -->
    <header class="site-header header-opt-1">
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <!-- hotline -->
                <ul class="nav-top-left">
                    <li><a href="#">Welcome to M Shop</a></li>
                </ul><!-- hotline -->
                <!-- heder links -->
                <ul class="nav-top-right rhyssa-nav">

                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Register / Sign in</a></li>
                </ul><!-- heder links -->
            </div>
        </div> <!-- header-top -->
        <!-- header-content -->
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 nav-left">
                        <!-- logo -->
                        <strong class="logo">
                            <a href="/"><img src="/assets/images/logo.png" alt="logo" height="50px" width="50px"></a>
                        </strong><!-- logo -->
                    </div>
                    <div class="col-md-8 nav-mind">
                        <!-- block search -->
                        <div class="block-search">
                            <div class="block-content">
                                <div class="categori-search  ">
                                    <select data-placeholder="All Categories"
                                            class="chosen-select categori-search-option">
                                        <option value="">All Categories</option>
                                        @foreach($categories as $category)

                                            <option>{{$category->category_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-search">
                                    <form>
                                        <div class="box-group">
                                            <input type="text" class="form-control"
                                                   placeholder="Search keyword here...">
                                            <button class="btn btn-search" type="button"><span
                                                    class="fa fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- block search -->
                    </div>
                    <div class="col-md-2 nav-right">
                        <!-- block mini cart -->
                        <span data-action="toggle-nav" class="menu-on-mobile hidden-md style2">
                                <span class="btn-open-mobile home-page">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="title-menu-mobile">Main menu</span>
                            </span>
                        <div class="block-minicart dropdown style2">
                            <a class="minicart" href="#">

                                    <span class="counter qty">

                                        <span class="cart-icon"><i class="fa fa-shopping-bag"
                                                                   aria-hidden="true"></i></span>

                                        <span class="counter-number">2</span>

                                    </span>
                                <span class="counter-your-cart">

                                        <span class="counter-label">Your Cart:</span>

                                        <span class="counter-price">$00.00</span>

                                    </span>
                            </a>
                            <div class="parent-megamenu">
                                <form>
                                    <div class="minicart-content-wrapper">
                                        <div class="subtitle">
                                            You have <span>2</span> item(s) in your cart
                                        </div>
                                        <div class="minicart-items-wrapper">
                                            <ol class="minicart-items">
                                                <li class="product-inner">
                                                    <div class="product-thumb style1">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="/assets/images/home2/c1.jpg"
                                                                             alt="c1"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Xbox One S Halo Collection
                                                            </a></div>
                                                        <a href="#" class="remove"><i class="fa fa-times"
                                                                                      aria-hidden="true"></i></a>
                                                        <span class="price price-dark">

                                                                <ins>$229.00</ins>

                                                            </span>
                                                    </div>
                                                </li>
                                                <li class="product-inner">
                                                    <div class="product-thumb style1">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="/assets/images/home2/c2.jpg"
                                                                             alt="c2"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Acer's Aspire S7 is a thin
                                                                and portable...</a></div>
                                                        <a href="#" class="remove"><i class="fa fa-times"
                                                                                      aria-hidden="true"></i></a>
                                                        <span class="price">

                                                                <ins>$229.00</ins>

                                                                <del>$259.00</del>

                                                            </span>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="subtotal">
                                            <span class="label">Total :</span>
                                            <span class="price">$480.00</span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-viewcart" href="#">View cart</a>
                                            <a class="btn btn-checkout" href="#">Checkout</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- block mini cart -->
                        <a href="#" class="hidden-md search-hidden"><span class="fa fa-search"></span></a>
                        <a class="wishlist-minicart" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- header-content -->
        <!-- header-menu-bar -->
        <div class="header-menu-bar header-sticky">
            <div class="header-menu-nav menu-style-1">
                <div class="container">
                    <div class="header-menu-nav-inner ">
                        <div class="header-menu header-menu-resize">
                            <ul class="header-nav rhyssa-nav">
                                <li class="btn-close hidden-md"><i class="fa fa-times" aria-hidden="true"></i></li>
                                <li class="menu-item-has-children ">
                                    <a href="/">হোম</a>
                                </li>
                                <li class="menu-item-has-children ">
                                    <a href="#">{{$categories[0]->category_name}}</a>
                                </li>
                                <li class="menu-item-has-children  item-megamenu">
                                    <a href="#">{{$categories[1]->category_name}}</a>

                                </li>
                                <li class="menu-item-has-children ">
                                    <a href="#">আমাদের সম্পর্কে</a>

                                </li>
                                <li class="menu-item-has-children ">
                                    <a href="/contact">যোগাযোগ</a>

                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- end HEADER -->
    @yield('content')
<!-- FOOTER -->
    <footer class="site-footer footer-opt-2">

        <div class="footer-column equal-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 equal-elem">
                        <h3 class="title-of-section">About Us</h3>
                        <div class="contacts">
                            <p class="contacts-info">Nullam tristique tortor nibh, in viverra libero sollicitudin ac.
                                Suspendisse quis lacinia ipsum. Etiam scelerisque sit amet lectus quis lacinia. Sed.</p>
                            <span class="contacts-info info-address "></span>
                            <span class="contacts-info info-phone">(+880) </span>
                            <span class="contacts-info info-support"></span>
                            <div class="socials">
                                <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="social"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#" class="social"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                                <a href="#" class="social"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-elem">
                        <div class="links">
                            <h3 class="title-of-section">My account</h3>
                            <ul>
                                <li><a href="#">Sign In</a></li>
                                <li><a href="#">View Cart</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-elem">
                        <div class="links">
                            <h3 class="title-of-section">Information</h3>
                            <ul>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">New products</a></li>
                                <li><a href="#">Best sellers</a></li>
                                <li><a href="#">Our stores</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-elem">
                        <div class="links">
                            <h3 class="title-of-section">Follow Us</h3>
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Pinterest</a></li>
                                <li><a href="#">Linkin</a></li>
                                <li><a href="#">Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright full-width">
            <div class="container">
                <div class="copyright-right">
                    © Copyright 2019<span> M shop</span>. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer><!-- end FOOTER -->
</div>
<a href="#" id="scrollup" title="Scroll to Top">Scroll</a>
<!-- jQuery -->
<script type="text/javascript" src="/assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/assets/js/wow.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="/assets/js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.sticky.js"></script>
<script type="text/javascript" src="/assets/js/jquery.elevateZoom.min.js"></script>
<script src="/assets/js/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="/assets/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
<script src="/assets/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script type="text/javascript" src="/assets/js/function.js"></script>
<script type="text/javascript" src="/assets/js/Modernizr.js"></script>
<script type="text/javascript" src="/assets/js/jquery.plugin.js"></script>
<script type="text/javascript" src="/assets/js/jquery.countdown.js"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body>
</html>
