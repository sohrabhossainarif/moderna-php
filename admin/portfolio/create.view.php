<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card mb-4">
                <h5 class="card-header">Create new Feature</h5>
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
                            <label for="project_name" class="form-label">Project name</label>
                            <input type="text" name="project_name" class="form-control <?php echo (isset($errors['project_name_error'])) ? "is-invalid" : "" ?>" id="project_name" placeholder="Project name" autofocus>
                            <!-- project_name error -->
                            <?php echo (isset($errors['project_name_error'])) ? "<span class='text-danger'>" . $errors['project_name_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="category" class="form-label">Category</label>
                            <select name="category" id="category" class="form-select <?php echo (isset($errors['category_error'])) ? "is-invalid" : "" ?>">
                                <option value="">Select</option>
                                <option value="1">App</option>
                                <option value="2">Card</option>
                                <option value="3">Web</option>
                            </select>
                            <!-- category error -->
                            <?php echo (isset($errors['category_error'])) ? "<span class='text-danger'>" . $errors['category_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="client" class="form-label">Client</label>
                            <input type="text" name="client" class="form-control <?php echo (isset($errors['client_error'])) ? "is-invalid" : "" ?>" id="client" placeholder="Client">
                            <!-- client error -->
                            <?php echo (isset($errors['client_error'])) ? "<span class='text-danger'>" . $errors['client_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="project_date" class="form-label">Project date</label>
                            <input class="form-control" type="date" name="project_date" id="project_date">
                            <!-- project_date error -->
                            <?php echo (isset($errors['project_date_error'])) ? "<span class='text-danger'>" . $errors['project_date_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="project_url" class="form-label">Project url</label>
                            <input class="form-control <?php echo (isset($errors['project_url_error'])) ? "is-invalid" : "" ?>" name="project_url" id="project_url" placeholder="Project url">
                            <!-- project_url error -->
                            <?php echo (isset($errors['project_url_error'])) ? "<span class='text-danger'>" . $errors['project_url_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="project_description" class="form-label">Project description</label>
                            <textarea class="form-control <?php echo (isset($errors['project_description_error'])) ? "is-invalid" : "" ?>" rows="5" name="project_description" id="project_description" placeholder="Project description"></textarea>
                            <!-- project_description error -->
                            <?php echo (isset($errors['project_description_error'])) ? "<span class='text-danger'>" . $errors['project_description_error'] . "</span>" : "" ?>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control <?php echo (isset($errors['image_error'])) ? "is-invalid" : "" ?>" id="image" name="image">
                            <!-- image error -->
                            <?php echo (isset($errors['image_error'])) ? "<span class='text-danger'>" . $errors['image_error'] . "</span>" : "" ?>
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
