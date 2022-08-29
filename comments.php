<!-- Testimonial Start -->
<div class="container-fluid bg-light py-5 my-5" id="testimonial">
  <div class="container-fluid py-5">
    <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
      <?php
      if (!have_comments()) {
        echo "Leave a Comment";
      } else {
        echo get_comments_number() . " Comments";
      }
      ?>
    </h1>
    <div class="row justify-content-center">
      <div class="col-lg-3 d-none d-lg-block">
        <div class="testimonial-left h-100">
          <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonial-1.jpg" alt="">
          <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonial-2.jpg" alt="">
          <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonial-3.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <?php
        wp_list_comments(
          array(
            'avatar_size' => 60,
            'style' => 'div',
          )
        );
        ?>
      </div>
      <div class="col-lg-6 mt-3">
        <?php
        if (comments_open()) {
          comment_form(
            array(
              'class_form' => '',
              'title_replay_before' => '<h2 id="reply-title" class="comment-reply-title ms-2">',
              'title_reply_after' => '</h2>'
            )
          );
        }
        ?>
      </div>
      <hr>
    </div>
  </div>
</div>
<!-- Testimonial End -->