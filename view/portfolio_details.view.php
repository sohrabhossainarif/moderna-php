<?php
require_once('view/layouts/header.view.php');
?>

<main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Portfolio Details</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="portfolios.php">Portfolio</a></li>
                    <li>Portfolio Details</li>
                </ol>
            </div>

        </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                        <div class="swiper-wrapper align-items-center" id="swiper-wrapper-1dcf5f8328184fb7" aria-live="off" style="transform: translate3d(-856px, 0px, 0px); transition-duration: 0ms;">

                            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 3" style="width: 856px;">
                                <img src="<?= USER_IMAGE_SITE_PATH . 'portfolio/' . $portfolio_details['image'] ?>" alt="">
                            </div>

                            <!-- <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 3" style="width: 856px;">
                                <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                            </div> -->

                            <!-- <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 3" style="width: 856px;">
                                <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                            </div> -->

                        </div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: <?= $portfolio_details['category'] ?></li>
                            <li><strong>Client</strong>: <?= $portfolio_details['client'] ?></li>
                            <li><strong>Project date</strong>: <?= get_date_format($portfolio_details['project_date']) ?></li>
                            <li><strong>Project URL</strong>: <a href="<?= $portfolio_details['project_url'] ?>" target="_blank"><?= $portfolio_details['project_url'] ?></a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2><?= $portfolio_details['project_name'] ?></h2>
                        <p><?= $portfolio_details['project_description'] ?></p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main>

<?php
require_once('view/layouts/footer.view.php');
?>
