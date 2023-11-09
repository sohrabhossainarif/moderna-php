<?php
session_start();
require_once("../db_connect.php");
require_once("../constant.php");
if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:login.php');
}

// 



include "user.view.php";


