<?php
include 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ??  null;

unset($_SESSION['signin-data']);

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


    <!-- Add your site or application content here -->
    <main>

        <div class="adjust-header-space bg-common-white"></div>

        <!-- sign-in area start  -->
        <section class="df-sign-in__area section-spacing p-relative fix">
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="df-booking2__form wow fadeInUp" data-wow-delay=".3s">
                            <div class="section__title-wrapper text-center section-title-spacing">
                                <h3 class="section__title x-large">Wellcome Again</h3>
                                <?php
                                if (isset($_SESSION['signup-success'])) :
                                ?>
                                    <div class="alert__message success">
                                        <p class="mt-15">
                                            <?= $_SESSION['signup-success'];
                                            unset($_SESSION['signup-success']);
                                            ?>
                                        </p>

                                    </div>
                                <?php elseif (isset($_SESSION['signin'])) : ?>

                                    <div class="alert__message error">
                                        <p class="mt-15">
                                            <?= $_SESSION['signin'];
                                            unset($_SESSION['signin']);
                                            ?>
                                        </p>
                                    </div>

                                <?php endif ?>
                            </div>


                            <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
                                <div class="row gx-5">
                                    <div class="col-md-12">
                                        <div class="df-input-field">
                                            <input type="text" name="username_email" value='<?= $username_email ?>' placeholder="Username or Email *">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="df-input-field mb-0">
                                            <input type="password" name="password" value="<?= $password ?>" placeholder="Password *">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="df-booking2__form-btn mt-15 mb-30">
                                            <button type="submit" name="submit" class="primary-btn btn sign-btn w-100">login
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
                                                Don’t have an account?
                                            </span>
                                            <a class="sign-link" href="signup.php">Sign Up</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sign-in area end  -->

    </main>
</body>

</html>