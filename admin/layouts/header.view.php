 <?php
    function url()
    {
        $serverProtocol = $_SERVER['SERVER_PROTOCOL'];
        $server_Name = $_SERVER['SERVER_NAME'];
        $expProtocol = explode('/', $serverProtocol);
        $url = strtolower($expProtocol[0]) . "://" . $server_Name . '/moderna/admin';
        return $url;
    }

    ?>

 <!DOCTYPE html>

 <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

 <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

     <title>Moderna-Admin Panel-Sohrab</title>

     <meta name="description" content="" />

     <!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="<?= url() ?>/assets/img/favicon/favicon.ico" />

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

     <!-- Icons. Uncomment required icon fonts -->
     <link rel="stylesheet" href="<?= url() ?>/assets/css/boxicons.css" />

     <!-- Core CSS -->
     <link rel="stylesheet" href="<?= url() ?>/assets/css/core.css" class="template-customizer-core-css" />
     <link rel="stylesheet" href="<?= url() ?>/assets/css/theme-default.css" class="template-customizer-theme-css" />
     <link rel="stylesheet" href="<?= url() ?>/assets/css/demo.css" />

     <!-- Vendors CSS -->
     <link rel="stylesheet" href="<?= url() ?>/assets/css/perfect-scrollbar.css" />

     <link rel="stylesheet" href="<?= url() ?>/assets/css/apex-charts.css" />

     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

     <!-- Page CSS -->

     <!-- Helpers -->
     <script src="<?= url() ?>/assets/js/helpers.js"></script>
     <script src="<?= url() ?>/assets/js/config.js"></script>
 </head>

 <body>
     <!-- Layout wrapper -->
     <div class="layout-wrapper layout-content-navbar">
         <div class="layout-container">
             <!-- Menu -->

             <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                 <div class="app-brand demo">
                     <a href="<?= url() ?>/index.php" class="app-brand-link">
                         <span class="app-brand-logo demo">

                         </span>
                         <span class="app-brand-text demo  fw-bolder ms-2">Sohrab Hossain</span>
                     </a>

                     <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                         <i class="bx bx-chevron-left bx-sm align-middle"></i>
                     </a>
                 </div>

                 <ul class="menu-inner py-1">
                     <!-- Dashboard -->
                     <li class="menu-item <?= (($url_name == 'admin') || ($url_name == '')) ? "active" : "" ?>">
                         <a href="<?= url() ?>/index.php" class="menu-link">
                             <i class="menu-icon tf-icons bx bx-home-circle"></i>
                             <div data-i18n="Analytics">Dashboard</div>
                         </a>
                     </li>

                     <!-- banner -->
                     <li class="menu-item <?= ($url_name == 'banner') ? "active" : "" ?>">
                         <a href="javascript:void(0);" class="menu-link menu-toggle">
                             <i class="menu-icon tf-icons bx bx-layout"></i>
                             <div data-i18n="Banner">Banner</div>
                         </a>

                         <ul class="menu-sub">
                             <li class="menu-item">
                                 <a href="<?= url() ?>/banner/create.php" class="menu-link">
                                     <div data-i18n="create_banner">Create banner</div>
                                 </a>
                             </li>
                             <li class="menu-item">
                                 <a href="<?= url() ?>/banner/index.php" class="menu-link">
                                     <div data-i18n="create_banner">All banners</div>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <!-- service -->
                     <li class="menu-item <?= ($url_name == 'service') ? "active" : "" ?>">
                         <a href="javascript:void(0);" class="menu-link menu-toggle">
                             <i class="menu-icon tf-icons bx bx-layout"></i>
                             <div data-i18n="Service">Service</div>
                         </a>

                         <ul class="menu-sub">
                             <li class="menu-item">
                                 <a href="<?= url() ?>/service/create.php" class="menu-link">
                                     <div data-i18n="create_service">Create Service</div>
                                 </a>
                             </li>
                             <li class="menu-item">
                                 <a href="<?= url() ?>/service/index.php" class="menu-link">
                                     <div data-i18n="create_service">All Services</div>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <!-- feature -->
                     <li class="menu-item <?= ($url_name == 'feature') ? "active" : "" ?>">
                         <a href="javascript:void(0);" class="menu-link menu-toggle">
                             <i class="menu-icon tf-icons bx bx-layout"></i>
                             <div data-i18n="Service">Feature</div>
                         </a>

                         <ul class="menu-sub">
                             <li class="menu-item">
                                 <a href="<?= url() ?>/feature/create.php" class="menu-link">
                                     <div data-i18n="create_feature">Create Feature</div>
                                 </a>
                             </li>
                             <li class="menu-item">
                                 <a href="<?= url() ?>/feature/index.php" class="menu-link">
                                     <div data-i18n="create_feature">All Features</div>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <!-- single section -->
                     <li class="menu-item <?= (($url_name == 'whyus') || ($url_name == 'about') || ($url_name == 'contact') || ($url_name == 'theme')) ? "active" : "" ?>">
                         <a href="javascript:void(0);" class="menu-link menu-toggle">
                             <i class="menu-icon tf-icons bx bx-layout"></i>
                             <div data-i18n="Service">Single Section</div>
                         </a>

                         <ul class="menu-sub">
                             <!-- whyus -->
                             <li class="menu-item">
                                 <a href="<?= url() ?>/whyus/index.php" class="menu-link">
                                     <div data-i18n="WhyUs">WhyUs</div>
                                 </a>
                             </li>
                             <!-- about -->
                             <li class="menu-item">
                                 <a href="<?= url() ?>/about/index.php" class="menu-link">
                                     <div data-i18n="About">About</div>
                                 </a>
                             </li>
                             <!-- contact -->
                             <li class="menu-item">
                                 <a href="<?= url() ?>/contact/index.php" class="menu-link">
                                     <div data-i18n="About">Contact</div>
                                 </a>
                             </li>
                             <!-- subscribers -->
                             <li class="menu-item">
                                 <a href="<?= url() ?>/subscriber/index.php" class="menu-link">
                                     <div data-i18n="About">Subscribes</div>
                                 </a>
                             </li>
                             <!-- theme option -->
                             <li class="menu-item">
                                 <a href="<?= url() ?>/theme/index.php" class="menu-link">
                                     <div data-i18n="About">Theme Option</div>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <!-- counter -->
                     <li class="menu-item <?= ($url_name == 'counter') ? "active" : "" ?>">
                         <a href="javascript:void(0);" class="menu-link menu-toggle">
                             <i class="menu-icon tf-icons bx bx-layout"></i>
                             <div data-i18n="Counter">Counter</div>
                         </a>

                         <ul class="menu-sub">
                             <li class="menu-item">
                                 <a href="<?= url() ?>/counter/create.php" class="menu-link">
                                     <div data-i18n="create_counter">Create Counter</div>
                                 </a>
                             </li>
                             <li class="menu-item">
                                 <a href="<?= url() ?>/counter/index.php" class="menu-link">
                                     <div data-i18n="create_counter">All Counter</div>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <!-- skill -->
                     <li class="menu-item <?= ($url_name == 'skill') ? "active" : "" ?>">
                         <a href="javascript:void(0);" class="menu-link menu-toggle">
                             <i class="menu-icon tf-icons bx bx-layout"></i>
                             <div data-i18n="Skill">Skills</div>
                         </a>

                         <ul class="menu-sub">
                             <li class="menu-item">
                                 <a href="<?= url() ?>/skill/create.php" class="menu-link">
                                     <div data-i18n="create_skill">Create Skill</div>
                                 </a>
                             </li>
                             <li class="menu-item">
                                 <a href="<?= url() ?>/skill/index.php" class="menu-link">
                                     <div data-i18n="create_skill">All Skills</div>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <!-- testimonial -->
                     <li class="menu-item <?= ($url_name == 'testimonial') ? "active" : "" ?>">
                         <a href="javascript:void(0);" class="menu-link menu-toggle">
                             <i class="menu-icon tf-icons bx bx-layout"></i>
                             <div data-i18n="Testimonial">Testimonials</div>
                         </a>

                         <ul class="menu-sub">
                             <li class="menu-item">
                                 <a href="<?= url() ?>/testimonial/create.php" class="menu-link">
                                     <div data-i18n="create_testimonial">Create Testimonial</div>
                                 </a>
                             </li>
                             <li class="menu-item">
                                 <a href="<?= url() ?>/testimonial/index.php" class="menu-link">
                                     <div data-i18n="create_testimonial">All Testimonials</div>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <!-- service detail -->
                     <li class="menu-item <?= ($url_name == 'service_detail') ? "active" : "" ?>">
                         <a href="javascript:void(0);" class="menu-link menu-toggle">
                             <i class="menu-icon tf-icons bx bx-layout"></i>
                             <div data-i18n="service_details">Service Details</div>
                         </a>

                         <ul class="menu-sub">
                             <li class="menu-item">
                                 <a href="<?= url() ?>/service_detail/create.php" class="menu-link">
                                     <div data-i18n="create_details">Create Service Detail</div>
                                 </a>
                             </li>
                             <li class="menu-item">
                                 <a href="<?= url() ?>/service_detail/index.php" class="menu-link">
                                     <div data-i18n="create_details">All Service Details</div>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <!-- team -->
                     <li class="menu-item <?= ($url_name == 'team') ? "active" : "" ?>">
                         <a href="javascript:void(0);" class="menu-link menu-toggle">
                             <i class="menu-icon tf-icons bx bx-layout"></i>
                             <div data-i18n="Teams">Team</div>
                         </a>

                         <ul class="menu-sub">
                             <li class="menu-item">
                                 <a href="<?= url() ?>/team/create.php" class="menu-link">
                                     <div data-i18n="create_details">Create New Member</div>
                                 </a>
                             </li>
                             <li class="menu-item">
                                 <a href="<?= url() ?>/team/index.php" class="menu-link">
                                     <div data-i18n="create_details">All Members</div>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <!-- portfolio -->
                     <li class="menu-item <?= ($url_name == 'portfolio') ? "active" : "" ?>">
                         <a href="javascript:void(0);" class="menu-link menu-toggle">
                             <i class="menu-icon tf-icons bx bx-layout"></i>
                             <div data-i18n="Teams">Portfolio</div>
                         </a>

                         <ul class="menu-sub">
                             <li class="menu-item">
                                 <a href="<?= url() ?>/portfolio/create.php" class="menu-link">
                                     <div data-i18n="create_details">Create Portfolio</div>
                                 </a>
                             </li>
                             <li class="menu-item">
                                 <a href="<?= url() ?>/portfolio/index.php" class="menu-link">
                                     <div data-i18n="create_details">All Portfolios</div>
                                 </a>
                             </li>
                         </ul>
                     </li>
                 </ul>
             </aside>
             <!-- / Menu -->

             <!-- Layout container -->
             <div class="layout-page">
                 <!-- Navbar -->

                 <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                     <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                         <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                             <i class="bx bx-menu bx-sm"></i>
                         </a>
                     </div>

                     <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                         <!-- Search -->
                         <div class="navbar-nav align-items-center">
                             <div class="nav-item d-flex align-items-center">
                                 <i class="bx bx-search fs-4 lh-0"></i>
                                 <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
                             </div>
                         </div>
                         <!-- /Search -->

                         <ul class="navbar-nav flex-row align-items-center ms-auto">
                             <!-- Place this tag where you want the button to render. -->
                             <li class="nav-item lh-1 me-3">
                                 <a class="github-button" href="https://github.com/themeselection/sneat-html-admin-template-free" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                             </li>

                             <!-- User -->
                             <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                 <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                     <div class="avatar avatar-online">
                                         <img src="<?= USER_IMAGE_SITE_PATH . 'profile_photo/' . $_SESSION['user']['avatar'] ?>" alt class="w-px-40 h-auto rounded-circle" />
                                     </div>
                                 </a>
                                 <ul class="dropdown-menu dropdown-menu-end">
                                     <li>
                                         <a class="dropdown-item" href="#">
                                             <div class="d-flex">
                                                 <div class="flex-shrink-0 me-3">
                                                     <div class="avatar avatar-online">
                                                         <img src="<?= USER_IMAGE_SITE_PATH . 'profile_photo/' . $_SESSION['user']['avatar'] ?>" alt class="w-px-40 h-auto rounded-circle" />
                                                     </div>
                                                 </div>
                                                 <div class="flex-grow-1">
                                                     <span class="fw-semibold d-block"><?= $_SESSION['user']['name'] ?></span>
                                                     <small class="text-muted">Admin</small>
                                                 </div>
                                             </div>
                                         </a>
                                     </li>
                                     <li>
                                         <div class="dropdown-divider"></div>
                                     </li>
                                     <li>
                                         <a class="dropdown-item" href="#">
                                             <i class="bx bx-user me-2"></i>
                                             <span class="align-middle">My Profile</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a class="dropdown-item" href="<?= url() ?>/user/user.php">
                                             <i class="bx bx-cog me-2"></i>
                                             <span class="align-middle">Settings</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a class="dropdown-item" href="#">
                                             <span class="d-flex align-items-center align-middle">
                                                 <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                 <span class="flex-grow-1 align-middle">Billing</span>
                                                 <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                             </span>
                                         </a>
                                     </li>
                                     <li>
                                         <div class="dropdown-divider"></div>
                                     </li>
                                     <li>
                                         <a class="dropdown-item" href="<?= url() ?>/logout.php">
                                             <i class="bx bx-power-off me-2"></i>
                                             <span class="align-middle">Log Out</span>
                                         </a>
                                     </li>
                                 </ul>
                             </li>
                             <!--/ User -->
                         </ul>
                     </div>
                 </nav>
                 <!-- / Navbar -->
                 <!-- Content wrapper -->
                 <div class="content-wrapper">