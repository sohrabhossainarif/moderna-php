<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4><?= $theme_option_result['newsletter_heading'] ?></h4>
                    <p><?= $theme_option_result['newsletter_description'] ?></p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Email address">
                        <input type="submit" name="submit" value="Subscribe">

                        <?php
                        if (!empty($errors['email_error'])) {
                        ?>
                            <div class="alert alert-danger">
                                <span><?= $errors['email_error'] ?></span>
                            </div>
                        <?php
                        }
                        ?>
                    </form>

                    <?php
                    if (isset($_POST["submit"])) {
                        $email = trim(htmlentities(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)));

                        $errors = array();
                        // email error
                        if (empty($email)) {
                            $errors['email_error'] = "Required user email!";
                        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $errors['email_error'] = "Required valid user email!";
                        }

                        if (empty($errors)) {
                            $result = mysqli_query($con, "insert into subscribers(email) values('$email')");
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p><?= $theme_option_result['contact_address'] ?>
                        <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3><?= $theme_option_result['about_heading'] ?></h3>
                    <p><?= $theme_option_result['about_description'] ?></p>
                    <div class="social-links mt-3">
                        <?= ($theme_option_result['twitter']) ? "<a href='" . $theme_option_result['twitter'] . "' target='_blank' class='twitter'><i class='bx bxl-twitter'></i></a>" : "" ?>
                        <?= ($theme_option_result['facebook']) ? "<a href='" . $theme_option_result['facebook'] . "' target='_blank' class='facebook'><i class='bx bxl-facebook'></i></a>" : "" ?>
                        <?= ($theme_option_result['instagram']) ? "<a href='" . $theme_option_result['instagram'] . "' target='_blank' class='instagram'><i class='bx bxl-instagram'></i></a>" : "" ?>
                        <?= ($theme_option_result['linkedin']) ? "<a href='" . $theme_option_result['linkedin'] . "' target='_blank' class='linkedin'><i class='bx bxl-linkedin'></i></a>" : "" ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            <?= html_entity_decode($theme_option_result['copy_right']) ?>
        </div>
        <!-- <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> -->
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="assets/js/purecounter_vanilla.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/noframework.waypoints.js"></script>
<!-- <script src="assets/js/validate.js"></script> -->
<script src="assets/js/main.js"></script>

</body>

</html>
