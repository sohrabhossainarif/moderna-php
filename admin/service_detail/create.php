<?php
session_start();
require_once("../db_connect.php");
require_once("../constant.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:../login.php');
}

if (isset($_POST['submit'])) {
    $title = trim(htmlentities($_POST['title']));
    $description = trim(htmlentities($_POST['description']));

    // image file handle
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image'];
        $image_name_arr = explode(".", $image['name']);
        $image_extension = strtolower(end($image_name_arr));
        $image_size = $image['size'];
        $allowed_extension = ["png", "jpg", "jpeg", "svg"];
    }

    $errors = array();
    if (empty($title)) {
        $errors['title_error'] = "Title required!";
    }
    if (empty($description)) {
        $errors['description_error'] = "Description required!";
    }

    if (empty($_FILES['image']['name'])) {
        $errors['image_error'] = "Image required!";
    } elseif (!in_array($image_extension, $allowed_extension)) {
        $errors['image_error'] = "Image extension type must be 'jpg' or 'jpeg' or 'png'!";
    } elseif ($image_size > 5000000) {
        $errors['image_error'] = "Image file size must be less then 5 MB!";
    } else {
        if (empty($errors)) {
            // upload image
            $image_name = time() . "_" . uniqid() . "_" . $image['name'];
            $file_upload = move_uploaded_file($image['tmp_name'], USER_IMAGE_SERVER_PATH . 'service/' . $image_name);
            if ($file_upload) {
                // insert data to the database
                $service_details_query = "insert into service_details(title, description, image) values('$title', '$description', '$image_name')";
                $result = mysqli_query($con, $service_details_query);
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
