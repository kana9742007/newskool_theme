<?php
if ( function_exists('register_sidebar') )
  register_sidebar();

  add_theme_support('post-thumbnails');

  wp_deregister_script('jquery');
?>

<?php
function twpp_enqueue_scripts() {
  wp_enqueue_script(
    'hamburger-script',
    get_template_directory_uri() . '/assets/js/hamburger.js',
  );

  wp_enqueue_script(
    'footer-script',
    get_template_directory_uri() . '/assets/js/footer.js',
  );

  wp_enqueue_style(
    'slick-them-style',
    get_template_directory_uri() . '/assets/js/slick/slick-theme.css',
  );

  wp_enqueue_style(
    'slick-style',
    get_template_directory_uri() . '/assets/js/slick/slick.css',
  );

  wp_enqueue_script(
    'muuri_custum-script',
    get_template_directory_uri() . '/assets/js/muuri_custum.js',
  );

  wp_enqueue_script(
    'muuri-script',
    get_template_directory_uri() . '/assets/js/muuri.js',
  );

  wp_enqueue_script(
    'slick_slider-script',
    get_template_directory_uri() . '/assets/js/slick/slick_slider.js',
  );
  wp_enqueue_script(
    'slick_script',
    get_template_directory_uri() . '/assets/js/slick/slick.js',
  );
  wp_enqueue_script(
    'slick.min-script',
    get_template_directory_uri() . '/assets/js/slick/slick.min.js',
  );
}

add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts','wp_enqueue_styles' );
?>