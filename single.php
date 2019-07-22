<?php get_header(); ?>
<main class="wrapper">

  <?php custom_breadcrumbs(); ?>
  <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article>
    <div class="masthead">
      <time datetime="<?php the_date_xml(); ?>">
        <span class="day"><?php the_time('d') ?></span>
        <span class="month"><?php $mies=get_the_date('n'); toRoman($mies); ?></span>
        <span class="year"><?php the_time('Y') ?></span>
      </time>
      <h3 class="article-title"><?php the_title(); ?></h3>
    </div>
    <?php the_content(); ?>
    <?php endwhile; ?>
  </article>
<?php endif; ?>
</main>
<?php get_footer(); ?>
