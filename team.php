<?php
require_once("admin/constant.php");
require_once("admin/db_connect.php");
require_once("query_file.php");

$team = get_query_result($con, "teams");

require_once('view/team.view.php');
