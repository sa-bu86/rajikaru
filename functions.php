<?php
/**
* CSSとJavaScriptの読み込み
*
* @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
*/
function my_script_init()
{
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
	wp_enqueue_style('my', get_template_directory_uri() . '/top.css', array(), '1.0.0', 'all');

    wp_enqueue_script('my', get_template_directory_uri() . '/top.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');
?>
<?php
function my_styles() {
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/sp.css', array(), '1.0.3' );
}
add_action( 'wp_enqueue_scripts', 'my_styles' );
?>

<?php
//functions.php
function register_my_menus() { 
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'main-menu' => 'Main Menu',
    'footer-menu'  => 'Footer Menu',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );
?>

<?
add_theme_support('post-thumbnails');
?>


















