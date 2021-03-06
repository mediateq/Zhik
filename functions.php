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
		'add_new' => _x('اضافه نمودن مقاله' , 'Article'),
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

		$html = "<section class='article'>";

		while($article->have_posts()){
			$article->the_post();

			$url     = get_permalink();
			$title   = get_the_title();
			$content = get_the_content();

			$html 	.= "<div class='tit'><h5><a href=\"$url\"> $title </a></h5></div>	
							<div class='text'>
								<p> $content </p>
							</div>";
		}

		$html 	.= "</section>";
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
		'menu_position' => 6,
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

		$html = "<section class='news'>";

		while($news->have_posts()){
			$news->the_post();

			$title   = get_the_title();
			$content = get_the_content();
			$date    = apply_filters('the_date()', get_the_date('j F  Y - G:i'));
			$url     = get_permalink();
			$pict    = get_the_post_thumbnail();

			$html 	.= "<div class='textpic'>
							<div class='pic'> $pict </div>
							<div class='text'>
								<div class='tit'><h5><a href=\"$url\"> $title </a></h5></div>
								<div class='date'><p> $date </p></div>
								<div class='desc'><p> $content </p></div>
							</div>
							<div class='badboy'></div>
						</div>";
		}

		$html 	.= "</section>";
		return $html;
	}

//////////////////////////// Project page ////////////////////////////////
	add_theme_support('post-thumbnails');

	add_action('init','project_init');

	function project_init(){
		$labels = array(
		'name' => _x('پروژه ها','post type general name'),
		'singular_name' => _x('پروزه','post type singular name'),
		'add_new' => _x('اضافه نمودن پروژه' , 'Project'),
		'add_new_item' => __('اضافه نمودن پروژه'),
		'edit_item' => __('اصلاح پروژه'),
		'new_item' => __('پروژه جدبد'),
		'view_item' => __('مشاهده پروژه'),
		'search_items' => __('جستجوی پروژه'),
		'not_found' => __('هیچ پروژه ای یافت نشد'),
		'not_found_in_trash' => __('هیچ پروژه ای در زباله دان یافت نشد'),
		'parent_item_colon' => '',
		'menu_name' => 'پروژه ها'
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
		'menu_position' => 7,
		'menu_icon' => get_bloginfo('template_url') . '/images/projecticon.png',
		'supports' => array('title','editor','thumbnail','excerpt','comments'),
	);

		register_post_type('project', $args);
	}

	add_shortcode('project', 'all_project');

	function all_project(){
		$project = new WP_Query(array(
		'post_type' => 'project'
	));

		$html = "<section class='project'>";

		while($project->have_posts()){
			$project-> the_post();

			$title   = get_the_title();
			$url     = get_permalink();
			$content = get_the_content();
			$pict    = get_the_post_thumbnail();

			$html 	.= "<div class='textpic'>
							<div class='pic'> $pict </div>
							<div class='text'>
								<div class='tit'><h5><a href=\"$url\"> $title </a></h5></div>
								<div class='desc'><p> $content </p></div>
							</div>
							<div class='badboy'></div>
						</div>";
		}

		$html 	.= "</secion>";
		return $html;
	}