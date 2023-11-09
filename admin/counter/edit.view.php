<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card mb-4">
                <h5 class="card-header">Edit Counter</h5>
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
                            <input type="text" name="title" value="<?= $counter['title'] ?>" class="form-control <?php echo (isset($errors['title_error'])) ? "is-invalid" : "" ?>" id="title" placeholder="Title" autofocus>
                            <!-- title error -->
                            <?php echo (isset($errors['title_error'])) ? "<span class='text-danger'>" . $errors['title_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="count" class="form-label">Counter</label>
                            <input type="text" name="count" value="<?= $counter['count'] ?>" class="form-control <?php echo (isset($errors['title_error'])) ? "is-invalid" : "" ?>" id="count" placeholder="Counter" autofocus>
                            <!-- count error -->
                            <?php echo (isset($errors['count_error'])) ? "<span class='text-danger'>" . $errors['count_error'] . "</span>" : "" ?>
                        </div>
                        <div class="form-group my-5">
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
