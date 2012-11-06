<?php
	get_template_part('./inc/header');
?>

	<section class="project">
		<div class="title"><p>پروژه ها</p></div>	

		<?php
			while (have_posts()) {
				the_post();
			
		?>	

			<div class="textpic">
				<div class="pic"><?php the_post_thumbnail(); ?></div>
				<div class="text">
					<div class="tit"><h2><?php the_title(); ?></h2></div>
					<div class="desc"><p><?php the_content(); ?></p></div>
				</div>
				<div class="badboy"></div>
			</div>

		<?php
			}
		?>			
	</section>

<?php
	get_template_part('./inc/footer');
?>