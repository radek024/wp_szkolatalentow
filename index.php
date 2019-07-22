<?php get_header(); ?>
<main class="wrapper">
<?php custom_breadcrumbs(); ?>
<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post() ?>
<article class="post-excerpt">
  <div class="masthead">
    <time datetime="<?php the_date_xml(); ?>">
      <span class="day"><?php the_time('d') ?></span>
      <span class="month"><?php $mies=get_the_date('n'); toRoman($mies); ?></span>
      <span class="year"><?php the_time('Y') ?></span>
    </time>
    <h3 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
  </div>
  <p><?php echo get_the_excerpt(); ?>
  <a href="<?php the_permalink(); ?>">Czytaj dalej...</a></p>
</article>
<hr>
<?php endwhile; ?>
<ul class="pagination">
  <li><?php next_posts_link( 'Starsze wpisy' ); ?></li>
  <li><?php previous_posts_link( 'Nowsze wpisy' ); ?></li>
</ul>
<?php endif; ?>
</main>
<?php get_footer(); ?>
