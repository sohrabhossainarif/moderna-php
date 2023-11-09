<?php
require_once("admin/db_connect.php");
require_once("admin/constant.php");
require_once("query_file.php");

$portfolios = get_query_result($con, "portfolios");


require_once('view/portfolio.view.php');
