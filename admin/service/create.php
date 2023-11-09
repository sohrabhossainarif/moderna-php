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
        $result = mysqli_query($con, "insert into services(title, description, icon, box_color) values('$title','$description','$icon','$box_color')");
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
