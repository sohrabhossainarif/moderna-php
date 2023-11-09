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
                                <td width="15%"><strong>Title</strong></td>
                                <td> : </td>
                                <td><?= $skill['title'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Progress</strong></td>
                                <td> : </td>
                                <td><?= $skill['skill_progress'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Color</strong></td>
                                <td> : </td>
                                <td><?= $skill['progress_color'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Status</strong></td>
                                <td> : </td>
                                <td>
                                    <a href="change_status.php?id=<?= $skill['id'] ?>">
                                        <span class="badge <?= ($skill['status'] == 1) ? 'bg-label-info' : 'bg-label-warning' ?>  me-1">
                                            <?= ($skill['status'] == 1) ? "Active" : "Deactive" ?>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="index.php" class="btn btn-outline-primary mt-5">Back</a>
                    <a class="btn btn-outline-primary mt-5" href="edit.php?id=<?= $skill['id'] ?>">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('../layouts/footer.view.php');
?>
