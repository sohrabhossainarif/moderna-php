<?php
session_start();
require_once("../db_connect.php");
require_once("../constant.php");

if (!isset($_SESSION['ADMIN_LOGIN'])) {
    header('location:../login.php');
}

if (isset($_GET['id'])) {
    $edit_id = trim(htmlentities($_GET['id']));
    if (!empty($edit_id)) {
        $result = mysqli_query($con, "select * from theme_option where id = '$edit_id'");
        if (mysqli_num_rows($result) > 0) {
            $theme = mysqli_fetch_assoc($result);
        } else {
            header('location:index.php');
        }
    } else {
        header('location:index.php');
    }
}

if (isset($_POST['submit'])) {
    $feature_heading            = trim(htmlentities($_POST['feature_heading']));
    $feature_description        = trim(htmlentities($_POST['feature_description']));
    $newsletter_heading         = trim(htmlentities($_POST['newsletter_heading']));
    $newsletter_description     = trim(htmlentities($_POST['newsletter_description']));
    $copy_right                 = trim(htmlentities($_POST['copy_right']));
    $contact_address            = trim(htmlentities($_POST['contact_address']));
    $about_heading              = trim(htmlentities($_POST['about_heading']));
    $about_description          = trim(htmlentities($_POST['about_description']));
    $twitter                    = trim(htmlentities($_POST['twitter']));
    $facebook                   = trim(htmlentities($_POST['facebook']));
    $instagram                  = trim(htmlentities($_POST['instagram']));
    $linkedin                   = trim(htmlentities($_POST['linkedin']));
    $skill_heading              = trim(htmlentities($_POST['skill_heading']));
    $skill_description          = trim(htmlentities($_POST['skill_description']));
    $testimonial_heading        = trim(htmlentities($_POST['testimonial_heading']));
    $testimonial_description    = trim(htmlentities($_POST['testimonial_description']));


    $allowed_extension = ["png", "jpg", "jpeg"];
    // logo file handle
    if (!empty($_FILES['logo']['name'])) {
        $logo = $_FILES['logo'];
        $logo_name_arr = explode(".", $logo['name']);
        $logo_extension = strtolower(end($logo_name_arr));
        $logo_size = $logo['size'];
    }

    // hero_banner file handle
    if (!empty($_FILES['hero_banner']['name'])) {
        $hero_banner = $_FILES['hero_banner'];
        $hero_banner_name_arr = explode(".", $hero_banner['name']);
        $hero_banner_extension = strtolower(end($hero_banner_name_arr));
        $hero_banner_size = $hero_banner['size'];
    }

    $query = mysqli_fetch_assoc(mysqli_query($con, "select logo, hero_banner from theme_option where id = '$edit_id'"));

    $errors = array();

    if (empty($feature_heading)) {
        $errors['feature_heading_error'] = "Feature heading required!";
    }
    if (empty($feature_description)) {
        $errors['feature_description_error'] = "Feature description required!";
    }

    if (empty($newsletter_heading)) {
        $errors['newsletter_heading_error'] = "Newsletter heading required!";
    }

    if (empty($newsletter_description)) {
        $errors['newsletter_description_error'] = "Newsletter description required!";
    }

    if (empty($copy_right)) {
        $errors['copy_right_error'] = "Copy-right required!";
    }

    if (empty($contact_address)) {
        $errors['contact_address_error'] = "Contact address required!";
    }

    if (empty($about_heading)) {
        $errors['about_heading_error'] = "About heading required!";
    }

    if (empty($about_description)) {
        $errors['about_description_error'] = "About description required!";
    }

    if (empty($twitter)) {
        $errors['twitter_error'] = "Twitter required!";
    }

    if (empty($facebook)) {
        $errors['facebook_error'] = "Facebook required!";
    }

    if (empty($instagram)) {
        $errors['instagram_error'] = "Instagram required!";
    }

    if (empty($linkedin)) {
        $errors['linkedin_error'] = "Linkedin required!";
    }

    if (empty($skill_heading)) {
        $errors['skill_heading_error'] = "Skill heading required!";
    }

    if (empty($skill_description)) {
        $errors['skill_description_error'] = "Skill description required!";
    }

    if (empty($testimonial_heading)) {
        $errors['testimonial_heading_error'] = "Testimonial heading required!";
    }

    if (empty($testimonial_description)) {
        $errors['testimonial_description_error'] = "Testimonial description required!";
    }

    if (!empty($_FILES['logo']['name'])) {
        if (!in_array($logo_extension, $allowed_extension)) {
            $errors['logo_error'] = "Logo extension type must be 'jpg' or 'jpeg' or 'png'!";
        } elseif ($logo_size > 1000000) {
            $errors['logo_error'] = "Logo file size must be less then 1 MB!";
        } else {
            // upload image
            $logo_name = time() . "_" . uniqid() . "_" . $logo['name'];

            if (USER_IMAGE_SERVER_PATH . 'theme/' . $query['logo']) {
                unlink(USER_IMAGE_SERVER_PATH . 'theme/' . $query['logo']);
            }
            $file_upload = move_uploaded_file($logo['tmp_name'], USER_IMAGE_SERVER_PATH . 'theme/' . $logo_name);
        }
    } else {
        $logo_name = $query['logo'];
    }

    if (!empty($_FILES['hero_banner']['name'])) {
        if (!in_array($hero_banner_extension, $allowed_extension)) {
            $errors['hero_banner_error'] = "Hero banner extension type must be 'jpg' or 'jpeg' or 'png'!";
        } elseif ($hero_banner_size > 5000000) {
            $errors['hero_banner_error'] = "Hero banner file size must be less then 1 MB!";
        } else {
            // upload image
            $hero_banner_name = "bg-banner.jpg";

            if (USER_IMAGE_SERVER_PATH . 'theme/' . $query['hero_banner']) {
                unlink(USER_IMAGE_SERVER_PATH . 'theme/' . $query['hero_banner']);
            }
            $file_upload = move_uploaded_file($hero_banner['tmp_name'], USER_IMAGE_SERVER_PATH . 'theme/' . $hero_banner_name);
        }
    } else {
        $hero_banner_name = $query['hero_banner'];
    }

    if (empty($errors)) {

        // insert data to the database
        $theme_query = "update theme_option set feature_heading = '$feature_heading', feature_description = '$feature_description', newsletter_heading = '$newsletter_heading', newsletter_description = '$newsletter_description', copy_right = '$copy_right', contact_address = '$contact_address', about_heading = '$about_heading', about_description = '$about_description', twitter = '$twitter', facebook = '$facebook', instagram = '$instagram', linkedin = '$linkedin', skill_heading = '$skill_heading', skill_description = '$skill_description', testimonial_heading = '$testimonial_heading', testimonial_description = '$testimonial_description', logo = '$logo_name', hero_banner = '$hero_banner_name' where id = '$edit_id'";
        $result = mysqli_query($con, $theme_query);
        if ($result) {
            // if successfully insert data
            $message = [
                'message_type' => "success",
                'message' => "Successfully Update!"
            ];
            $_SESSION['success'] = $message;
            header('location: index.php');
        } else {
            $message_type = 'error';
            $message = "Update failed!";
        }
    }
}


require_once("edit.view.php");
