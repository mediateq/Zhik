<?php
	add_theme_support('menus');

	register_nav_menu('mainmenu', "Main Menu");

//////////////////////////// Article page ////////////////////////////////
	add_theme_support('post-thumbnails');

	add_action('init','article_init');

	function article_init(){
		$labels = array(
		'name' => _x('مقالات','post type general name'),
		'singular_name' => _x('مقاله','post type singular name'),
		'add_new' => _x('اضافه نمودن مقاله' , 'News'),
		'add_new_item' => __('اضافه نمودن مقاله'),
		'edit_item' => __('اصلاح مقاله'),
		'new_item' => __('مقاله جدبد'),
		'view_item' => __('مشاهده مقاله'),
		'search_items' => __('جستجوی مقاله'),
		'not_found' => __('هیچ مقاله ای یافت نشد'),
		'not_found_in_trash' => __('هیچ مقاله ای در زباله دان یافت نشد'),
		'parent_item_colon' => '',
		'menu_name' => 'مقالات'
	);
		$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => get_bloginfo('template_url') . '/images/articleicon.png',
		'supports' => array('title','editor','thumbnail','excerpt','comments'),
	);

		register_post_type('article', $args);
	}

	add_shortcode('article', 'all_article');

	function all_article(){
		$article = new WP_Query(array(
		'post_type' => 'article'
	));

		$html = "";

		while($article->have_posts()){
			$article->the_post();

			$title   = get_the_title();
			$content = get_the_content();

			$html 	.= "<div class='tit'><p> $title </p></div>	
						<div class='text'>
							<p> $content </p>
						</div>";
		}

		return $html;
	}

//////////////////////////// NEWS page ////////////////////////////////
	add_theme_support('post-thumbnails');

	add_action('init','news_init');

	function news_init(){
		$labels = array(
		'name' => _x('اخبار','post type general name'),
		'singular_name' => _x('خبر','post type singular name'),
		'add_new' => _x('اضافه نمودن خبر' , 'News'),
		'add_new_item' => __('اضافه نمودن خبر'),
		'edit_item' => __('اصلاح خبر'),
		'new_item' => __('خبر جدبد'),
		'view_item' => __('مشاهده خبر'),
		'search_items' => __('جستجوی خبر'),
		'not_found' => __('هیچ خبری یافت نشد'),
		'not_found_in_trash' => __('هیچ خبری در زباله دان یافت نشد'),
		'parent_item_colon' => '',
		'menu_name' => 'اخبار'
	);
		$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => get_bloginfo('template_url') . '/images/newsicon.png',
		'supports' => array('title','editor','thumbnail','excerpt','comments'),
	);

		register_post_type('news', $args);
	}

	add_shortcode('news', 'all_news');

	function all_news(){
		$news = new WP_Query(array(
		'post_type' => 'news'
	));

		$html = "";

		while($news->have_posts()){
			$news->the_post();

			$title   = get_the_title();
			$content = get_the_content();

			$html 	.= "";
		}

		return $html;
	}
