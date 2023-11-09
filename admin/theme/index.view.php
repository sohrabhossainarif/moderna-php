<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-header">Theme Option</h5>
                    <table class="table">
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td width="25%"><strong>Logo</strong></td>
                                <td> : </td>
                                <td>
                                    <img src="<?= USER_IMAGE_SITE_PATH . 'theme/' . $result['logo'] ?>" alt="<?= $result['logo'] ?>" width="150">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Hero Banner</strong></td>
                                <td> : </td>
                                <td>
                                    <img src="<?= USER_IMAGE_SITE_PATH . 'theme/' . $result['hero_banner'] ?>" alt="<?= $result['hero_banner'] ?>" width="150">
                                </td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Feature Heading</strong></td>
                                <td> : </td>
                                <td><?= $result['feature_heading'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Feature Description</strong></td>
                                <td> : </td>
                                <td><?= $result['feature_description'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Newsletter Heading</strong></td>
                                <td> : </td>
                                <td><?= $result['newsletter_heading'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Newsletter Description</strong></td>
                                <td> : </td>
                                <td><?= $result['newsletter_description'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Copy-right</strong></td>
                                <td> : </td>
                                <td><?= html_entity_decode($result['copy_right']) ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>About Heading</strong></td>
                                <td> : </td>
                                <td><?= $result['about_heading'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>About Description</strong></td>
                                <td> : </td>
                                <td><?= $result['about_description'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Twitter</strong></td>
                                <td> : </td>
                                <td><?= $result['twitter'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Facebook</strong></td>
                                <td> : </td>
                                <td><?= $result['facebook'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Instagram</strong></td>
                                <td> : </td>
                                <td><?= $result['linkedin'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>LinkedIn</strong></td>
                                <td> : </td>
                                <td><?= $result['instagram'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Contact Address</strong></td>
                                <td> : </td>
                                <td><?= $result['contact_address'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Skill Heading</strong></td>
                                <td> : </td>
                                <td><?= $result['skill_heading'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Skill Description</strong></td>
                                <td> : </td>
                                <td><?= $result['skill_description'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Testimonial Heading</strong></td>
                                <td> : </td>
                                <td><?= $result['testimonial_heading'] ?></td>
                            </tr>
                            <tr>
                                <td width="25%"><strong>Testimonial Description</strong></td>
                                <td> : </td>
                                <td><?= $result['testimonial_description'] ?></td>
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
