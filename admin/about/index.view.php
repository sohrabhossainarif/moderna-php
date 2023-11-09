<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-header">About</h5>
                    <table class="table">
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td width="15%"><strong>Image</strong></td>
                                <td> : </td>
                                <td>
                                    <img src="<?= USER_IMAGE_SITE_PATH . 'about/' . $result['image'] ?>" alt="<?= $result['image'] ?>" width="150">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Title</strong></td>
                                <td> : </td>
                                <td><?= $result['title'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Description</strong></td>
                                <td> : </td>
                                <td><?= html_entity_decode($result['description']) ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Status</strong></td>
                                <td> : </td>
                                <td>
                                    <a href="change_status.php?id=<?= $result['id'] ?>">
                                        <span class="badge <?= ($result['status'] == 1) ? 'bg-label-info' : 'bg-label-warning' ?>  me-1">
                                            <?= ($result['status'] == 1) ? "Active" : "Deactive" ?>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="edit.php?id=<?= $result['id'] ?>" class="btn btn-outline-primary mt-5">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('../layouts/footer.view.php');
?>
