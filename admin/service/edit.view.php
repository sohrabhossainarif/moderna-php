<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card mb-4">
                <h5 class="card-header">Edit Service</h5>
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
                            <input type="text" name="title" value="<?= $service['title'] ?>" class="form-control <?php echo (isset($errors['title_error'])) ? "is-invalid" : "" ?>" id="title" placeholder="Title" autofocus>
                            <!-- title error -->
                            <?php echo (isset($errors['title_error'])) ? "<span class='text-danger'>" . $errors['title_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control <?php echo (isset($errors['description_error'])) ? "is-invalid" : "" ?>" name="description" id="description" rows="5" placeholder="Description"><?= $service['description'] ?></textarea>
                            <!-- description error -->
                            <?php echo (isset($errors['description_error'])) ? "<span class='text-danger'>" . $errors['description_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="icon" class="form-label">Icon Name</label>
                            <input type="text" name="icon" value="<?= $service['icon'] ?>" class="form-control <?php echo (isset($errors['icon_error'])) ? "is-invalid" : "" ?>" id="icon" placeholder="Ex : bxl-dribbble">
                            <p>Select Icon <a href="https://boxicons.com/" target="_blank">Iconbox</a></p>
                            <!-- icon error -->
                            <?php echo (isset($errors['icon_error'])) ? "<span class='text-danger'>" . $errors['icon_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="box_color" class="form-label">Box Color</label>
                            <select name="box_color" id="box_color" class="form-select <?php echo (isset($errors['box_color_error'])) ? "is-invalid" : "" ?>">
                                <option value="">Select Color</option>
                                <option value="icon-box-pink" <?= ($service['box_color'] === 'icon-box-pink') ? "selected" : '' ?>>Pink</option>
                                <option value="icon-box-cyan" <?= ($service['box_color'] === 'icon-box-cyan') ? "selected" : '' ?>>Cyan</option>
                                <option value="icon-box-green" <?= ($service['box_color'] === 'icon-box-green') ? "selected" : '' ?>>Green</option>
                                <option value="icon-box-blue" <?= ($service['box_color'] === 'icon-box-blue') ? "selected" : '' ?>>Blue</option>
                            </select>
                            <!-- box color error -->
                            <?php echo (isset($errors['box_color_error'])) ? "<span class='text-danger'>" . $errors['box_color_error'] . "</span>" : "" ?>
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
