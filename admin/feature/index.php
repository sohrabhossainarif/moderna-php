<?php
session_start();
require_once("../db_connect.php");
require_once("../constant.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:../login.php');
}

$result = mysqli_query($con, "select * from features order by id desc");

require_once('index.view.php');

unset($_SESSION['success']);
