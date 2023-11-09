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
        $result = mysqli_query($con, "select * from services where id = '$edit_id'");
        if (mysqli_num_rows($result) > 0) {
            $service = mysqli_fetch_assoc($result);
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
    $icon = trim(htmlentities($_POST['icon']));
    $box_color = trim(htmlentities($_POST['box_color']));

    $errors = array();
    if (empty($title)) {
        $errors['title_error'] = "Title required!";
    }
    if (empty($description)) {
        $errors['description_error'] = "Description required!";
    }
    if (empty($icon)) {
        $errors['icon_error'] = "Icon required!";
    }
    if (empty($box_color)) {
        $errors['box_color_error'] = "Box color required!";
    }

    if (empty($errors)) {
        $result = mysqli_query($con, "update services set title = '$title', description = '$description',icon = '$icon', box_color = '$box_color' where id = '$edit_id'");
        if ($result) {
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

require_once("./edit.view.php");
