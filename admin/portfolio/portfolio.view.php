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
                                    <img src="<?= USER_IMAGE_SITE_PATH . 'portfolio/' . $portfolio['image'] ?>" alt="<?= $portfolio['project_name'] ?>" width="150">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Project Name</strong></td>
                                <td> : </td>
                                <td><?= $portfolio['project_name'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Category</strong></td>
                                <td> : </td>
                                <td>
                                    <?php
                                    if ($portfolio['category'] == 1) echo "App";
                                    if ($portfolio['category'] == 2) echo "Card";
                                    if ($portfolio['category'] == 3) echo "Web";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Client</strong></td>
                                <td> : </td>
                                <td><?= $portfolio['client'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Project Date</strong></td>
                                <td> : </td>
                                <td>
                                    <?= get_date_format($portfolio['project_date']) ?>
                                </td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Project URL</strong></td>
                                <td> : </td>
                                <td><?= "<a href='" . $portfolio['project_url'] . "'>" . $portfolio['project_url'] . "</a>"  ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Project Description</strong></td>
                                <td> : </td>
                                <td><?= $portfolio['project_description'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Status</strong></td>
                                <td> : </td>
                                <td>
                                    <a href="change_status.php?id=<?= $portfolio['id'] ?>">
                                        <span class="badge <?= ($portfolio['status'] == 1) ? 'bg-label-info' : 'bg-label-warning' ?>  me-1">
                                            <?= ($portfolio['status'] == 1) ? "Active" : "Deactive" ?>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="index.php" class="btn btn-outline-primary mt-5">Back</a>
                    <a class="btn btn-outline-primary mt-5" href="edit.php?id=<?= $portfolio['id'] ?>">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('../layouts/footer.view.php');
?>
