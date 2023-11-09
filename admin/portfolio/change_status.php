<?php

session_start();
require_once("../db_connect.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:../login.php');
}

if (isset($_GET['id'])) {
    $change_id = trim(htmlentities($_GET['id']));
    if (!empty($change_id)) {
        $result = mysqli_query($con, "select status from portfolios where id = '$change_id'");
        if (mysqli_num_rows($result) > 0) {
            $portfolio = mysqli_fetch_assoc($result);
            if ($portfolio['status'] == 1) {
                $update = mysqli_query($con, "update portfolios set status = 2 where id = '$change_id'");
                if ($update) {
                    $message = [
                        'message_type' => "success",
                        'message' => "Successfully Changed Status!"
                    ];
                    $_SESSION['success'] = $message;
                    header('location:index.php');
                }
            } elseif ($portfolio['status'] == 2) {
                $update = mysqli_query($con, "update portfolios set status = 1 where id = '$change_id'");
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
