<?php get_header(); ?>
<main class="wrapper">
<?php custom_breadcrumbs(); ?>
<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="thumbnail-img" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>)">
    </div>
  <?php } ?>
  <?php
  the_content();
endwhile; ?>
</article>
<?php endif; ?>
</main>
<?php get_footer(); ?>
