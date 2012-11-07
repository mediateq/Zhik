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
				<div class="first">
					<div class="title"><h2>کار شماره 1</h2></div>
					<div class="text">
						<p>
							کار شماره یک در خیابانکار شماره یک در خیابانکار شماره یک در خیابانکار شماره یک در خیابانکار شماره یک در خیابانکار شماره یک در خیابانکار شماره یک در خیابانکاران
						</p>
					</div>
				</div>
				<div class="second">
					<div class="title"><h2>کار شماره 2</h2></div>
					<div class="text">
						<p>
							کار شماره یک در خیابانکار شماره یک در خیابانکار شماره یک در خیابانکار شماره یک در خیابانکار شماره یک در خیابانکار شماره یک در خیابانکار شماره دو در خیابان
						</p>
					</div>
				</div>
				<div class="third">
					<div class="title"><h2>کار شماره 3</h2></div>
					<div class="text">
						<p>
							کار شماره یک در خیابانکار شماره یک در خیابانکار شماره یک در خیابانکار شماره یک در خیابانکار شماره یک در خیابانکار شماره یک در خیابانکار شماره سه در خیابان
						</p>
					</div>
				</div>
				<div class="badboy"></div>
			</section>
			<!-- ------------------------recent--------------------- -->
			<div class="rectitle"><p>آخرین پروژه ها</p></div>
			<section class="recent">
				<div class="first">
					<img src="<?php bloginfo('template_url'); ?>/images/recent/recent1.jpg" alt="">
					<h2>پروژه 1</h2>
					<p>
						پروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث است
					</p>
				</div>
				<div class="second">
					<img src="<?php bloginfo('template_url'); ?>/images/recent/recent2.jpg" alt="">
					<h2>پروژه 2</h2>
					<p>
						 پروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 2 در دست احداث است
					</p>
				</div>
				<div class="third">
					<img src="<?php bloginfo('template_url'); ?>/images/recent/recent3.jpg" alt="">
					<h2>پروژه 3</h2>
					<p>
						 پروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 1 در دست احداث استپروژه 3 در دست احداث است
					</p>
				</div>
				<div class="badboy"></div>
			</section>	