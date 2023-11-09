<?php
session_start();
require_once('db_connect.php');
require_once('constant.php');

if (isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:index.php');
}

if (isset($_POST['submit'])) {
    $name = trim(htmlentities($_POST['name']));
    $email = trim(htmlentities(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)));
    // check password with confirm password
    if ($_POST['password'] == $_POST['confirm_password']) {
        $password = htmlentities($_POST['password']);
        // encrypt password
        $hash_password = password_hash($password, PASSWORD_BCRYPT);
    }

    // image file handle
    $avatar = $_FILES['avatar'];
    $avatar_name_arr = explode(".", $avatar['name']);
    $avatar_extension = strtolower(end($avatar_name_arr));
    $avatar_size = $avatar['size'];
    $allowed_extension = ["png", "jpg", "jpeg"];

    $user_error = [];
    // name Error
    if (empty($name)) {
        $user_error['name_error'] = "Required user name!";
    } elseif (strlen($name) < 4 || strlen($name) > 30) {
        $user_error['name_error'] = "Name character must be greater then 4 and less then 30!";
    }

    // email error
    if (empty($email)) {
        $user_error['email_error'] = "Required user email!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $user_error['email_error'] = "Required valid user email!";
    }

    // password error
    if (empty($password)) {
        $user_error['password_error'] = "Required user password!";
    }

    // confirm password error
    if ($_POST['password'] != $_POST['confirm_password']) {
        $user_error['password_error'] = "Password not match!";
        $user_error['confirm_password_error'] = "Password not match!";
    } elseif (empty($_POST['confirm_password'])) {
        $user_error['confirm_password_error'] = "Required confirm password!";
    }

    // avatar error
    if (empty($avatar['name'])) {
        $user_error['avatar_error'] = "Required user avatar!";
    } elseif (!in_array($avatar_extension, $allowed_extension)) {
        $user_error['avatar_error'] = "Avatar extension type must be 'jpg' or 'jpeg' or 'png'!";
    } elseif ($avatar_size > 1000000) {
        $user_error['avatar_error'] = "Avatar file size must be less then 1 MB!";
    } else {
        // upload image
        $avatar_name = time() . "_" . uniqid() . "_" . $avatar['name'];
        $file_upload = move_uploaded_file($avatar['tmp_name'], 'uploads/profile_photo/' . $avatar_name);
        if ($file_upload) {
            // insert data to the database
            $created_at = date('y-m-d');
            $user_query = "INSERT INTO `users`(name, email, password, avatar, created_at) values('$name', '$email', '$hash_password', '$avatar_name', '$created_at')";
            $result = mysqli_query($con, $user_query);
            if ($result) {
                // if successfully insert data
                $message = [
                    'message_type' => "success",
                    'message' => "Registration done successfully!"
                ];
                $_SESSION['success'] = $message;
                header('location: login.php');
            } else {
                $message_type = 'error';
                $message = "Registration failed!";
            }
        } else {
            $message_type = 'error';
            $message = "Image upload failed!";
        }
    }
}
require_once("auth/register.view.php");
