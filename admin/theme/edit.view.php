<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card mb-4">
                <h5 class="card-header">Edit About</h5>
                <div class="card-body">
                    <?php
                    if (isset($message_type)) {
                        if (!($message_type == '')) {
                    ?>
                            <div class="alert <?= $message_type == 'error' ? "alert-danger" : "alert-success"; ?>">
                                <span><?= $message; ?></span>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="accordion mt-3" id="accordionExample">
                            <!-- feature -->
                            <div class="card accordion-item active">
                                <h2 class="accordion-header" id="feature">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#feature_section" aria-expanded="true" aria-controls="feature_section">
                                        Feature
                                    </button>
                                </h2>
                                <div id="feature_section" class="accordion-collapse collapse show" aria-labelledby="feature" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <label for="feature_heading" class="form-label">Feature Heading</label>
                                            <input type="text" name="feature_heading" value="<?= $theme['feature_heading'] ?>" class="form-control <?php echo (isset($errors['feature_heading_error'])) ? "is-invalid" : "" ?>" id="feature_heading" placeholder="Feature heading" autofocus>
                                            <!-- feature_heading error -->
                                            <?php echo (isset($errors['feature_heading_error'])) ? "<span class='text-danger'>" . $errors['feature_heading_error'] . "</span>" : "" ?>
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="feature_description" class="form-label">Feature Description</label>
                                            <textarea class="form-control <?php echo (isset($errors['feature_description_error'])) ? "is-invalid" : "" ?>" name="feature_description" id="feature_description" rows="5" placeholder="Description"><?= $theme['feature_description'] ?></textarea>
                                            <!-- description one error -->
                                            <?php echo (isset($errors['feature_description_error'])) ? "<span class='text-danger'>" . $errors['feature_description_error'] . "</span>" : "" ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- newsletter -->
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="newsletter">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#newsletter_section" aria-expanded="true" aria-controls="newsletter_section">
                                        Newsletter
                                    </button>
                                </h2>
                                <div id="newsletter_section" class="accordion-collapse collapse" aria-labelledby="newsletter" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <label for="newsletter_heading" class="form-label">Newsletter Heading</label>
                                            <input type="text" name="newsletter_heading" value="<?= $theme['newsletter_heading'] ?>" class="form-control <?php echo (isset($errors['newsletter_heading_error'])) ? "is-invalid" : "" ?>" id="newsletter_heading" placeholder="Newsletter heading" autofocus>
                                            <!-- newsletter_heading error -->
                                            <?php echo (isset($errors['newsletter_heading_error'])) ? "<span class='text-danger'>" . $errors['newsletter_heading_error'] . "</span>" : "" ?>
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="newsletter_description" class="form-label">Newsletter Description</label>
                                            <textarea class="form-control <?php echo (isset($errors['newsletter_description_error'])) ? "is-invalid" : "" ?>" name="newsletter_description" id="newsletter_description" rows="5" placeholder="Description"><?= $theme['newsletter_description'] ?></textarea>
                                            <!-- description one error -->
                                            <?php echo (isset($errors['newsletter_description_error'])) ? "<span class='text-danger'>" . $errors['newsletter_description_error'] . "</span>" : "" ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single -->
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="single">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#single_section" aria-expanded="true" aria-controls="single_section">
                                        Single
                                    </button>
                                </h2>
                                <div id="single_section" class="accordion-collapse collapse" aria-labelledby="single" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <label for="copy_right" class="form-label">Copy-right</label>
                                            <textarea type="text" name="copy_right" class="form-control text-editor <?php echo (isset($errors['copy_right_error'])) ? "is-invalid" : "" ?>" id="copy_right" placeholder="Copy Right" autofocus><?= $theme['copy_right'] ?></textarea>
                                            <!-- copy_right error -->
                                            <?php echo (isset($errors['copy_right_error'])) ? "<span class='text-danger'>" . $errors['copy_right_error'] . "</span>" : "" ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="contact_address" class="form-label">Contact Address</label>
                                            <input type="text" name="contact_address" value="<?= $theme['contact_address'] ?>" class="form-control <?php echo (isset($errors['contact_address_error'])) ? "is-invalid" : "" ?>" id="contact_address" placeholder="Contact Address">
                                            <!-- contact_address error -->
                                            <?php echo (isset($errors['contact_address_error'])) ? "<span class='text-danger'>" . $errors['contact_address_error'] . "</span>" : "" ?>
                                        </div>
                                        <div class="mb-3">
                                            <label for="logo" class="form-label">Logo</label>
                                            <input type="file" class="form-control <?php echo (isset($errors['image_error'])) ? "is-invalid" : "" ?>" id="logo" name="logo">
                                            <!-- image error -->
                                            <?php echo (isset($errors['logo_error'])) ? "<span class='text-danger'>" . $errors['logo_error'] . "</span>" : "" ?>
                                            <?php
                                            if ($theme['logo']) { ?>
                                                <br>
                                                <img src="<?= USER_IMAGE_SITE_PATH . 'theme/' . $theme['logo'] ?>" width="100" alt="<?= $theme['logo'] ?>">
                                            <?php } ?>
                                        </div>
                                        <div class="mb-3">
                                            <label for="hero_banner" class="form-label">Hero Banner</label>
                                            <input type="file" class="form-control <?php echo (isset($errors['hero_banner_error'])) ? "is-invalid" : "" ?>" id="hero_banner" name="hero_banner">
                                            <!-- hero_banner error -->
                                            <?php echo (isset($errors['hero_banner_error'])) ? "<span class='text-danger'>" . $errors['hero_banner_error'] . "</span>" : "" ?>
                                            <?php
                                            if ($theme['hero_banner']) { ?>
                                                <br>
                                                <img src="<?= USER_IMAGE_SITE_PATH . 'theme/' . $theme['hero_banner'] ?>" width="100" alt="<?= $theme['hero_banner'] ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- about -->
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="about">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#about_section" aria-expanded="true" aria-controls="about_section">
                                        About
                                    </button>
                                </h2>
                                <div id="about_section" class="accordion-collapse collapse" aria-labelledby="about" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <label for="about_heading" class="form-label">About Heading</label>
                                            <input type="text" name="about_heading" value="<?= $theme['about_heading'] ?>" class="form-control <?php echo (isset($errors['about_heading_error'])) ? "is-invalid" : "" ?>" id="about_heading" placeholder="about heading" autofocus>
                                            <!-- about_heading error -->
                                            <?php echo (isset($errors['about_heading_error'])) ? "<span class='text-danger'>" . $errors['about_heading_error'] . "</span>" : "" ?>
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="about_description" class="form-label">about Description</label>
                                            <textarea class="form-control <?php echo (isset($errors['about_description_error'])) ? "is-invalid" : "" ?>" name="about_description" id="about_description" rows="5" placeholder="Description"><?= $theme['about_description'] ?></textarea>
                                            <!-- description error -->
                                            <?php echo (isset($errors['about_description_error'])) ? "<span class='text-danger'>" . $errors['about_description_error'] . "</span>" : "" ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- social -->
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="social">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#social_section" aria-expanded="true" aria-controls="social_section">
                                        Social
                                    </button>
                                </h2>
                                <div id="social_section" class="accordion-collapse collapse" aria-labelledby="social" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <label for="twitter" class="form-label">Twitter</label>
                                            <input type="text" name="twitter" value="<?= $theme['twitter'] ?>" class="form-control <?php echo (isset($errors['twitter_error'])) ? "is-invalid" : "" ?>" id="twitter" placeholder="Twitter" autofocus>
                                            <!-- twitter error -->
                                            <?php echo (isset($errors['twitter_error'])) ? "<span class='text-danger'>" . $errors['twitter_error'] . "</span>" : "" ?>
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="facebook" class="form-label">Facebook</label>
                                            <input type="text" class="form-control <?php echo (isset($errors['facebook_error'])) ? "is-invalid" : "" ?>" name="facebook" value="<?= $theme['facebook'] ?>" id="facebook" placeholder="Facebook">
                                            <!-- facebook error -->
                                            <?php echo (isset($errors['facebook_error'])) ? "<span class='text-danger'>" . $errors['facebook_error'] . "</span>" : "" ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="instagram" class="form-label">Instagram</label>
                                            <input type="text" name="instagram" value="<?= $theme['instagram'] ?>" class="form-control <?php echo (isset($errors['instagram_error'])) ? "is-invalid" : "" ?>" id="instagram" placeholder="Instagram">
                                            <!-- instagram error -->
                                            <?php echo (isset($errors['instagram_error'])) ? "<span class='text-danger'>" . $errors['instagram_error'] . "</span>" : "" ?>
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="linkedin" class="form-label">LinkedIn</label>
                                            <input type="text" class="form-control <?php echo (isset($errors['linkedin_error'])) ? "is-invalid" : "" ?>" name="linkedin" value="<?= $theme['linkedin'] ?>" id="linkedin" placeholder="LinkedIn">
                                            <!-- linkedin error -->
                                            <?php echo (isset($errors['linkedin_error'])) ? "<span class='text-danger'>" . $errors['linkedin_error'] . "</span>" : "" ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- skill -->
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="skill">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#skill_section" aria-expanded="true" aria-controls="skill_section">
                                        Skill
                                    </button>
                                </h2>
                                <div id="skill_section" class="accordion-collapse collapse" aria-labelledby="skill" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <label for="skill_heading" class="form-label">Skill Heading</label>
                                            <input type="text" name="skill_heading" value="<?= $theme['skill_heading'] ?>" class="form-control <?php echo (isset($errors['skill_heading_error'])) ? "is-invalid" : "" ?>" id="skill_heading" placeholder="Skill heading" autofocus>
                                            <!-- skill_heading error -->
                                            <?php echo (isset($errors['skill_heading_error'])) ? "<span class='text-danger'>" . $errors['skill_heading_error'] . "</span>" : "" ?>
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="skill_description" class="form-label">Skill Description</label>
                                            <textarea class="form-control <?php echo (isset($errors['skill_description_error'])) ? "is-invalid" : "" ?>" name="skill_description" id="skill_description" rows="5" placeholder="Description"><?= $theme['skill_description'] ?></textarea>
                                            <!-- description error -->
                                            <?php echo (isset($errors['skill_description_error'])) ? "<span class='text-danger'>" . $errors['skill_description_error'] . "</span>" : "" ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- testimonial -->
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="testimonial">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#testimonial_section" aria-expanded="true" aria-controls="testimonial_section">
                                        Testimonial
                                    </button>
                                </h2>
                                <div id="testimonial_section" class="accordion-collapse collapse" aria-labelledby="testimonial" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <div class="form-group">
                                            <label for="testimonial_heading" class="form-label">Testimonial Heading</label>
                                            <input type="text" name="testimonial_heading" value="<?= $theme['testimonial_heading'] ?>" class="form-control <?php echo (isset($errors['testimonial_heading_error'])) ? "is-invalid" : "" ?>" id="testimonial_heading" placeholder="Testimonial heading" autofocus>
                                            <!-- testimonial_heading error -->
                                            <?php echo (isset($errors['testimonial_heading_error'])) ? "<span class='text-danger'>" . $errors['testimonial_heading_error'] . "</span>" : "" ?>
                                        </div>
                                        <div class="form-group my-3">
                                            <label for="testimonial_description" class="form-label">Testimonial Description</label>
                                            <textarea class="form-control <?php echo (isset($errors['testimonial_description_error'])) ? "is-invalid" : "" ?>" name="testimonial_description" id="testimonial_description" rows="5" placeholder="Description"><?= $theme['testimonial_description'] ?></textarea>
                                            <!-- description error -->
                                            <?php echo (isset($errors['testimonial_description_error'])) ? "<span class='text-danger'>" . $errors['testimonial_description_error'] . "</span>" : "" ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group my-3">
                            <button type="submit" name="submit" class="btn btn-outline-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('../layouts/footer.view.php');
?>
