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
                                <td width="15%"><strong>Name</strong> </td>
                                <td> : </td>
                                <td><?= $contact['name'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Email</strong></td>
                                <td> : </td>
                                <td><?= $contact['email'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Subject</strong></td>
                                <td> : </td>
                                <td><?= $contact['subject'] ?></td>
                            </tr>
                            <tr>
                                <td width="15%"><strong>Message</strong></td>
                                <td> : </td>
                                <td><?= $contact['message'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="index.php" class="btn btn-outline-primary mt-5">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('../layouts/footer.view.php');
?>
