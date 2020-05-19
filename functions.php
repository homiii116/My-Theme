<?php 
add_theme_support('post-thumbnails'); 
add_theme_support('menus');
// New postsの文字数抜粋//
function my_excerpt_length($length) {
    return 120;
    }
		add_filter('excerpt_length', 'my_excerpt_length');
// New postsの続きの...// 
function my_excerpt_more($more) {
	return '…';
	}
	add_filter('excerpt_more', 'my_excerpt_more');
// ウィジェットの登録//
function my_widgets_init() {
	register_sidebar( array(
		'name' => 'sidebar-category',
		'id' => 'sidebar_category',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => 'footer-category',
		'id' => 'footer_category',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'footer-about',
		'id' => 'footer_about',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => 'footer-twitter',
		'id' => 'footer_twitter',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );
}
add_action( 'widgets_init', 'my_widgets_init' );
?>
