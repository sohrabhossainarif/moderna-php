<?php
require_once("admin/constant.php");
require_once("admin/db_connect.php");
require_once("query_file.php");


$about = mysqli_fetch_assoc(get_query_result($con, 'about'));

$counter = get_query_result($con, "counters", 4);

$skill = get_query_result($con, "skills");

$testimonial = get_query_result($con, "testimonials");

require_once('view/about.view.php');
