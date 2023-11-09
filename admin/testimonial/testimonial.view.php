<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table">
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td width="15%"><strong>Image</strong></td>
                                <td> : </td>
                                <td>
                                    <img src="<?= USER_IMAGE_SITE_PATH . 'testimonial/' . $testimonial['avatar'] ?>" alt="<?= $testimonial['avatar'] ?>" width="150">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Name</strong></td>
                                <td> : </td>
                                <td><?= $testimonial['name'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Designation</strong></td>
                                <td> : </td>
                                <td><?= $testimonial['designation'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Comment</strong></td>
                                <td> : </td>
                                <td><?= $testimonial['comment'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Status</strong></td>
                                <td> : </td>
                                <td>
                                    <a href="change_status.php?id=<?= $testimonial['id'] ?>">
                                        <span class="badge <?= ($testimonial['status'] == 1) ? 'bg-label-info' : 'bg-label-warning' ?>  me-1">
                                            <?= ($testimonial['status'] == 1) ? "Active" : "Deactive" ?>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="index.php" class="btn btn-outline-primary mt-5">Back</a>
                    <a class="btn btn-outline-primary mt-5" href="edit.php?id=<?= $testimonial['id'] ?>">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('../layouts/footer.view.php');
?>
