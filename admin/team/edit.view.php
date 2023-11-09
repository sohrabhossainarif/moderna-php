<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card mb-4">
                <h5 class="card-header">Edit Member</h5>
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

                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" value="<?= $team['name'] ?>" class="form-control <?php echo (isset($errors['name_error'])) ? "is-invalid" : "" ?>" id="name" placeholder="Name" autofocus>
                            <!-- name error -->
                            <?php echo (isset($errors['name_error'])) ? "<span class='text-danger'>" . $errors['name_error'] . "</span>" : "" ?>
                        </div>

                        <div class="form-group my-3">
                            <label for="designation" class="form-label">Designation</label>
                            <input type="text" name="designation" value="<?= $team['designation'] ?>" class="form-control <?php echo (isset($errors['designation_error'])) ? "is-invalid" : "" ?>" id="designation" placeholder="Designation">
                            <!-- designation error -->
                            <?php echo (isset($errors['designation_error'])) ? "<span class='text-danger'>" . $errors['designation_error'] . "</span>" : "" ?>
                        </div>

                        <div class="form-group my-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea type="text" name="description" class="form-control <?php echo (isset($errors['description_error'])) ? "is-invalid" : "" ?>" id="description" placeholder="Description" rows="5"><?= $team['description'] ?></textarea>
                            <!-- description error -->
                            <?php echo (isset($errors['description_error'])) ? "<span class='text-danger'>" . $errors['description_error'] . "</span>" : "" ?>
                        </div>

                        <div class="form-group my-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="text" name="facebook" value="<?= $team['facebook'] ? $team['facebook'] : "" ?>" class="form-control <?php echo (isset($errors['facebook_error'])) ? "is-invalid" : "" ?>" id="facebook" placeholder="Facebook">
                            <!-- facebook error -->
                            <?php echo (isset($errors['facebook_error'])) ? "<span class='text-danger'>" . $errors['facebook_error'] . "</span>" : "" ?>
                        </div>

                        <div class="form-group my-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="text" name="twitter" value="<?= $team['twitter'] ? $team['twitter'] : "" ?>" class="form-control <?php echo (isset($errors['twitter_error'])) ? "is-invalid" : "" ?>" id="twitter" placeholder="Twitter">
                            <!-- twitter error -->
                            <?php echo (isset($errors['twitter_error'])) ? "<span class='text-danger'>" . $errors['twitter_error'] . "</span>" : "" ?>
                        </div>

                        <div class="form-group my-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" name="instagram" value="<?= $team['instagram'] ? $team['instagram'] : "" ?>" class="form-control <?php echo (isset($errors['instagram_error'])) ? "is-invalid" : "" ?>" id="instagram" placeholder="Instagram">
                            <!-- instagram error -->
                            <?php echo (isset($errors['instagram_error'])) ? "<span class='text-danger'>" . $errors['instagram_error'] . "</span>" : "" ?>
                        </div>

                        <div class="form-group my-3">
                            <label for="linkedin" class="form-label">Linkedin</label>
                            <input type="text" name="linkedin" value="<?= $team['linkedin'] ? $team['linkedin'] : "" ?>" class="form-control <?php echo (isset($errors['linkedin_error'])) ? "is-invalid" : "" ?>" id="linkedin" placeholder="Linkedin">
                            <!-- linkedin error -->
                            <?php echo (isset($errors['linkedin_error'])) ? "<span class='text-danger'>" . $errors['linkedin_error'] . "</span>" : "" ?>
                        </div>

                        <div class="mb-3">
                            <label for="avatar" class="form-label">Avatar</label>
                            <input type="file" class="form-control <?php echo (isset($errors['avatar_error'])) ? "is-invalid" : "" ?>" id="avatar" name="avatar">
                            <!-- avatar error -->
                            <?php echo (isset($errors['avatar_error'])) ? "<span class='text-danger'>" . $errors['avatar_error'] . "</span>" : "" ?>
                            <?php
                            if ($team['avatar']) { ?>
                                <br>
                                <img src="<?= USER_IMAGE_SITE_PATH . 'team_member/' . $team['avatar'] ?>" width="100" alt="<?= $team['avatar'] ?>">
                            <?php } ?>
                        </div>
                        <div class="form-group my-5">
                            <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
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
