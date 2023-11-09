<?php
require_once('view/layouts/header.view.php');
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <?php
        $result = mysqli_fetch_all($banner, true);
        foreach ($result as $key => $value) :
        ?>
            <!-- Slide 1 -->
            <div class="carousel-item <?= ($key == 0) ? 'active' : '' ?>">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown"><?= $value['title'] ?></span></h2>
                    <p class="animate__animated animate__fadeInUp"><?= $value['description'] ?></p>
                    <a href="<?= $value['btn_url'] ?>" class="btn-get-started animate__animated animate__fadeInUp"><?= $value['btn_text'] ?></a>
                </div>
            </div>
        <?php
        endforeach
        ?>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

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
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
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

    <!-- ======= Features Section ======= -->
    <section class="features">
        <div class="container">

            <div class="section-title">
                <h2><?= $theme_option_result['feature_heading'] ?></h2>
                <p><?= $theme_option_result['feature_description'] ?></p>
            </div>

            <?php
            $result = mysqli_fetch_all($feature, true);
            foreach ($result as $key => $value) :
                if ($key % 2 == 0) {
            ?>

                    <div class="row" data-aos="fade-up">
                        <div class="col-md-5">
                            <img src="<?= USER_IMAGE_SITE_PATH . 'feature/' . $value['image'] ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 pt-4">
                            <h3><?= $value['title'] ?></h3>
                            <p class="fst-italic"><?= html_entity_decode($value['description']) ?></p>
                        </div>
                    </div>

                <?php

                } else {
                ?>

                    <div class="row" data-aos="fade-up">
                        <div class="col-md-5 order-1 order-md-2">
                            <img src="<?= USER_IMAGE_SITE_PATH . 'feature/' . $value['image'] ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 pt-5 order-2 order-md-1">
                            <h3><?= $value['title'] ?></h3>
                            <p class="fst-italic"><?= html_entity_decode($value['description']) ?></p>

                        </div>
                    </div>

            <?php
                }
            endforeach
            ?>

        </div>
    </section><!-- End Features Section -->

</main><!-- End #main -->

<?php
require_once('view/layouts/footer.view.php');
?>
