<?php
session_start();
require_once("query_file.php");
require_once("admin/db_connect.php");
require_once("admin/constant.php");

require_once('view/contact.view.php');


unset($_SESSION['success']);
unset($_SESSION['name_error']);
unset($_SESSION['email_error']);
unset($_SESSION['subject_error']);
unset($_SESSION['message_error']);
