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
    $btn_text = trim(htmlentities($_POST['btn_text']));
    $btn_url = trim(htmlentities($_POST['btn_url']));

    $banner_errors = array();
    if (empty($title)) {
        $banner_errors['title_error'] = "Title required!";
    }
    if (empty($description)) {
        $banner_errors['description_error'] = "Description required!";
    }
    if (empty($btn_text)) {
        $banner_errors['btn_text_error'] = "Button text required!";
    }
    if (empty($btn_url)) {
        $banner_errors['btn_url_error'] = "Button URL required!";
    }

    if (empty($banner_errors)) {
        $result = mysqli_query($con, "insert into banners(title,description,btn_text,btn_url) values('$title','$description','$btn_text','$btn_url')");
        if ($result) {
            $message = [
                'message_type' => "success",
                'message' => "Successfully insert!"
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
