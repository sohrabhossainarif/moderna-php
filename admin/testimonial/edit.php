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
        $result = mysqli_query($con, "select * from testimonials where id = '$edit_id'");
        if (mysqli_num_rows($result) > 0) {
            $testimonial = mysqli_fetch_assoc($result);
        } else {
            header('location:index.php');
        }
    } else {
        header('location:index.php');
    }
}

if (isset($_POST['submit'])) {
    $name = trim(htmlentities($_POST['name']));
    $designation = trim(htmlentities($_POST['designation']));
    $comment = trim(htmlentities($_POST['comment']));

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
    if (empty($comment)) {
        $errors['comment_error'] = "Comment required!";
    }

    if (!empty($_FILES['avatar']['name'])) {
        if (!in_array($avatar_extension, $allowed_extension)) {
            $errors['avatar_error'] = "Avatar extension type must be 'jpg' or 'jpeg' or 'png'!";
        } elseif ($avatar_size > 1000000) {
            $errors['avatar_error'] = "Avatar file size must be less then 1 MB!";
        } else {
            if (empty($errors)) {
                // upload avatar
                $avatar_name = time() . "_" . uniqid() . "_" . $avatar['name'];
                // remove previous image
                unlink(USER_IMAGE_SERVER_PATH . 'testimonial/' . $testimonial['avatar']);
                // upload new image
                $file_upload = move_uploaded_file($avatar['tmp_name'], USER_IMAGE_SERVER_PATH . 'testimonial/' . $avatar_name);
                if ($file_upload) {
                    // insert data to the database
                    $testimonial_query = "update testimonials set name = '$name', designation = '$designation', comment = '$comment', avatar = '$avatar_name' where id = '$edit_id'";
                    $result = mysqli_query($con, $testimonial_query);
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
    } else {
        if (empty($errors)) {
            $testimonial_query = "update testimonials set name = '$name', designation = '$designation', comment = '$comment' where id = '$edit_id'";
            $result = mysqli_query($con, $testimonial_query);
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


require_once("./edit.view.php");
