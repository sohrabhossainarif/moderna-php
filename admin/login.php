<?php
session_start();
require_once("db_connect.php");

if (isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:index.php');
}

if (isset($_POST['subimt'])) {
    $email = trim(htmlentities($_POST['email']));
    $password = htmlentities($_POST['password']);
    // print_r($_POST);
    $user_error = array();
    // email error
    if (empty($email)) {
        $user_error['email_error'] = "Required email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $user_error['email_error'] = "Required valid email";
    }

    // password error
    if (empty($password)) {
        $user_error['password_error'] = "Required user password!";
    }
    if (empty($user_error)) {
        $result = mysqli_query($con, "select * from users where email = '$email'");
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                $_SESSION['ADMIN_LOGIN'] = "yes";

                header('location: index.php');
            } else {
                $user_error['password_error'] = "Password not matched!";
            }
        } else {
            $user_error['email_error'] = "Email not found";
        }
    }
}

require_once("auth/login.view.php");

unset($_SESSION['success']);
