<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card mb-4">
                <h5 class="card-header">Edit Testimonial</h5>
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
                            <input type="text" name="name" value="<?= $testimonial['name'] ?>" class="form-control <?php echo (isset($errors['name_error'])) ? "is-invalid" : "" ?>" id="name" placeholder="Name" autofocus>
                            <!-- name error -->
                            <?php echo (isset($errors['name_error'])) ? "<span class='text-danger'>" . $errors['name_error'] . "</span>" : "" ?>
                        </div>

                        <div class="form-group my-3">
                            <label for="designation" class="form-label">Designation</label>
                            <input type="text" name="designation" value="<?= $testimonial['designation'] ?>" class="form-control <?php echo (isset($errors['designation_error'])) ? "is-invalid" : "" ?>" id="designation" placeholder="Designation">
                            <!-- designation error -->
                            <?php echo (isset($errors['designation_error'])) ? "<span class='text-danger'>" . $errors['designation_error'] . "</span>" : "" ?>
                        </div>

                        <div class="form-group my-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control <?php echo (isset($errors['comment_error'])) ? "is-invalid" : "" ?>" name="comment" id="comment" rows="5" placeholder="Comment"><?= $testimonial['comment'] ?></textarea>
                            <!-- description error -->
                            <?php echo (isset($errors['comment_error'])) ? "<span class='text-danger'>" . $errors['comment_error'] . "</span>" : "" ?>
                        </div>
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Avatar</label>
                            <input type="file" class="form-control <?php echo (isset($errors['avatar_error'])) ? "is-invalid" : "" ?>" id="avatar" name="avatar">
                            <!-- avatar error -->
                            <?php echo (isset($errors['avatar_error'])) ? "<span class='text-danger'>" . $errors['avatar_error'] . "</span>" : "" ?>
                            <?php
                            if ($testimonial['avatar']) { ?>
                                <br>
                                <img src="<?= USER_IMAGE_SITE_PATH . 'testimonial/' . $testimonial['avatar'] ?>" width="100" alt="<?= $testimonial['avatar'] ?>">
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
