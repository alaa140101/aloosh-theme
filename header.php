<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">



  <?php
  wp_head();
  ?>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="navbar-brand d-block d-lg-none">
      <h1 class="text-primary fw-bold m-0">ProMan</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    wp_nav_menu(
      array(
        'menu' => 'primary',
        'container' => '',
        'theme_location' => 'primary',
        'items_wrap' => '<div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse"><div class="navbar-nav ms-auto py-0">%3$s</div></div>'
      )
    );
    ?>
    <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
      <a href="index.html" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block">
        <h1 class="text-primary fw-bold m-0">ProMan</h1>
      </a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Header Start -->
  <div class="container-fluid bg-light my-6 mt-0" id="home">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6 py-6 pb-0 pt-lg-0">
          <h3 class="text-primary mb-3">I'm</h3>
          <h1 class="display-3 mb-3"><?php the_title(); ?></h1>
          <h2 class="typed-text-output d-inline"></h2>
          <div class="typed-text d-none">Web Designer, Web Developer, Front End Developer, Apps Designer, Apps Developer</div>
          <div class="d-flex align-items-center pt-5">
            <a href="" class="btn btn-primary py-3 px-4 me-5">Download CV</a>
            <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
              <span></span>
            </button>
            <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5>
          </div>
        </div>
        <!-- <div class="col-lg-6">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/profile.png">
        </div> -->
      </div>
    </div>
  </div>
  <!-- Header End -->