<?php
require_once("admin/constant.php");
require_once("admin/db_connect.php");
require_once("query_file.php");

$service = get_query_result($con, "services", 4);

$whyus = mysqli_fetch_assoc(get_query_result($con, "whyus"));

$service_details = get_query_result($con, "service_details");

require_once('view/service.view.php');
