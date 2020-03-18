<?php
if ( function_exists('register_sidebar') )
  register_sidebar();

  add_theme_support('post-thumbnails');

  wp_deregister_script('jquery');

  function menu_setup() {
    register_nav_menus( array(
      'global' => 'グローバルメニュー',
      'side'   => 'サイドメニュー',
      'footer' => 'フッターメニュー',
    ) );
  }
  add_action( 'after_setup_theme', 'menu_setup' );

  //メニューの<li>からID除去
  function removeMenuId( $id ){
      return $id = array();
  }
  add_filter('nav_menu_item_id', 'removeMenuId', 10);

  //メニューの<li>からクラス除去
  function removeMenuClass( $classes ) {
      return $classes = array();
  }
  add_filter( 'nav_menu_css_class', 'removeMenuClass', 10, 2 );

  $page = get_post( get_the_ID() );
  $slug = $page->post_name;

  function add_class_on_link($item_output, $item){
  return preg_replace('/(<a.*?)/', '$1' . " class='menu_link'",  $item_output);
  }
  add_filter('walker_nav_menu_start_el', 'add_class_on_link', 10, 4);
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