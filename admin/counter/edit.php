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
        $result = mysqli_query($con, "select * from counters where id = '$edit_id'");
        if (mysqli_num_rows($result) > 0) {
            $counter = mysqli_fetch_assoc($result);
        } else {
            header('location:index.php');
        }
    } else {
        header('location:index.php');
    }
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
        $counter_query = "update counters set title = '$title', count = '$count' where id = '$edit_id'";
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
