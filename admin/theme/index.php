<?php
session_start();
require_once("../db_connect.php");
require_once("../constant.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:../login.php');
}

$result = mysqli_query($con, "select * from theme_option order by id desc");
if (mysqli_num_rows($result) > 0) {
    $result = mysqli_fetch_assoc($result);
}

require_once('index.view.php');

unset($_SESSION['success']);
