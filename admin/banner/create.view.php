<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card mb-4">
                <h5 class="card-header">Create new Banner</h5>
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
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control <?php echo (isset($banner_errors['title_error'])) ? "is-invalid" : "" ?>" id="title" placeholder="Title" autofocus>
                            <!-- title error -->
                            <?php echo (isset($banner_errors['title_error'])) ? "<span class='text-danger'>" . $banner_errors['title_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control <?php echo (isset($banner_errors['description_error'])) ? "is-invalid" : "" ?>" name="description" id="description" rows="5" placeholder="Description"></textarea>
                            <!-- description error -->
                            <?php echo (isset($banner_errors['description_error'])) ? "<span class='text-danger'>" . $banner_errors['description_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="btn_text" class="form-label">Button text</label>
                            <input type="text" name="btn_text" class="form-control <?php echo (isset($banner_errors['btn_text_error'])) ? "is-invalid" : "" ?>" id="btn_text" placeholder="Button text">
                            <!-- button text error -->
                            <?php echo (isset($banner_errors['btn_text_error'])) ? "<span class='text-danger'>" . $banner_errors['btn_text_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="btn_url" class="form-label">Button url</label>
                            <input type="text" name="btn_url" class="form-control <?php echo (isset($banner_errors['btn_url_error'])) ? "is-invalid" : "" ?>" id="btn_url" placeholder="Button url">
                            <!-- button url error -->
                            <?php echo (isset($banner_errors['btn_url_error'])) ? "<span class='text-danger'>" . $banner_errors['btn_url_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
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
