<?php get_header(); ?>
<article class="about-us">
  <div class="wrapper">
    <h2 class="heading-title"><?php echo get_theme_mod('s1-title-2', 'Postaw na rozwój naturalnych zdolności dziecka!'); ?></h2>
    <p><?php echo get_theme_mod('s1-text-1', 'Szkoła Talentów powstała z połączenia pasji wielu osób, które poszukiwały <strong>skutecznych</strong> metod rozwijania potencjału własnych dzieci. Są wśród nas <strong>nauczyciele</strong>, <strong>logopedzi</strong>, <strong>psycholodzy</strong> i <strong>artyści</strong>.'); ?></p>
  </div>
</article>
<hr>
<article class="info">
  <div class="wrapper">
    <h2 class="visuallyhidden">Więcej informacji o nas</h2>
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="#tab01" data-toggle="tab" title=""><span class="fa fa-file-text-o" aria-hidden="true" title="Nagroda 01"></span><strong>O metodzie</strong></a></li>
        <li role="presentation"><a href="#tab02" data-toggle="tab" title=""><span class="fa fa-user-circle" aria-hidden="true" title="Nagroda 02"></span><strong>Dla kogo</strong></a></li>
        <li role="presentation"><a href="#tab03" data-toggle="tab" title=""><span class="fa fa-commenting-o" aria-hidden="true" title="Nagroda 03"></span><strong>Opinie</strong></a></li>
      </ul>
      <div class="tab-content">
        <section class="tab-pane fade active in">
          <h2 class="tab-title">Czego chcesz się dowiedzieć?</h2>
          <p class="tab-description">Kliknij w jeden z bloków, aby dowiedzieć się więcej.</p>
        </section>
        <section class="tab-pane fade" id="tab01">
          <h3 class="tab-title">O metodzie</h3>
          <p class="tab-description"><?php echo get_theme_mod('s1-text-2', 'Tekst zawarty w zakładkach nie powinien być długi. Na końcu każdej z nich można umieścić zawsze odnośnik do strony - w tym przypadku to `Metody`.'); ?></p>
        </section>
        <section class="tab-pane fade" id="tab02">
          <h3 class="tab-title">Dla kogo?</h3>
          <p class="tab-description"><?php echo get_theme_mod('s1-text-3', 'Tekst zawarty w zakładkach nie powinien być długi.'); ?></p>
        </section>
        <section class="tab-pane fade" id="tab03">
          <h3 class="tab-title">Opinie</h3>
          <p class="tab-description"><?php echo get_theme_mod('s1-text-4', 'Tekst zawarty w zakładkach nie powinien być długi. Na końcu każdej z nich można umieścić zawsze odnośnik do strony - w tym przypadku to `Opinie`.'); ?></p>
        </section>
      </div>
  </div>
</article>
<section class="contact-us">
  <div class="wrapper">
    <h2 class="heading-title"><?php echo get_theme_mod('s1-text-5', 'Masz jakieś pytania?'); ?></h2>
    <p class="heading-desc"><?php echo get_theme_mod('s1-text-6', 'Postaramy się na nie odpowiedzieć!'); ?></p>
    <?php echo do_shortcode( '[contact-form-7 id="61" title="Formularz kontaktowy" html_class="form"]' );  ?>
  </div>
</section>
<?php get_footer(); ?>
