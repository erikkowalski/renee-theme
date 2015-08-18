<article class="col-xs-12 col-sm-6 col-md-3 col-lg-3" <?php post_class(); ?>>
  <header>
         <?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(); } ?>

    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>

</article>
