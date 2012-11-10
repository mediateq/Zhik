<?php
	get_template_part('./inc/header');
?>
			<section class="article">
				<?php
					while (have_posts()) {
						the_post();
				?>
				
					<div class="tit"><p><?php the_title(); ?></p></div>	
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