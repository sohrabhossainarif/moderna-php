<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <h5 class="card-header">Contacts</h5>
                <div class="text-nowrap">
                    <?php
                    if (isset($_SESSION['success'])) {
                    ?>
                        <div class="alert <?= $_SESSION['success']['message_type'] == 'success' ? "alert-success" : "alert-danger"; ?>">
                            <span><?= $_SESSION['success']['message']; ?></span>
                        </div>
                    <?php
                    }
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SR</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $row['email'] ?></td>
                                    </tr>
                            <?php }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('../layouts/footer.view.php');
?>
