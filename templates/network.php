<?php /* Template Name: Network */ ?>

<?php get_header(); ?>
<div id="ourWork">
	<main class="site-main" id="main">
		
		<?php $hero = get_field('hero'); ?>
		<section class="hero container-fluid position-relative" style = "background: url('<?php echo $hero['image']['url']; ?>');">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class = "mb-0 text-white"><?php echo $hero['header']; ?></h1>
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->	
			</div>
		</section><!-- .container-fluid -->

		<section id="work" class = "pt-5 mb-5">
			<div class="container">
				<div id = "masonry">
				<?php $work_query = new WP_Query( 'post_type=project&posts_per_page=-1' ); ?>
				<?php if ( $work_query->have_posts() ) : while ( $work_query->have_posts() ) : $work_query->the_post(); ?>
					<a class = "project d-flex" href="<?php the_permalink(); ?>">
						<div class = "d-flex flex-column">
							<?php the_post_thumbnail( 'full' ); ?>
							<div class = "p-3">
								<h3 class="h5 project-card-title"><?php the_title(); ?></h3><!-- .h5 -->
								<div class="categories">
									<ul class="list-unstyled mb-0">
										<?php
										$term_list = wp_get_post_terms($post->ID, 'project-category');
										$count = count($term_list);
										$i = 1;
										foreach($term_list as $term_single) { ?>
											<li class = "project-category d-inline"><?php echo $term_single->name; if ($i != $count) {echo ',';} ?>
											</li>
										<?php $i++; } ?>
									</ul><!-- .list-unstyled -->
								</div><!-- .categories -->
							</div>
						</div><!-- .project -->
					</a>
					<?php endwhile; ?>
					<?php endif; ?>
				</div><!-- #masonry -->
			</div><!-- .container -->
		</section><!-- #callouts -->
	</main><!-- #main -->
</div><!-- #ourWork -->
<?php get_footer(); ?>