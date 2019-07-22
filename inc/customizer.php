<?php

function frontpage($wp_customize){
$wp_customize->add_section('section-1', array(
  'title'   => __('Ekran powitalny', 'szkolatalentow_wp'),
  'description' => sprintf(__('Strona powitalna - konfiguracja','szkolatalentow_wp')),
  'priority'    => 130
));
$wp_customize->add_setting('s1-graphic-1', array(
  'default'   => get_bloginfo('template_directory').'/img/logo.png',
  'type'      => 'theme_mod'
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 's1-graphic-1', array(
  'label'   => __('Grafika identyfikująca', 'szkolatalentow_wp'),
  'section' => 'section-1',
  'settings' => 's1-graphic-1',
  'priority'  => 10
)));
$wp_customize->add_setting('s1-title-1', array(
  'default'   => _x('Postaw na rozwój naturalnych zdolności dziecka!', 'szkolatalentow_wp'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s1-title-1', array(
  'label'   => __('Hasło identyfikujące', 'szkolatalentow_wp'),
  'section' => 'section-1',
  'priority'  => 20
));

$wp_customize->add_setting('s1-title-2', array(
  'default'   => _x('Czym jest Szkoła Talentów?', 'szkolatalentow_wp'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('s1-title-2', array(
  'label'   => __('Tytuł sekcji wprowadzającej', 'szkolatalentow_wp'),
  'section' => 'section-1',
  'priority'  => 30
));

$wp_customize->add_setting('s1-text-1', array(
  'default'   => _x('Szkoła Talentów powstała z połączenia pasji wielu osób, które poszukiwały <strong>skutecznych</strong> metod rozwijania potencjału własnych dzieci. Są wśród nas <strong>nauczyciele</strong>, <strong>logopedzi</strong>, <strong>psycholodzy</strong> i <strong>artyści</strong>.', 'szkolatalentow_wp'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s1-text-1', array(
  'label'   => __('Tekst wprowadzający odbiorcę', 'szkolatalentow_wp'),
  'section' => 'section-1',
  'priority'  => 40
));
$wp_customize->add_setting('s1-text-2', array(
  'default'   => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, iste.', 'szkolatalentow_wp'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s1-text-2', array(
  'label'   => __('Zakładka pierwsza - o metodzie (tekst)', 'szkolatalentow_wp'),
  'section' => 'section-1',
  'priority'  => 50
));
$wp_customize->add_setting('s1-text-3', array(
  'default'   => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, iste.', 'szkolatalentow_wp'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s1-text-3', array(
  'label'   => __('Zakładka druga - dla kogo (tekst)', 'szkolatalentow_wp'),
  'section' => 'section-1',
  'priority'  => 60
));
$wp_customize->add_setting('s1-text-4', array(
  'default'   => _x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, iste.', 'szkolatalentow_wp'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s1-text-4', array(
  'label'   => __('Zakładka trzecia - opinie (tekst)', 'szkolatalentow_wp'),
  'section' => 'section-1',
  'priority'  => 70
));

$wp_customize->add_setting('s1-text-5', array(
  'default'   => _x('Masz jakieś pytania?', 'szkolatalentow_wp'),
  'type'      => 'theme_mod'
));
$wp_customize->add_control('s1-text-5', array(
  'label'   => __('Kontakt - tytuł', 'szkolatalentow_wp'),
  'section' => 'section-1',
  'priority'  => 80
));

  $wp_customize->add_setting('s1-text-6', array(
    'default'   => _x('Postaramy się na nie odpowiedzieć!', 'szkolatalentow_wp'),
    'type'      => 'theme_mod'
  ));
  $wp_customize->add_control('s1-text-6', array(
    'label'   => __('Kontakt - opis', 'szkolatalentow_wp'),
    'section' => 'section-1',
    'priority'  => 80
  ));

$wp_customize->add_section('social-media', array(
  'title'   => __('Social Media', 'szkolatalentow_wp'),
  'description' => sprintf(__('Aby dotrzeć do większej ilości osób, warto użyć social-media.','szkolatalentow_wp')),
  'priority'    => 190
));

$wp_customize->add_setting('sm-1', array(
    'default'   => _x('#', 'szkolatalentow_wp'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('sm-1', array(
  'label'   => __('Facebook - kontakt', 'szkolatalentow_wp'),
  'section' => 'social-media',
  'priority'  => 60
));

$wp_customize->add_setting('sm-2', array(
    'default'   => _x('#', 'szkolatalentow_wp'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('sm-2', array(
  'label'   => __('Instagram - kontakt', 'szkolatalentow_wp'),
  'section' => 'social-media',
  'priority'  => 70
));

$wp_customize->add_setting('sm-3', array(
    'default'   => _x('#', 'szkolatalentow_wp'),
  'type'      => 'theme_mod'
));

$wp_customize->add_control('sm-3', array(
  'label'   => __('Twitter - kontakt', 'szkolatalentow_wp'),
  'section' => 'social-media',
  'priority'  => 80
));

}

add_action('customize_register', 'frontpage');
