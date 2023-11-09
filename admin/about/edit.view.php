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
                        <div class="form-group">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" value="<?= $about['title'] ?>" class="form-control <?php echo (isset($errors['title_error'])) ? "is-invalid" : "" ?>" id="title" placeholder="Title" autofocus>
                            <!-- title one error -->
                            <?php echo (isset($errors['title_error'])) ? "<span class='text-danger'>" . $errors['title_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control text-editor <?php echo (isset($errors['description_error'])) ? "is-invalid" : "" ?>" name="description" id="description" rows="5" placeholder="Description"><?= $about['description'] ?></textarea>
                            <!-- description one error -->
                            <?php echo (isset($errors['description_error'])) ? "<span class='text-danger'>" . $errors['description_error'] . "</span>" : "" ?>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control <?php echo (isset($errors['image_error'])) ? "is-invalid" : "" ?>" id="image" name="image">
                            <!-- image error -->
                            <?php echo (isset($errors['image_error'])) ? "<span class='text-danger'>" . $errors['image_error'] . "</span>" : "" ?>
                            <?php
                            if ($about['image']) { ?>
                                <br>
                                <img src="<?= USER_IMAGE_SITE_PATH . 'about/' . $about['image'] ?>" width="100" alt="<?= $about['image'] ?>">
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
