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
        $result = mysqli_query($con, "select * from skills where id = '$edit_id'");
        if (mysqli_num_rows($result) > 0) {
            $skill = mysqli_fetch_assoc($result);
        } else {
            header('location:index.php');
        }
    } else {
        header('location:index.php');
    }
}

if (isset($_POST['submit'])) {
    $title = trim(htmlentities($_POST['title']));
    $progress = trim(htmlentities($_POST['skill_progress']));
    $color = trim(htmlentities($_POST['progress_color']));

    $errors = array();
    if (empty($title)) {
        $errors['title_error'] = "Title required!";
    }
    if (empty($progress)) {
        $errors['progress_error'] = "Progress required!";
    }
    if (empty($color)) {
        $errors['color_error'] = "Color required!";
    }

    if (empty($errors)) {
        $counter_query = "update skills set title = '$title', skill_progress = '$progress', progress_color = '$color' where id = '$edit_id'";
        $result = mysqli_query($con, $counter_query);
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


require_once("./edit.view.php");
