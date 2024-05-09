<<?php

    include "config/constants.php";

    //get beck form DATA IF THERE IS A REGISTRATION ERROR
    $firstname = $_SESSION['signup-data']['firstname'] ?? null;
    $lastname = $_SESSION['signup-data']['lastname'] ?? null;
    $username = $_SESSION['signup-data']['username'] ?? null;
    $email = $_SESSION['signup-data']['email'] ?? null;
    $createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
    $confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;


    //delete signup data session
    unset($_SESSION['signup-data']);


    ?> <!DOCTYPE html>
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

        <!-- Add your site or application content here -->
        <main>

            <div class="adjust-header-space bg-common-white"></div>

            <!-- page title area start  -->
            <section class="page-title-area-2 breadcrumb-spacing bg-theme-4 section-spacing">
                <div class="d-none" data-background="d-none"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="page-title-wrapper-2 text-center">
                                <h1 class="page__title-2 mb-15">Sign Up</h1>
                                <div class="breadcrumb-menu-2 d-flex justify-content-center">
                                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                        <ul class="trail-items-2">
                                            <li class="trail-item-2 trail-begin"><a href="index.html"><span>Home</span></a></li>
                                            <li class="trail-item-2 trail-end"><span>Sign Up</span></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title area start  -->
            <!-- sign-up area start  -->
            <section class="df-sign-up__area section-spacing p-relative fix">
                <div class="circle-2"></div>
                <div class="circle-3"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <div class="df-booking2__form wow fadeInUp" data-wow-delay=".3s">
                                <div class="section__title-wrapper text-center section-title-spacing">
                                    <h3 class="section__title x-large">Register</h3>

                                </div>
                                <?php
                                if (isset($_SESSION['signup'])) : ?>
                                    <div class="alert__message error">
                                        <p class="mt-15">
                                            <?= $_SESSION['signup'];
                                            unset($_SESSION['signup']);
                                            ?>
                                        </p>

                                    </div>

                                <?php endif ?>
                                <form action="<?= ROOT_URL ?>signup-logic.php" method="POST" enctype="multipart/form-data">
                                    <div class="row gx-5">
                                        <div class="col-md-12">
                                            <div class="df-input-field">
                                                <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="df-input-field">
                                                <input type="text" name="lastname" value="<?= $firstname ?>" placeholder="Last Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="df-input-field">
                                                <input type="username" name="username" value="<?= $username ?>" placeholder="Username *">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="df-input-field">
                                                <input type="text" id="email" name="email" value="<?= $email ?>" placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="df-input-field">
                                                <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Password *">
                                                <span class="fa fa-eye pass-icon"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="df-input-field mb-0">
                                                <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm Password *">
                                                <span class="fa fa-eye pass-icon"></span>
                                            </div>
                                        </div>
                                        <div class="form__control">
                                            <label for="avatar">User Avatar</label>
                                            <input type="file" name="avatar" id="avatar">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="df-booking2__form-btn mt-15 mb-30">
                                                <button type="submit" name="submit" class="primary-btn sign-btn w-100">Sign Up
                                                    <span class="icon__box">
                                                        <img class="icon__first" src="assets/img/icon/arrow-white.webp" alt="image not found">
                                                        <img class="icon__second" src="assets/img/icon/arrow-white.webp" alt="image not found">
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="sing-up-text text-center">
                                                <span class="sign-title">
                                                    Do you have an account?
                                                </span>
                                                <a class="sign-link" href="signin.php">Sign In</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- sign-up area end  -->
        </main>
    </body>

    </html>