<?php
session_start();
require_once("../db_connect.php");
require_once("../constant.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:../login.php');
}

if (isset($_GET['id'])) {
    $delete_id = trim(htmlentities($_GET['id']));
    if (!empty($delete_id)) {
        $result = mysqli_query($con, "select * from portfolios where id = '$delete_id'");
        if (mysqli_num_rows($result) > 0) {
            $result = mysqli_fetch_assoc($result);
            if (unlink(USER_IMAGE_SERVER_PATH . 'portfolio/' . $result['image'])) {
                $delete = mysqli_query($con, "delete from portfolios where id = '$delete_id'");
                if ($delete) {
                    $message = [
                        'message_type' => "success",
                        'message' => "Successfully Deleted!"
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
