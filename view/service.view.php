<?php
require_once('view/layouts/header.view.php');
?>
<main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Our Services</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Our Services</li>
                </ol>
            </div>

        </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Section ======= -->
    <section class="services">
        <div class="container">

            <div class="row">
                <?php
                $result = mysqli_fetch_all($service, true);
                foreach ($result as $value) :
                ?>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box <?= $value['box_color'] ?>">
                            <div class="icon"><i class="bx <?= $value['icon'] ?>"></i></div>
                            <h4 class="title"><a href=""><?= $value['title'] ?></a></h4>
                            <p class="description"><?= $value['description'] ?></p>
                        </div>
                    </div>

                <?php
                endforeach
                ?>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg aos-init aos-animate" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="<?= USER_IMAGE_SITE_PATH . 'whyus/' . $whyus['bg_image'] ?>" class="img-fluid" alt="">
                    <a href="<?= $whyus['video_link'] ?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" target="_blank"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><i class="bx <?= $whyus['icon_one'] ?>"></i></div>
                        <h4 class="title"><a href=""><?= $whyus['title_one'] ?></a></h4>
                        <p class="description"><?= $whyus['description_one'] ?></p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx <?= $whyus['icon_two'] ?>"></i></div>
                        <h4 class="title"><a href=""><?= $whyus['title_two'] ?></a></h4>
                        <p class="description"><?= $whyus['description_two'] ?></p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
        <div class="container">

            <div class="row">

                <?php
                $result = mysqli_fetch_all($service_details, true);
                foreach ($result as $value) :
                ?>
                    <div class="col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?= USER_IMAGE_SITE_PATH . 'service/' . $value['image'] ?>" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#"><?= $value['title'] ?></a></h5>
                                <p class="card-text"><?= $value['description'] ?></p>
                                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                            </div>
                        </div>
                    </div>

                <?php
                endforeach
                ?>

            </div>

        </div>
    </section><!-- End Service Details Section -->

</main>
<?php
require_once('view/layouts/footer.view.php');
?>
