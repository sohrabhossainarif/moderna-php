<?php
require_once("admin/db_connect.php");
require_once("admin/constant.php");
require_once("query_file.php");
require_once("admin/format_date.php");

if (isset($_GET['id'])) {
    $id = trim(htmlentities($_GET['id']));
    if ($id) {
        $portfolio_details = mysqli_fetch_assoc(mysqli_query($con, "select * from portfolios where id = $id"));
    } else {
        header("location:portfolios.php");
    }
} else {
    header("location:portfolios.php");
}



require_once('view/portfolio_details.view.php');
