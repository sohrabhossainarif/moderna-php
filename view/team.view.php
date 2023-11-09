<?php
require_once('view/layouts/header.view.php');
?>

<main id="main">

    <!-- ======= Our Team Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Our Team</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Our Team</li>
                </ol>
            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Team Section ======= -->
    <section class="team aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <?php
                $result = mysqli_fetch_all($team, true);
                foreach ($result as $value) :
                ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= USER_IMAGE_SITE_PATH . 'team_member/' . $value['avatar'] ?>" class="img-fluid" alt="">
                                <div class="social">
                                    <?= ($value['twitter']) ? "<a href='" . $value['twitter'] . "' target='_blank'><i class='bi bi-twitter'></i></a>" : "" ?>
                                    <?= ($value['facebook']) ? "<a href='" . $value['facebook'] . "' target='_blank'><i class='bi bi-facebook'></i></a>" : "" ?>
                                    <?= ($value['instagram']) ? "<a href='" . $value['instagram'] . "' target='_blank'><i class='bi bi-instagram'></i></a>" : "" ?>
                                    <?= ($value['linkedin']) ? "<a href='" . $value['linkedin'] . "' target='_blank'><i class='bi bi-linkedin'></i></a>" : "" ?>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4><?= $value['name'] ?></h4>
                                <span><?= $value['designation'] ?></span>
                                <p><?= $value['description'] ?></p>
                            </div>
                        </div>
                    </div>

                <?php
                endforeach
                ?>

            </div>

        </div>
    </section><!-- End Team Section -->

</main>

<?php
require_once('view/layouts/footer.view.php');
?>
