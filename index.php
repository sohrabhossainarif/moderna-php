<?php
require_once("admin/db_connect.php");
require_once("admin/constant.php");
require_once("query_file.php");

$banner = get_query_result($con, 'banners', 3);

$service = get_query_result($con, "services", 4);

$whyus = mysqli_fetch_assoc(get_query_result($con, "whyus"));

$feature = get_query_result($con, "features");



require_once('view/index.view.php');
