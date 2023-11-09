<?php
session_start();
require_once("../db_connect.php");
require_once("../constant.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:../login.php');
}

if (isset($_POST['submit'])) {
    $title = trim(htmlentities($_POST['title']));
    $count = trim(htmlentities($_POST['count']));

    $errors = array();
    if (empty($title)) {
        $errors['title_error'] = "Title required!";
    }
    if (empty($count)) {
        $errors['count_error'] = "Counter required!";
    }

    if (empty($errors)) {
        $feature_query = "insert into counters(title, count) values('$title', '$count')";
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
