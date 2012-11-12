<?php
	get_template_part('./inc/header');
?>
			<section class="article">
				<?php
					while (have_posts()) {
						the_post();
				?>
				
					<div class="tit"><h5><?php the_title(); ?></h5></div>	
					<div class="text">
						<p><?php the_content(); ?></p>
					</div>

				<?php
					}
				?>
			</section>

<?php
	get_template_part('./inc/footer');
?>