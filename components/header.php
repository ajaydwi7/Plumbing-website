<?php
require 'config/database.php';
?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Glister UK - Plumbing & Heating Experts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.webp">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/plugins/preloader.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/meanmenu.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/backToTop.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/vendor/fontAwesome6Pro.css">
    <link rel="stylesheet" href="assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
                    <img src="assets/img/logo/preloader-logo.webp" alt="">
                    <img class="loading-logo" src="assets/img/logo/preloader.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- header area start  -->
    <header>
        <div id="header-sticky" class="header__main">
            <div class="container header__main-container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="header__main-content-wrapper p-relative">
                            <div class="header__main-left">
                                <div class="header__logo">
                                    <a href="<?= ROOT_URL ?>index.php" class="logo-dark"><img src="assets/img/logo/logo-black.png" alt="logo-img"></a>
                                </div>
                                <div class="area-separator d-none d-lg-inline-flex"></div>
                                
                            </div>
                            <div class="header__main-right">
                                <div class="main-menu main-menu1 d-none d-xl-block">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li >
                                                <a href="<?= ROOT_URL ?>index.php">Home</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="<?= ROOT_URL ?>services.php">Services</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item-has-children">
                                                        <a href="<?= ROOT_URL ?>boiler-installations.php">Boiler Installation</a>                                                       
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="<?= ROOT_URL ?>bathroom-installations.php">Bathroom installation</a>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="<?= ROOT_URL ?>servicing-maintenance.php">Servicing & Maintenance</a>                               
                                                    </li>
                                                    <li><a href="<?= ROOT_URL ?>special-projects.php">Special Projects</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="<?= ROOT_URL ?>blog.php">Blog</a>                                    
                                            </li>
                                            <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="area-separator d-none d-lg-inline-flex"></div>
                                <div class="message__now d-none d-lg-inline-flex">
                                    <div class="meta-item">
                                        <div class="meta-item__icon">
                                           <a lass="is-black" href="tel:+44 01279 295 772"><i class="icon-074-phone"></i></a>
                                        </div>
                                        <div class="meta-item__text">
                                            <p>CONTACT NUMBER</p>
                                            <span><a class="is-black" href="tel:+44 01279 295 772">+44 01279 295 772</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="area-separator d-none d-lg-inline-flex"></div>
                                <button class="side-toggle">
                                    <span class="menu__bar">
                                        <span class="bar-icon">
                                            <span></span>
                                    <span></span>
                                    <span></span>
                                    </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

    <!-- side toggle start -->
    <aside class="fix">
        <div class="side-info">
            <div class="side-info-content">
                <div class="offset__widget offset__header">
                    <div class="offset__logo">
                        <a href="<?= ROOT_URL ?>index.php">
                            <img src="assets/img/logo/logo-white.svg" alt="logo">
                        </a>
                    </div>
                    <button class="side-info-close">
                        <i class="fal fa-times"></i>
                    </button>
                </div>
                <div class="offset__widget offset__support d-none d-sm-block">
                    <h3 class="offset__title">Your Trusted Partner for Exceptional Plumbing and Heating Services</h3>
                </div>
                <div class="mobile-menu d-xl-none fix"></div>
                <div class="offset__widget offset__support">
                    <h6 class="offset__sub-title small fw-400 mb-30">CONTACT US</h6>
                    <div class="meta-item mb-20">
                        <div class="meta-item__icon-2">
                            <i class="icon-007-telephone"></i>
                        </div>
                        <div class="meta-item__text-2">
                            <span><a href="tel:+44 01279 295 772">+44 01279 295 772</a></span>
                        </div> 
                    </div>
                    <div class="meta-item mb-20">
                        <div class="meta-item__icon-2 style-2">
                            <i class="icon-024-whatsapp"></i>
                        </div>
                        <div class="meta-item__text-2">
                            <span><a href="https://wa.me/4401279295772">+44 01279 295 772</a></span>
                        </div> 
                    </div>
                    <div class="meta-item mb-20">
                        <div class="meta-item__icon-2 style-2">
                            <i class="icon-052-email"></i>
                        </div>
                        <div class="meta-item__text-2">
                            <span><a href="mailto:info@glister.uk"><span class="__cf_email__" data-cfemail="">info@glister.uk</span></a></span>
                        </div>
                    </div>
                    <div class="meta-item">
                        <div class="meta-item__icon-2 style-3">
                            <i class="icon-030-pin"></i>
                        </div>
                        <div class="meta-item__text-2">
                            <span><a href="https://maps.app.goo.gl/ymnkTde2USj8EDZT6">Bishops Park, Bishops Stortford, UK</a></span>
                        </div>
                    </div>
                </div>
                <div class="offset__widget offset__gallery">
                    <div class="offset__instagram d-none d-sm-block">
                        <h6 class="offset__sub-title small fw-400 mb-30">OUR INSTAGRAM POST</h6>
                        <div class="tp-insta">
                            <div class="row">
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="assets/img/offcanvas/boiler-01.webp">
                                            <img src="assets/img/offcanvas/boiler-01.webp" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="assets/img/offcanvas/bathroom-02.webp">
                                            <img src="assets/img/offcanvas/bathroom-02.webp" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="assets/img/offcanvas/bathroom-03.webp">
                                            <img src="assets/img/offcanvas/bathroom-03.webp" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="assets/img/offcanvas/bathroom-04.webp">
                                            <img src="assets/img/offcanvas/bathroom-04.webp" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href=assets/img/offcanvas/bathroom-06.webp">
                                            <img src="assets/img/offcanvas/bathroom-06.webp" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="assets/img/offcanvas/special-03.webp">
                                            <img src="assets/img/offcanvas/special-03.webp" alt="image not found"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>
    <!-- side toggle end -->