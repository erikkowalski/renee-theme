<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/renee-slider-1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption rr">
            <h1 class="">Ren&eacute;e N. Russo</h1>
            </div>
          </div>
        </div>
        <div class="item">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/renee-slider-2.jpg" alt="Second slide">
        </div>

        <div class="item">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/renee-slider-3.jpg" alt="Third slide">
        </div>

        <div class="item">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/renee-slider-4.jpg" alt="Fourth slide">
        </div>

        <div class="item">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/renee-slider-5.jpg" alt="Fith slide">
        </div>

        <div class="item">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/renee-slider-6.jpg" alt="Sixth slide">
        </div>

      </div>
     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

   <?php get_template_part('templates/page', 'header'); ?>

<div class="home">



<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
</div>
