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
        $result = mysqli_query($con, "select * from whyus where id = '$edit_id'");
        if (mysqli_num_rows($result) > 0) {
            $whyus = mysqli_fetch_assoc($result);
        } else {
            header('location:index.php');
        }
    } else {
        header('location:index.php');
    }
}

if (isset($_POST['submit'])) {
    $video_link = trim(htmlentities($_POST['video_link']));
    $title_one = trim(htmlentities($_POST['title_one']));
    $icon_one = trim(htmlentities($_POST['icon_one']));
    $description_one = trim(htmlentities($_POST['description_one']));
    $title_two = trim(htmlentities($_POST['title_two']));
    $description_two = trim(htmlentities($_POST['description_two']));
    $icon_two = trim(htmlentities($_POST['icon_two']));

    // image file handle
    if (!empty($_FILES['bg_image']['name'])) {
        $bg_image = $_FILES['bg_image'];
        $bg_image_name_arr = explode(".", $bg_image['name']);
        $bg_image_extension = strtolower(end($bg_image_name_arr));
        $bg_image_size = $bg_image['size'];
        $allowed_extension = ["png", "jpg", "jpeg"];
    }

    $errors = array();
    if (empty($video_link)) {
        $errors['video_link_error'] = "Video link required!";
    }
    if (empty($title_one)) {
        $errors['title_one_error'] = "Title one required!";
    }
    if (empty($description_one)) {
        $errors['description_one_error'] = "Description one required!";
    }
    if (empty($icon_one)) {
        $errors['icon_one_error'] = "Icon one required!";
    }
    if (empty($title_two)) {
        $errors['title_two_error'] = "Title two required!";
    }
    if (empty($description_two)) {
        $errors['description_two_error'] = "Description two required!";
    }
    if (empty($icon_two)) {
        $errors['icon_two_error'] = "Icon two required!";
    }

    // avatar error
    if (empty($errors)) {
        if (!empty($_FILES['bg_image']['name'])) {
            if (!in_array($bg_image_extension, $allowed_extension)) {
                $errors['bg_image_error'] = "Image extension type must be 'jpg' or 'jpeg' or 'png'!";
            } elseif ($bg_image_size > 5000000) {
                $errors['bg_image_error'] = "Image file size must be less then 1 MB!";
            } else {
                // upload image
                $bg_image_name = time() . "_" . uniqid() . "_" . $bg_image['name'];
                // remove previous image
                if (unlink(USER_IMAGE_SERVER_PATH . 'whyus/' . $whyus['bg_image'])) {
                    // update new image
                    $file_upload = move_uploaded_file($bg_image['tmp_name'], USER_IMAGE_SERVER_PATH . 'whyus/' . $bg_image_name);
                    if ($file_upload) {
                        // insert data to the database
                        $whyus_query = "update whyus set video_link = '$video_link', title_one = '$title_one',icon_one = '$icon_one', description_one = '$description_one', title_two = '$title_two',description_two = '$description_two', icon_two = '$icon_two', bg_image = '$bg_image_name' where id = '$edit_id'";
                        $result = mysqli_query($con, $whyus_query);
                        if ($result) {
                            // if successfully insert data
                            $message = [
                                'message_type' => "success",
                                'message' => "Successfully Update!"
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
            $whyus_query = "update whyus set video_link = '$video_link', title_one = '$title_one',icon_one = '$icon_one', description_one = '$description_one', title_two = '$title_two',description_two = '$description_two', icon_two = '$icon_two' where id = '$edit_id'";
            $result = mysqli_query($con, $whyus_query);
            if ($result) {
                // if successfully insert data
                $message = [
                    'message_type' => "success",
                    'message' => "Successfully Update!"
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

require_once("edit.view.php");
