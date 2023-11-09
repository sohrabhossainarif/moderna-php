<?php
require_once('view/layouts/header.view.php');
?>

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>About Us</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>About Us</li>
                </ol>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= USER_IMAGE_SITE_PATH . 'about/' . $about['image'] ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3><?= $about['title'] ?></h3>
                    <p class="fst-italic"><?= html_entity_decode($about['description']) ?></p>


                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
        <div class="container">

            <div class="row counters">

                <?php
                $result = mysqli_fetch_all($counter, true);
                foreach ($result as $value) :
                ?>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="<?= $value['count'] ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p><?= $value['title'] ?></p>
                    </div>

                <?php
                endforeach
                ?>

            </div>

        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Our Skills Section ======= -->
    <section class="skills" data-aos="fade-up">
        <div class="container">

            <div class="section-title">
                <h2><?= $theme_option_result['skill_heading'] ?></h2>
                <p><?= $theme_option_result['skill_description'] ?></p>
            </div>

            <div class="skills-content">

                <?php
                $result = mysqli_fetch_all($skill, true);
                foreach ($result as $value) :
                ?>

                    <div class="progress">
                        <div class="progress-bar <?= $value['progress_color'] ?>" role="progressbar" aria-valuenow="<?= $value['skill_progress'] ?>" aria-valuemin="0" aria-valuemax="100">
                            <span class="skill"><?= $value['title'] ?> <i class="val"><?= $value['skill_progress'] ?>%</i></span>
                        </div>
                    </div>

                <?php
                endforeach
                ?>

            </div>

        </div>
    </section><!-- End Our Skills Section -->

    <!-- ======= Tetstimonials Section ======= -->
    <section class="testimonials" data-aos="fade-up">
        <div class="container">

            <div class="section-title">
                <h2><?= $theme_option_result['testimonial_heading'] ?></h2>
                <p><?= $theme_option_result['testimonial_description'] ?></p>
            </div>

            <div class="testimonials-carousel swiper">
                <div class="swiper-wrapper">

                    <?php
                    $result = mysqli_fetch_all($testimonial, true);
                    foreach ($result as $key => $value) :
                    ?>

                        <div class="testimonial-item swiper-slide">
                            <img src="<?= USER_IMAGE_SITE_PATH . 'testimonial/' . $value['avatar'] ?>" class="testimonial-img" alt="">
                            <h3><?= $value['name'] ?></h3>
                            <h4><?= $value['designation'] ?></h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <?= $value['comment'] ?>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>

                    <?php
                    endforeach
                    ?>
                    <!-- <div class="testimonial-item swiper-slide">
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item swiper-slide">
                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item swiper-slide">
                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item swiper-slide">
                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div> -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Ttstimonials Section -->

</main><!-- End #main -->

<?php
require_once('view/layouts/footer.view.php');
?>
