	<section class="gallery">
		<div class="title"><p>گالری</p></div>
		<?php
			if (have_posts()) {
				the_post();
		?>

			<div class="gallerypic">

			</div>
			
		<?php
			}
		?>
	</section>