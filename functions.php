<?php


//CSS Connection
function load_css()
{


		wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(),false, 'all');
		wp_enqueue_style('bootstrap');

		wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(),1.1, 'all');
		wp_enqueue_style('stylesheet');




}
add_action('wp_enqueue_scripts','load_css');



//JS Connection
function load_js()
{

		wp_enqueue_script('jquery');

		wp_register_style('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
		wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts','load_js');


 


// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');




//Menus
register_nav_menus(

	array(

			'top-menu' => 'Top Menu',
			'mobile-menu' => 'Mobile Menu'
	 )

);


//Custom Image Size
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);


//Sidebars
function my_sidebars()
{



		register_sidebar(


				array(

						'name' => 'Page Sidebar',
						'id' => "page-sidebar",
						'before_title' => '<h3 class="widget-title">',
						'after_title' => '</h3>'


				)



		);


		register_sidebar(


				array(

						'name' => 'Blog Sidebar',
						'id' => "blog-sidebar",
						'before_title' => '<h3 class="widget-title">',
						'after_title' => '</h3>'


				)



		);







}
add_action('widgets_init', 'my_sidebars');