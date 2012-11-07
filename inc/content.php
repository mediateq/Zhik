			<section class="banner">
				<?php
					if (have_posts()){
						the_post();
				?>
					<div class="slideshow">
						<ul id="slider">
							<?php
								$slide_attach= array(
									'numberposts' => '-1',
									'orderby '=> 'menu_order',  
									'order'=> 'ASC',  
									'post_mime_type' => 'image', 
									'post_parent' => $post->ID, 
									'post_status' => null, 
									'post_type' => 'attachment'
								);

								$images= get_children($slide_attach);

								if ($images){

									foreach ($images as $img) {
										
										$img_larg= wp_get_attachment_image($img->ID,'large');
										echo "<li> $img_larg </li>";
									}
								}
							?> 
						</ul>
					</div>
				<div class="text">
					<p><?php the_content(); ?></p>
				</div>
				<?php
					}
				?>
			</section>
			<!-- ------------------------welcome--------------------- -->
			<section class="welcome">
				<?php
			    	dynamic_sidebar("Middle Sidebar");
			    ?>
				<div class="badboy"></div>
			</section>
			<!-- ------------------------recent--------------------- -->
			<div class="rectitle"><p>آخرین پروژه ها</p></div>
			<section class="recent">
				
				<?php $args = array(
				    'numberposts' => 3,
				    'offset' => 0,
				    'category' => 0,
				    'orderby' => 'post_date',
				    'order' => 'DESC',
				    'include' => '',
				    'exclude' => '',
				    'meta_key' => '',
				    'meta_value' =>'',
				    'post_type' => 'project',
				    'post_status' => 'draft, publish, future, pending, private',
				    'suppress_filters' => true 
				    ); 

				$recent_posts = wp_get_recent_posts( $args );

				foreach( $recent_posts as $recent ){

					$url     = get_permalink($recent["ID"]);
					$title   = $recent["post_title"];
					$content = $recent["post_content"];
					

					echo "<div class='recentpro'><a href=\"$url\"> $title </a></div>";
				}

				?>

				

				<div class="badboy"></div>
			</section>	