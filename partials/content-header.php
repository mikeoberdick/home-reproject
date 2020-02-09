<header class="page-header container">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="entry-title h3">
								<?php if (get_field('page_title')) :
									the_field('page_title'); else :
									the_title();
								endif; ?>
							</h1>	
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
					<?php if (get_field('page_subtitle')) : ?>
						<h3 class="h5 mt-1">
							<?php the_field('page_subtitle'); ?>
						</h3>
					<?php endif; ?>
				</header><!-- .entry-header -->