<?php
session_start();
require_once("../db_connect.php");
require_once("../constant.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:../login.php');
}

if (isset($_POST['submit'])) {
    $name = trim(htmlentities($_POST['name']));
    $designation = trim(htmlentities($_POST['designation']));
    $description = trim(htmlentities($_POST['description']));
    $facebook = trim(htmlentities($_POST['facebook']));
    $twitter = trim(htmlentities($_POST['twitter']));
    $instagram = trim(htmlentities($_POST['instagram']));
    $linkedin = trim(htmlentities($_POST['linkedin']));

    // avatar file handle
    if (!empty($_FILES['avatar']['name'])) {
        $avatar = $_FILES['avatar'];
        $avatar_name_arr = explode(".", $avatar['name']);
        $avatar_extension = strtolower(end($avatar_name_arr));
        $avatar_size = $avatar['size'];
        $allowed_extension = ["png", "jpg", "jpeg", "svg"];
    }

    $errors = array();
    if (empty($name)) {
        $errors['name_error'] = "Name required!";
    }
    if (empty($designation)) {
        $errors['designation_error'] = "Designation required!";
    }
    if (empty($description)) {
        $errors['description_error'] = "Description required!";
    }

    if (empty($_FILES['avatar']['name'])) {
        $errors['avatar_error'] = "avatar required!";
    } elseif (!in_array($avatar_extension, $allowed_extension)) {
        $errors['avatar_error'] = "avatar extension type must be 'jpg' or 'jpeg' or 'png'!";
    } elseif ($avatar_size > 1000000) {
        $errors['avatar_error'] = "avatar file size must be less then 1 MB!";
    } else {
        if (empty($errors)) {
            // upload avatar
            $avatar_name = time() . "_" . uniqid() . "_" . $avatar['name'];
            $file_upload = move_uploaded_file($avatar['tmp_name'], USER_IMAGE_SERVER_PATH . 'team_member/' . $avatar_name);
            if ($file_upload) {
                // insert data to the database
                $feature_query = "insert into teams(name, designation, description, facebook, twitter, instagram, linkedin, avatar) values('$name', '$designation', '$description', '$facebook', '$twitter', 'instagram', '$linkedin', '$avatar_name')";
                $result = mysqli_query($con, $feature_query);
                if ($result) {
                    // if successfully insert data
                    $message = [
                        'message_type' => "success",
                        'message' => "Successfully Insert!"
                    ];
                    $_SESSION['success'] = $message;
                    header('location: index.php');
                } else {
                    $message_type = 'error';
                    $message = "Insert failed!";
                }
            }
        }
    }
}

require_once("./create.view.php");
