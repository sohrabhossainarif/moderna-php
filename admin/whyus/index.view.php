<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-header">WhyUs</h5>
                    <table class="table">
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td width="15%"><strong>Background Image</strong></td>
                                <td> : </td>
                                <td>
                                    <img src="<?= USER_IMAGE_SITE_PATH . 'whyus/' . $result['bg_image'] ?>" alt="<?= $result['bg_image'] ?>" width="150">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Video Link</strong></td>
                                <td> : </td>
                                <td><?= $result['video_link'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Title One</strong></td>
                                <td> : </td>
                                <td><?= $result['title_one'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Description One</strong></td>
                                <td> : </td>
                                <td><?= $result['description_one'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Icon One</strong></td>
                                <td> : </td>
                                <td><?= $result['icon_one'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Title Two</strong></td>
                                <td> : </td>
                                <td><?= $result['title_two'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Description Two</strong></td>
                                <td> : </td>
                                <td><?= $result['description_two'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Icon two</strong></td>
                                <td> : </td>
                                <td><?= $result['icon_two'] ?></td>
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
