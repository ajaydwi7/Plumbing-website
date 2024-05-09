<?php
require "config/database.php";
session_start();

if (isset($_POST['submit'])) {
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$username_email || !$password) {
        $_SESSION['signin'] = 'Please enter both username/email and password';
        header('location: ' . ROOT_URL . 'signin.php');
        exit();
    }

    $fetch_user_query = "SELECT * FROM users WHERE username = '$username_email' OR email = '$username_email'";
    $fetch_user_result = mysqli_query($connection, $fetch_user_query);

    if (!$fetch_user_result) {
        $_SESSION['signin'] = "Database error: " . mysqli_error($connection);
        header('location: ' . ROOT_URL . 'signin.php');
        exit();
    }

    if (mysqli_num_rows($fetch_user_result) == 1) {
        $user_record = mysqli_fetch_assoc($fetch_user_result);
        $db_password = $user_record['password'];

        if (password_verify($password, $db_password)) {
            $_SESSION['user-id'] = $user_record['id'];
            $_SESSION['signin-success'] = "User successfully logged in";

            if ($user_record['is_admin'] == 1) {
                $_SESSION['user_is_admin'] = true;
                header('location: ' . ROOT_URL . 'admin/index.php');
                exit();
            } else {
                header('location: ' . ROOT_URL . 'user_dashboard.php');
                exit();
            }
        } else {
            $_SESSION['signin'] = "Incorrect username/email or password";
            header('location: ' . ROOT_URL . 'signin.php');
            exit();
        }
    } else {
        $_SESSION['signin'] = "User not found";
        header('location: ' . ROOT_URL . 'signin.php');
        exit();
    }
} else {
    header('location: ' . ROOT_URL . "signin.php");
    exit();
}
