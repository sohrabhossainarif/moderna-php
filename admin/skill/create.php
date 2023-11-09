<?php
session_start();
require_once("../db_connect.php");
require_once("../constant.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:../login.php');
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
        $feature_query = "insert into skills(title, skill_progress, progress_color) values('$title', '$progress', '$color')";
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

require_once("./create.view.php");
