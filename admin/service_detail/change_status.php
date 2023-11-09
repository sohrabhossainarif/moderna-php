<?php

session_start();
require_once("../db_connect.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:../login.php');
}

if (isset($_GET['id'])) {
    $change_id = trim(htmlentities($_GET['id']));
    if (!empty($change_id)) {
        $result = mysqli_query($con, "select status from service_details where id = '$change_id'");
        if (mysqli_num_rows($result) > 0) {
            $service_details = mysqli_fetch_assoc($result);
            if ($service_details['status'] == 1) {
                $update = mysqli_query($con, "update service_details set status = 2 where id = '$change_id'");
                if ($update) {
                    $message = [
                        'message_type' => "success",
                        'message' => "Successfully Changed Status!"
                    ];
                    $_SESSION['success'] = $message;
                    header('location:index.php');
                }
            } elseif ($service_details['status'] == 2) {
                $update = mysqli_query($con, "update service_details set status = 1 where id = '$change_id'");
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
