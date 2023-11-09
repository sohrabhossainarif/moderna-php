<?php

session_start();
require_once("../db_connect.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:../login.php');
}

if (isset($_GET['id'])) {
    $change_id = trim(htmlentities($_GET['id']));
    if (!empty($change_id)) {
        $result = mysqli_query($con, "select status from skills where id = '$change_id'");
        if (mysqli_num_rows($result) > 0) {
            $skill = mysqli_fetch_assoc($result);
            if ($skill['status'] == 1) {
                $update = mysqli_query($con, "update skills set status = 2 where id = '$change_id'");
                if ($update) {
                    $message = [
                        'message_type' => "success",
                        'message' => "Successfully Changed Status!"
                    ];
                    $_SESSION['success'] = $message;
                    header('location:index.php');
                }
            } elseif ($skill['status'] == 2) {
                $update = mysqli_query($con, "update skills set status = 1 where id = '$change_id'");
                if ($update) {
                    $message = [
                        'message_type' => "success",
                        'message' => "Successfully Changed Status!"
                    ];
                    $_SESSION['success'] = $message;
                    header('location:index.php');
                }
            }
        } else {
            header('location:index.php');
        }
    } else {
        header('location:index.php');
    }
}
