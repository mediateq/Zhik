	<section class="gallery">
		<?php
			if (have_posts()) {
				the_post();
		?>

			<div class="gallerypic">

				<?php
					$gall_attach= array(
								'numberposts' => '-1',
								'orderby '=> 'menu_order',  
								'order'=> 'DESC',  
								'post_mime_type' => 'image', 
								'post_parent' => $post->ID, 
								'post_status' => null, 
								'post_type' => 'attachment'
					);

					$images= get_children($gall_attach);

					if ($images){

						foreach ($images as $img) {

							echo "<div class='pic'>";

								$img_med  = wp_get_attachment_image($img->ID,'medium');
								$img_larg = wp_get_attachment_image_src($img->ID,'large');
								
								echo "<a rel='lightbox[group1]' href=\"$img_larg[0]\" title=\"$img->post_content\"> $img_med </a>";

								echo "<div class='text'><p> $img->post_content </p></div>";
							
							echo "</div>";
						}
						echo "<div class='badboy'></div>";

						

					}else echo "<p class='no-image'>تصویری در گالری موجود نمی باشد</p>";
				?>

			</div>

		<?php
			}
		?>
	</section>