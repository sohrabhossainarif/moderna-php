<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card mb-4">
                <h5 class="card-header">Edit WhyUs</h5>
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
                        <div class="form-group">
                            <label for="video_link" class="form-label">Video Link</label>
                            <input type="text" name="video_link" value="<?= $whyus['video_link'] ?>" class="form-control <?php echo (isset($errors['video_link_error'])) ? "is-invalid" : "" ?>" id="video_link" placeholder="Video Link" autofocus>
                            <!-- video link error -->
                            <?php echo (isset($errors['video_link_error'])) ? "<span class='text-danger'>" . $errors['video_link_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group">
                            <label for="title_one" class="form-label">Title One</label>
                            <input type="text" name="title_one" value="<?= $whyus['title_one'] ?>" class="form-control <?php echo (isset($errors['title_one_error'])) ? "is-invalid" : "" ?>" id="title_one" placeholder="Title one" autofocus>
                            <!-- title one error -->
                            <?php echo (isset($errors['title_one_error'])) ? "<span class='text-danger'>" . $errors['title_one_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="description_one" class="form-label">Description One</label>
                            <textarea class="form-control <?php echo (isset($errors['description_one_error'])) ? "is-invalid" : "" ?>" name="description_one" id="description_one" rows="5" placeholder="Description one"><?= $whyus['description_one'] ?></textarea>
                            <!-- description one error -->
                            <?php echo (isset($errors['description_one_error'])) ? "<span class='text-danger'>" . $errors['description_one_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="icon_one" class="form-label">Icon One</label>
                            <input type="text" name="icon_one" value="<?= $whyus['icon_one'] ?>" class="form-control <?php echo (isset($errors['icon_one_error'])) ? "is-invalid" : "" ?>" id="icon_one" placeholder="Icon one">
                            <!-- icon one error -->
                            <?php echo (isset($errors['icon_one_error'])) ? "<span class='text-danger'>" . $errors['icon_one_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="title_two" class="form-label">Title Two</label>
                            <input type="text" name="title_two" value="<?= $whyus['title_two'] ?>" class="form-control <?php echo (isset($errors['title_two_error'])) ? "is-invalid" : "" ?>" id="title_two" placeholder="Title two">
                            <!-- title two error -->
                            <?php echo (isset($errors['title_two_error'])) ? "<span class='text-danger'>" . $errors['title_two_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="description_two" class="form-label">Description Two</label>
                            <textarea class="form-control <?php echo (isset($errors['description_two_error'])) ? "is-invalid" : "" ?>" name="description_two" id="description_two" rows="5" placeholder="Description two"><?= $whyus['description_two'] ?></textarea>
                            <!-- description two error -->
                            <?php echo (isset($errors['description_two_error'])) ? "<span class='text-danger'>" . $errors['description_two_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="icon_two" class="form-label">Icon Two</label>
                            <input type="text" name="icon_two" value="<?= $whyus['icon_two'] ?>" class="form-control <?php echo (isset($errors['icon_two_error'])) ? "is-invalid" : "" ?>" id="icon_two" placeholder="Icon two">
                            <!-- icon two error -->
                            <?php echo (isset($errors['icon_two_error'])) ? "<span class='text-danger'>" . $errors['icon_two_error'] . "</span>" : "" ?>
                        </div>
                        <div class="mb-3">
                            <label for="bg_image" class="form-label">Image</label>
                            <input type="file" class="form-control <?php echo (isset($user_error['bg_image_error'])) ? "is-invalid" : "" ?>" id="bg_image" name="bg_image">
                            <!-- bg_image error -->
                            <?php echo (isset($user_error['bg_image_error'])) ? "<span class='text-danger'>" . $user_error['bg_image_error'] . "</span>" : "" ?>
                            <?php
                            if ($whyus['bg_image']) { ?>
                                <br>
                                <img src="<?= USER_IMAGE_SITE_PATH . 'whyus/' . $whyus['bg_image'] ?>" width="100" alt="<?= $whyus['bg_image'] ?>">
                            <?php } ?>
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
