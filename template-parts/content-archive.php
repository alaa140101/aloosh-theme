<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
  <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
    <div class="bg-icon flex-shrink-0 mb-3">
      <!-- <i class="fa fa-crop-alt fa-2x text-dark"></i> -->
      <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="img-fluid post-thumb d-none d-md-flex" alt="">
    </div>
    <div class="ms-sm-4">
      <h4 class="mb-3"><?php the_title(); ?></h4>
      <h6 class="mb-3"><?php the_excerpt(); ?></h6>
      <span><?php the_date(); ?></span>
      <span><?php comments_number(); ?></span>
      <a href="<?php the_permalink(); ?>" class="more-link">Read more &rarr;</a>
    </div>
  </div>
</div>