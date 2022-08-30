<?php
get_header();
?>

<!-- Service Start -->
<div class="container-fluid bg-light my-5 py-6" id="service">
  <div class="container">
    <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="col-lg-6">
        <h1 class="display-5 mb-0">My Services</h1>
      </div>
      <div class="col-lg-6 text-lg-end">
        <a class="btn btn-primary py-3 px-5" href="">Hire Me</a>
      </div>
    </div>
    <div class="row g-4">
      <?php
      if (have_posts()) {
        while (have_posts()) {

          the_post();

          get_template_part('template-parts/content', 'archive');
        }
      }
      ?>

    </div>
  </div>
</div>
<!-- Service End -->

<?php

get_footer();
?>