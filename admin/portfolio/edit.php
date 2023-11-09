<?php
session_start();
require_once("../db_connect.php");
require_once("../constant.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:../login.php');
}

if (isset($_GET['id'])) {
    $edit_id = trim(htmlentities($_GET['id']));
    if (!empty($edit_id)) {
        $result = mysqli_query($con, "select * from portfolios where id = '$edit_id'");
        if (mysqli_num_rows($result) > 0) {
            $portfolio = mysqli_fetch_assoc($result);
        } else {
            header('location:index.php');
        }
    } else {
        header('location:index.php');
    }
}

if (isset($_POST['submit'])) {
    $project_name = trim(htmlentities($_POST['project_name']));
    $category = trim(htmlentities($_POST['category']));
    $client = trim(htmlentities($_POST['client']));
    $project_date = trim(htmlentities($_POST['project_date']));
    $project_url = trim(htmlentities($_POST['project_url']));
    $project_description = trim(htmlentities($_POST['project_description']));

    // image file handle
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image'];
        $image_name_arr = explode(".", $image['name']);
        $image_extension = strtolower(end($image_name_arr));
        $image_size = $image['size'];
        $allowed_extension = ["png", "jpg", "jpeg", "svg"];
    }

    $errors = array();
    if (empty($project_name)) {
        $errors['project_name_error'] = "Project name required!";
    }
    if (empty($category)) {
        $errors['category_error'] = "Category required!";
    }
    if (empty($client)) {
        $errors['client_error'] = "Client required!";
    }
    if (empty($project_date)) {
        $errors['project_date_error'] = "Project date required!";
    }
    if (empty($project_url)) {
        $errors['project_url_error'] = "Project url required!";
    }
    if (empty($project_description)) {
        $errors['project_description_error'] = "Project description required!";
    }

    if (!empty($_FILES['image']['name'])) {
        if (!in_array($image_extension, $allowed_extension)) {
            $errors['image_error'] = "Image extension type must be 'jpg' or 'jpeg' or 'png'!";
        } elseif ($image_size > 5000000) {
            $errors['image_error'] = "Image file size must be less then 1 MB!";
        } else {
            // upload image
            $image_name = time() . "_" . uniqid() . "_" . $image['name'];
            unlink(USER_IMAGE_SITE_PATH . 'portfolio/' . $portfolio['image']);
            $file_upload = move_uploaded_file($image['tmp_name'], USER_IMAGE_SERVER_PATH . 'portfolio/' . $image_name);
            if ($file_upload) {
                // insert data to the database
                $feature_query = "update portfolios set project_name = '$project_name', category = '$category', client = '$client', project_date = '$project_date', project_url = '$project_url', project_description = '$project_description', image = '$image_name' where id = '$edit_id'";
                $result = mysqli_query($con, $feature_query);
                if ($result) {
                    // if successfully update data
                    $message = [
                        'message_type' => "success",
                        'message' => "Successfully Updated!"
                    ];
                    $_SESSION['success'] = $message;
                    header('location: index.php');
                } else {
                    $message_type = 'error';
                    $message = "Insert failed!";
                }
            }
        }
    } else {
        $feature_query = "update portfolios set project_name = '$project_name', category = '$category', client = '$client', project_date = '$project_date', project_url = '$project_url', project_description = '$project_description' where id = '$edit_id'";
        $result = mysqli_query($con, $feature_query);
        if ($result) {
            // if successfully update data
            $message = [
                'message_type' => "success",
                'message' => "Successfully Updated!"
            ];
            $_SESSION['success'] = $message;
            header('location: index.php');
        } else {
            $message_type = 'error';
            $message = "Insert failed!";
        }
    }
}


require_once("./edit.view.php");
