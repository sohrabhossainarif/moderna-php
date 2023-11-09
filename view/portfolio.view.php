<?php
require_once('view/layouts/header.view.php');
?>

<main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Our Portfolio</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Our Portfolio</li>
                </ol>
            </div>

        </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" style="position: relative; height: 1025.96px;">

                <?php
                $result = mysqli_fetch_all($portfolios, true);
                foreach ($result as $key => $value) :
                    $filter = '';
                    if ($value['category'] == 1) $filter = "filter-app";
                    if ($value['category'] == 2) $filter = "filter-card";
                    if ($value['category'] == 3) $filter = "filter-web";
                ?>
                    <div class="col-lg-4 col-md-6 portfolio-wrap  <?= $filter ?>" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item">
                            <img src="<?= USER_IMAGE_SITE_PATH . 'portfolio/' . $value['image'] ?>" class="img-fluid" alt="<?= $value['project_name'] ?>">
                            <div class="portfolio-info">
                                <h3><?= $value['project_name'] ?></h3>
                                <div>
                                    <a href="<?= USER_IMAGE_SITE_PATH . 'portfolio/' . $value['image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $value['project_name'] ?>"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio_details.php?id=<?= $value['id'] ?>" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach
                ?>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main>

<?php
require_once('view/layouts/footer.view.php');
?>
