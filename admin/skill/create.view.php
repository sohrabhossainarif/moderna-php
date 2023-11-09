<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card mb-4">
                <h5 class="card-header">Create new Skill</h5>
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
                            <input type="text" name="title" class="form-control <?php echo (isset($errors['title_error'])) ? "is-invalid" : "" ?>" id="title" placeholder="Title" autofocus>
                            <!-- title error -->
                            <?php echo (isset($errors['title_error'])) ? "<span class='text-danger'>" . $errors['title_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="skill_progress" class="form-label">Progress</label>
                            <input type="text" name="skill_progress" class="form-control <?php echo (isset($errors['progress_error'])) ? "is-invalid" : "" ?>" id="skill_progress" placeholder="Progress">
                            <!-- progress error -->
                            <?php echo (isset($errors['progress_error'])) ? "<span class='text-danger'>" . $errors['progress_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="progress_color" class="form-label">Color</label>
                            <select name="progress_color" id="progress_color" class="form-select <?php echo (isset($errors['color_error'])) ? "is-invalid" : "" ?>">
                                <option value="">Select Color</option>
                                <option class="bg-secondary" value="bg-secondary">Secondary</option>
                                <option class="bg-primary" value="bg-primary">Primary</option>
                                <option class="bg-success" value="bg-success">Success</option>
                                <option class="bg-danger" value="bg-danger">Danger</option>
                                <option class="bg-warning" value="bg-warning">Warning</option>
                                <option class="bg-info" value="bg-info">Info</option>
                                <option class="bg-dark" value="bg-dark">Dark</option>
                            </select>
                            <!-- color error -->
                            <?php echo (isset($errors['color_error'])) ? "<span class='text-danger'>" . $errors['color_error'] . "</span>" : "" ?>
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
