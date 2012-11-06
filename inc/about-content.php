			<section class="about">
						<?php
							if (have_posts()) {
								the_post();
			
						?>
					<div class="title"><p><?php the_title(); ?></p></div>	
					<div class="text">
						<p>
							<?php the_content(); ?>
						</p>
					</div>
					<?php
						}
					?>
			</section>