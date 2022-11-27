<?php 
session_start();

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Elehaus- Electronics eCommerce Website Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.png">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="./assets/css/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/plugins/fancybox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>

    <!--== Wrapper Start ==-->
    <div class="wrapper home-four-wrapper">










        <!--== Start Header Wrapper ==-->
        <header class="header-wrapper">
    <?php 
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        $loggedin= true;
        }
        else{
        $loggedin = false;
        }echo '
            <div class="header-middle d-none d-xl-block">
                <div class="container">
                    <div class="row align-items-center justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="header-logo-area">
                                <a href="?p=home">
                                    <img class="logo-main" src="abdurrahman.png" width="100" height="25"
                                        alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <form class="header-search-box header-search-box-two ms-3">
                                <input class="form-control border border-warning" type="text" id="search" placeholder="Search Anything">

                                <button type="submit" class="btn-src border border-warning  ">
                                    <i class="icon-magnifier"></i>
                                </button>
                            </form>
                        </div>
                        
                        <div class="col-auto d-flex justify-content-end align-items-center">';
                        if(!$loggedin){
                            echo '
                            <a href="?p=loginregister" class="header-action-accoun">SignUp | </a>
                            <a href="?p=login" class="header-action-account">| Login</a>';}
                        if($loggedin){
                            echo '
                           
                                <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle header-action-account" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dashboard
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="?p=logout" class="header-action-accoun dropdown-item"> Profile</a></li>
                                    <li><a href="?p=logout" class="header-action-accoun dropdown-item"> Logout</a></li>
                                </ul>
                                </div>';}

                            echo '
                            <a class="header-action-wishlist" href="shop-wishlist.html">
                                <i class="icon-heart"></i>
                            </a>
                            <button class="header-action-cart" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasWithCartSidebar" aria-controls="offcanvasWithCartSidebar">
                                <i class="cart-icon icon-handbag"></i>
                                <span class="cart-count">01</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>';
            ?>
            <div class="header-middle d-xl-none">
                <div class="container">
                    <div class="row align-items-center justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="header-logo-area">
                                <a href="index.html">
                                    <img class="logo-main" src="assets/images/logo.png" width="182" height="31"
                                        alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-action d-flex justify-content-end align-items-center">
                                <button class="btn-search-menu d-xl-none me-lg-4 me-xl-0" type="button"
                                    data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch"
                                    aria-controls="AsideOffcanvasSearch">
                                    <i class="search-icon icon-magnifier"></i>
                                </button>
                                <a href="?p=loginregister" class="header-action-account d-none d-xl-block">Login /
                                    SignUp</a>
                                <a href="?p=loginregister" class="header-action-user me-lg-4 me-xl-0 d-xl-none">
                                    <i class="icon icon-user"></i>
                                </a>
                                <a class="header-action-wishlist" href="shop-wishlist.html">
                                    <i class="icon-heart"></i>
                                </a>
                                <button class="header-action-cart" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithCartSidebar" aria-controls="offcanvasWithCartSidebar">
                                    <i class="cart-icon icon-handbag"></i>
                                    <span class="cart-count">01</span>
                                </button>
                                <button class="btn-menu d-xl-none" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-four-area d-none d-xl-block">
                <div class="container">
                    <div class="header-four-inner-area">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto d-flex">
                                <div class="vertical-menu vertical-menu-two">
                                    <button class="vmenu-btn"><i class="icon fa fa-list-ul"></i> All Genre <i
                                            class="icon fa fa-angle-down"></i></button>
                                    <ul class="vmenu-content vmenu-content-none">
                                        <li class="vmenu-item"><a href="shop.html"> <span class="icon"></span>
                                                Comics</a></li>
                                        <li class="vmenu-item"><a href="shop.html"> <span class="icon"></span>
                                                Fantasy</a>
                                        </li>
                                        <li class="vmenu-item"><a href="shop.html"> <span class="icon"></span>
                                                Horror</a>
                                        </li>
                                        <li class="vmenu-item"><a href="shop.html"> <span class="icon"></span>
                                                Historical
                                                Fiction</a></li>
                                        <li class="vmenu-item"><a href="shop.html"> <span class="icon"></span>
                                                Mystery</a>
                                        </li>
                                        <li class="vmenu-item"><a href="shop.html"> <span class="icon"></span>
                                                Romance</a>
                                        </li>
                                        <li class="vmenu-item"><a href="shop.html"> <span
                                                    class="icon"></span>Thriller</a>
                                        </li>
                                        <li class="vmenu-item"><a href="shop.html"> <span class="icon"></span>
                                                Science Fiction</a></li>
                                    </ul>
                                    <!-- menu content -->
                                </div>
                                <div class="header-navigation d-none d-lg-block ps-xl-4 ps-xxl-10">
                                    <ul class="main-nav">
                                        <li class="main-nav-item has-submenu"><a class="main-nav-link"
                                                href="?p=home">Home</a>

                                        </li>
                                        <li class="main-nav-item"><a class="main-nav-link" href="?p=about">About</a>
                                        </li>



                                        <li class="main-nav-item"><a class="main-nav-link" href="?p=contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="header-action">
                                    <div class="phone-item-action phone-item-action--two">
                                        <div class="phone-item-icon">
                                            <img src="assets/images/icons/phone2.png" alt="Icon" width="32" height="36">
                                        </div>
                                        <div class="phone-item-content">
                                            <span>Call Us 24/7</span> <a href="tel:+00123456789">+00 123 456 789</a>
                                        </div>
                                    </div>
                                    <button class="btn-search-menu d-md-none" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch">
                                        <span class="search-icon">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5 11H11.71L11.43 10.73C12.41 9.59 13 8.11 13 6.5C13 2.91 10.09 0 6.5 0C2.91 0 0 2.91 0 6.5C0 10.09 2.91 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn-menu d-lg-none" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasWithBothOptions"
                                        aria-controls="offcanvasWithBothOptions">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->






        <?php
        include('controller/controller.php')
        ?>



        <!--== startFooterArea ==-->
        <footer class="footer-area mt-5">
            <div class="container">

                <div class="features-area">
                    <div class="row mb-n8 mt-n2">
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6">

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="assets/images/icons/1.png" width="44" height="38" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title text-white">Support 24/7</h4>
                                    <p>Delicated 24/7 Support</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6">

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="assets/images/icons/2.png" width="38" height="38" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title text-white">Easy Returns</h4>
                                    <p>Shop With Confidence</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6">

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <img src="assets/images/icons/3.png" width="48" height="38" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title text-white">Card Payment</h4>

                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mb-6">

                            <div class="feature-item border-0">
                                <div class="feature-icon">
                                    <img src="assets/images/icons/4.png" width="50" height="38" alt="Icon">
                                </div>
                                <div class="feature-content">
                                    <h4 class="feature-title text-white">Free Shipping</h4>
                                    <p>Capped at $50 per order</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="footer-main">
                    <div class="row mb-n6">
                        <div class="col-md-6 col-lg-2 mb-6">
                            <div class="widget-item">
                                <h4 class="widget-title">Information</h4>
                                <h4 class="widget-title widget-collapsed-title collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#widgetTitleId-1">Information</h4>
                                <div id="widgetTitleId-1" class="collapse widget-collapse-body">
                                    <ul class="widget-nav">
                                        <li><a href="about-us.html">About us</a></li>
                                        <li><a href="account.html">Delivery information</a></li>
                                        <li><a href="contact.html">Privacy Policy</a></li>
                                        <li><a href="shop.html">Sales</a></li>
                                        <li><a href="contact.html">Terms & Conditions</a></li>
                                        <li><a href="contact.html">Shipping Policy</a></li>
                                        <li><a href="contact.html">EMI Payment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 offset-lg-1 ps-xl-4 mb-6">
                            <div class="widget-item">
                                <h4 class="widget-title">Account</h4>
                                <h4 class="widget-title widget-collapsed-title collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#widgetTitleId-2">Account</h4>
                                <div id="widgetTitleId-2" class="collapse widget-collapse-body">
                                    <ul class="widget-nav">
                                        <li><a href="account.html">My account</a></li>
                                        <li><a href="account.html">My orders</a></li>
                                        <li><a href="account.html">Returns</a></li>
                                        <li><a href="account.html">Shipping</a></li>
                                        <li><a href="shop-wishlist.html">Wishlist</a></li>
                                        <li><a href="contact.html">How Does It Work</a></li>
                                        <li><a href="account.html">Merchant Sign Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 offset-lg-1 ps-xl-0 mb-6">
                            <div class="widget-item">
                                <h4 class="widget-title">Store</h4>
                                <h4 class="widget-title widget-collapsed-title collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#widgetTitleId-3">Store</h4>
                                <div id="widgetTitleId-3" class="collapse widget-collapse-body">
                                    <ul class="widget-nav">
                                        <li><a href="shop.html">Affiliate</a></li>
                                        <li><a href="shop.html">Bestsellers</a></li>
                                        <li><a href="shop.html">Discount</a></li>
                                        <li><a href="shop.html">Latest products</a></li>
                                        <li><a href="shop.html">Sale</a></li>
                                        <li><a href="shop.html">All Collection</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-6 offset-lg-1">
                            <div class="widget-item">
                                <h4 class="widget-title">Contact Us</h4>
                                <h4 class="widget-title widget-collapsed-title collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#widgetTitleId-4">Contact Us</h4>
                                <div id="widgetTitleId-4" class="collapse widget-collapse-body">
                                    <div class="widget-contact">
                                        <p class="widget-contact-desc">If you have any question. please contact us <a
                                                href="mailto://demo@example.com">demo@example.com</a></p>
                                        <div class="widget-info-item mb-6">
                                            <img src="assets/images/icons/pin.png" alt="Icon">
                                            <p>Your address goes here. 123, Address.</p>
                                        </div>
                                        <div class="widget-info-item">
                                            <img src="assets/images/icons/mobile.png" alt="Icon">
                                            <div class="info-item-call">
                                                <a href="tel://+0123456789 "> + 0 123 456 789 </a>
                                                <a href="tel://+0129456789 "> + 0 129 456 789 </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="footer-bottom">
                    <p class="copyright">© 2022 Snowbreeze. Made with <i class="fa fa-heart"></i> by <a target="_blank"
                            href="https://github.com/abdurrahman1q">AbdurRahman</a></p>
                    <!-- <a href="shop.html"><img src="assets/images/shop/payment.png" alt="Image-HasTech"></a> -->
                </div>

            </div>
        </footer>
        <!--== endFooterArea  ==-->



        <!--== Scroll Top Button ==-->
        <div class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>



        <!--== Start Side Menu ==-->
        <aside class="aside-side-menu-wrapper off-canvas-area offcanvas offcanvas-end" data-bs-scroll="true"
            tabindex="-1" id="offcanvasWithBothOptions">
            <div class="sidemenu-top">
                <div class="header-top-info">
                    <a href="shop.html"><span>World Wide Completely </span>Free Returns and Free Shipping</a>
                </div>

                \
            </div>
            <div class="offcanvas-header" data-bs-dismiss="offcanvas">
                <h5>Menu</h5>
                <button type="button" class="btn-close">×</button>
            </div>
            <div class="offcanvas-body">
                <!-- Start Mobile Menu Wrapper -->
                <div class="res-mobile-menu">
                    <nav id="offcanvasNav" class="offcanvas-menu">
                        <ul>
                            <li><a href="javascript:void(0)">Home</a>

                            </li>



                            <li><a href="contact.html">Contact</a></li>
                            <li class="vmenu-menu-item"><a href="javascript:void(0)">All Genre</a>
                                <ul class="vmenu-content">
                                    <li class="vmenu-item"><a href="shop.html"> <span class="icon"><img
                                                    src="assets/images/icons/vm1.png" alt="Icon"></span> Headphone</a>
                                    </li>
                                    <li class="vmenu-item"><a href="shop.html"> <span class="icon"><img
                                                    src="assets/images/icons/vm2.png" alt="Icon"></span> Video Game</a>
                                    </li>
                                    <li class="vmenu-item"><a href="shop.html"> <span class="icon"><img
                                                    src="assets/images/icons/vm3.png" alt="Icon"></span> Protable
                                            Speakers</a></li>
                                    <li class="vmenu-item"><a href="shop.html"> <span class="icon"><img
                                                    src="assets/images/icons/vm4.png" alt="Icon"></span> Digital
                                            Camera</a></li>
                                    <li class="vmenu-item"><a href="shop.html"> <span class="icon"><img
                                                    src="assets/images/icons/vm5.png" alt="Icon"></span> Gadgets</a>
                                    </li>
                                    <li class="vmenu-item"><a href="shop.html"> <span class="icon"><img
                                                    src="assets/images/icons/vm6.png" alt="Icon"></span> Home
                                            Appliances</a></li>
                                    <li class="vmenu-item"><a href="shop.html"> <span class="icon"><img
                                                    src="assets/images/icons/vm7.png" alt="Icon"></span> Audio
                                            Record</a></li>
                                    <li class="vmenu-item"><a href="shop.html"> <span class="icon"><img
                                                    src="assets/images/icons/vm8.png" alt="Icon"></span>
                                            Computer/Laptop</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End Mobile Menu Wrapper -->
            </div>
        </aside>
        <!--== Start Side Menu ==-->

    </div>
    <!--== Wrapper End ==-->

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="./assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="./assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="./assets/js/plugins/fancybox.min.js"></script>
    <script src="./assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="./assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="./assets/js/plugins/isotope.pkgd.min.js"></script>

    <!-- Custom Main JS -->
    <script src="./assets/js/main.js"></script>

</body>

</html>