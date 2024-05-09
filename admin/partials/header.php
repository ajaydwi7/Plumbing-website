<?php

require 'config/database.php';
// check login status
if (!isset($_SESSION['user-id'])) {
    header('location: ' . ROOT_URL . 'signin.php');
    die();
}


if (isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id='$id'";
    $result = mysqli_query($connection, $query);
    $avatar =  mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE HTML>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Glister UK - Plumbing & Heating Experts</title>
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.webp">
        <!-- CUSTOM STYLESHEET -->
        <link rel="stylesheet" href="css/style.css">
        <!-- <link rel="stylesheet" href="css/content-styles.css" type="text/css"> -->
        <!-- ICONSCOUT CDN -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <script src="https://cdn.ckeditor.com/ckeditor5/41.3.0/classic/ckeditor.js"></script>

    </head>

    <body>

        <nav>
            <div class="container nav__container">
                <a href="<?= ROOT_URL ?>index.php" class="nav__logo">GLISTER</a>
                <ul class="nav__items">
                    <li><a href="<?= ROOT_URL ?>index.php">Home</a></li>
                    <li class="menu-item"><a href="<?= ROOT_URL ?>services.php">Services</a>
                        <ul id="sub-menu">
                            <li><a href="<?= ROOT_URL ?>boiler-installations.php">Boiler-installations</a></li>
                            <li><a href="<?= ROOT_URL ?>bathroom-installations.php">Bathroom-installations</a></li>
                            <li><a href="<?= ROOT_URL ?>servicing-maintenance.php">Servicing & Maintenance</a></li>
                            <li><a href="<?= ROOT_URL ?>special-projects.php">Special Projects</a></li>
                        </ul>
                    </li>
                    <li><a href=" <?= ROOT_URL ?>blog.php">Blog</a>
                    </li>
                    <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
                    <?php if (isset($_SESSION['user-id'])) : ?>

                        <li class="nav__profile">
                            <div class="avatar">
                                <img src="<?= ROOT_URL . '../assets/img/avatar/' . $avatar['avatar'] ?>">
                            </div>
                            <ul>
                                <li><a href="<?= ROOT_URL ?>/admin/index.php">Dashboard</a></li>
                                <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
                            </ul>
                        </li>
                    <?php else : ?>
                        <li><a href="<?= ROOT_URL ?>signin.php">SignIn</a></li>
                    <?php endif ?>
                </ul>

                <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
                <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
            </div>
        </nav>
        <!-- ======================== END OF NAV ======================== -->