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
        $result = mysqli_query($con, "select * from teams where id = '$edit_id'");
        if (mysqli_num_rows($result) > 0) {
            $team = mysqli_fetch_assoc($result);
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
                unlink(USER_IMAGE_SERVER_PATH . 'team_member/' . $team['avatar']);
                // upload new image
                $file_upload = move_uploaded_file($avatar['tmp_name'], USER_IMAGE_SERVER_PATH . 'team_member/' . $avatar_name);
                if ($file_upload) {
                    // insert data to the database
                    $team_query = "update teams set name = '$name', designation = '$designation', description = '$description', facebook = '$facebook', twitter = '$twitter', instagram = '$instagram', linkedin = '$linkedin',  avatar = '$avatar_name' where id = '$edit_id'";
                    $result = mysqli_query($con, $team_query);
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
            $team_query = "update teams set name = '$name', designation = '$designation', description = '$description', facebook = '$facebook', twitter = '$twitter', instagram = '$instagram', linkedin = '$linkedin' where id = '$edit_id'";
            $result = mysqli_query($con, $team_query);
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
