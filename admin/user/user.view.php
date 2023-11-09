<?php
require_once('../layouts/header.view.php');
?>
<section class="mt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h2>User Sign Up</h2>
          </div>
          <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="my-3">
                <input type="text"  class="form-control" placeholder="Enter Your Name">
              </div>
              <div class="my-3">
                <input type="email" placeholder="Enter Your Email" name="email" class="form-control">
              </div>
              <div class="my-3">
                <input type="file" name="photo" class="form-control">
              </div>
              <div class="mt-4">
                <img src="<?= USER_IMAGE_SITE_PATH . 'profile_photo/' . $_SESSION['user']['avatar'] ?>" alt class="w-px-100 h-auto" />
              </div>
              <div class="my-3">
                <button name="submit" class="form-control btn btn-sm btn-success">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
require_once('../layouts/footer.view.php');
?>