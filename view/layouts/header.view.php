<?php
// echo "<pre>";
// print_r($_SERVER);
$url_name = $_SERVER['SCRIPT_NAME'];
// print_r(preg_match("/portfolio_details", $url_name,));
// die();
$theme_option_result = mysqli_fetch_assoc(mysqli_query($con, "select * from theme_option where id = 1"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>
        <?php
        if (($url_name == '/') || ($url_name == '/index.php')) {
            echo "Moderna";
        } elseif ($url_name == '/about.php') {
            echo "About";
        } elseif ($url_name == '/service.php') {
            echo "Service";
        } elseif ($url_name == '/team.php') {
            echo "Team";
        } elseif ($url_name == '/contact.php') {
            echo "Contact";
        } elseif ($url_name == '/portfolios.php') {
            echo "Portfolios";
        } elseif ($url_name == '/portfolio_details.php') {
            echo $portfolio_details['project_name'];
        }
        ?>
    </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/aos.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center <?= (($url_name == '/') || ($url_name == '/index.php')) ? 'header-transparent' : '' ?> ">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1 class="text-light"><a href="index.php"><span><img src="<?= USER_IMAGE_SITE_PATH . 'theme/' . $theme_option_result['logo'] ?>" alt="" class="img-fluid"></span></a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="<?= (($url_name == '/') || ($url_name == '/index.php')) ? 'active' : '' ?>" href="index.php">Home</a></li>
                    <li><a class="<?= ($url_name == '/about.php') ? 'active' : '' ?>" href="about.php">About</a></li>
                    <li><a class="<?= ($url_name == '/service.php') ? 'active' : '' ?>" href="service.php">Services</a></li>
                    <li><a class="<?= ($url_name == '/portfolios.php') ? 'active' : '' ?>" href="portfolios.php">Portfolio</a></li>
                    <li><a class="<?= ($url_name == '/team.php') ? 'active' : '' ?>" href="team.php">Team</a></li>
                    <!-- <li><a href="blog.html">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                    <li><a class="<?= ($url_name == '/contact.php') ? 'active' : '' ?>" href="contact.php">Contact Us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
