<?php
session_start();
require_once("../db_connect.php");
require_once("../constant.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:../login.php');
}

if (isset($_GET['id'])) {
    $id = trim(htmlentities($_GET['id']));
    if (!empty($id)) {
        $result = mysqli_query($con, "select * from teams where id = '$id'");
        if (mysqli_num_rows($result) > 0) {
            $team = mysqli_fetch_assoc($result);
            // echo "<pre>";
            // print_r($team);
            // die();
        } else {
            header('location:index.php');
        }
    } else {
        header('location:index.php');
    }
}

require_once('team.view.php');
