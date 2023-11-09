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
                                <td width="15%"><strong>Avatar</strong></td>
                                <td> : </td>
                                <td>
                                    <img src="<?= USER_IMAGE_SITE_PATH . 'team_member/' . $team['avatar'] ?>" alt="<?= $team['avatar'] ?>" width="150">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Name</strong></td>
                                <td> : </td>
                                <td><?= $team['name'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Designation</strong></td>
                                <td> : </td>
                                <td><?= $team['designation'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Description</strong></td>
                                <td> : </td>
                                <td><?= $team['description'] ?></td>
                            </tr>
                            <?= ($team['facebook'] != null) ? "<tr>
                                <td width='15%'><strong>Facebook</strong></td>
                                <td> : </td>
                                <td>" . $team['facebook'] . "</td>
                            </tr>" : "" ?>
                            <?= ($team['twitter'] != null) ? "<tr>
                                <td width='15%'><strong>Twitter</strong></td>
                                <td> : </td>
                                <td>" . $team['twitter'] . "</td>
                            </tr>" : "" ?>
                            <?= ($team['instagram'] != null) ? "<tr>
                                <td width='15%'><strong>Instagram</strong></td>
                                <td> : </td>
                                <td>" . $team['instagram'] . "</td>
                            </tr>" : "" ?>
                            <?= ($team['linkedin'] != null) ? "<tr>
                                <td width='15%'><strong>Linkedin</strong></td>
                                <td> : </td>
                                <td>" . $team['linkedin'] . "</td>
                            </tr>" : "" ?>
                            <tr>
                                <td width="15%"><strong>Status</strong></td>
                                <td> : </td>
                                <td>
                                    <a href="change_status.php?id=<?= $team['id'] ?>">
                                        <span class="badge <?= ($team['status'] == 1) ? 'bg-label-info' : 'bg-label-warning' ?>  me-1">
                                            <?= ($team['status'] == 1) ? "Active" : "Deactive" ?>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="index.php" class="btn btn-outline-primary mt-5">Back</a>
                    <a class="btn btn-outline-primary mt-5" href="edit.php?id=<?= $team['id'] ?>">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('../layouts/footer.view.php');
?>
