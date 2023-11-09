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
        $result = mysqli_query($con, "select * from service_details where id = '$edit_id'");
        if (mysqli_num_rows($result) > 0) {
            $service_details = mysqli_fetch_assoc($result);
        } else {
            header('location:index.php');
        }
    } else {
        header('location:index.php');
    }
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

    if (!empty($_FILES['image']['name'])) {
        if (!in_array($image_extension, $allowed_extension)) {
            $errors['image_error'] = "Image extension type must be 'jpg' or 'jpeg' or 'png'!";
        } elseif ($image_size > 5000000) {
            $errors['image_error'] = "Image file size must be less then 5 MB!";
        } else {
            if (empty($errors)) {
                // upload avatar
                $image_name = time() . "_" . uniqid() . "_" . $image['name'];
                unlink(USER_IMAGE_SERVER_PATH . 'service/' . $service_details['image']);
                $file_upload = move_uploaded_file($image['tmp_name'], USER_IMAGE_SERVER_PATH . 'service/' . $image_name);
                if ($file_upload) {
                    // insert data to the database
                    $service_details_query = "update service_details set title = '$title', description = '$description', image = '$image_name' where id = '$edit_id'";
                    $result = mysqli_query($con, $service_details_query);
                    if ($result) {
                        // if successfully insert data
                        $message = [
                            'message_type' => "success",
                            'message' => "Successfully Updated!"
                        ];
                        $_SESSION['success'] = $message;
                        header('location: index.php');
                    } else {
                        $message_type = 'error';
                        $message = "Update failed!";
                    }
                }
            }
        }
    } else {
        if (empty($errors)) {
            $service_details_query = "update service_details set title = '$title', description = '$description' where id = '$edit_id'";
            $result = mysqli_query($con, $service_details_query);
            if ($result) {
                // if successfully insert data
                $message = [
                    'message_type' => "success",
                    'message' => "Successfully updated!"
                ];
                $_SESSION['success'] = $message;
                header('location: index.php');
            } else {
                $message_type = 'error';
                $message = "update failed!";
            }
        }
    }
}


require_once("./edit.view.php");
