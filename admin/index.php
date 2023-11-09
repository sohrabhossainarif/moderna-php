<?php
session_start();
require_once("db_connect.php");
require_once("constant.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:login.php');
}

require_once('layouts/header.view.php');
?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <img width="100%" src="<?=url()?>/assets/img/user.jpg" alt="not found">
        </div>
    </div>
</div>
<!-- / Content -->

<?php
require_once('layouts/footer.view.php');
?>
