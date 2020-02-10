<?php
/**
 * Template Name: Testimonials
 * @package understrap
**/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="networkTestimonials" class = "page-wrapper">
	<div id="content" tabindex="-1">
		<main class="site-main" id="main">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php get_template_part( 'partials/content', 'header' ); ?>
				<div class="entry-content container">
					
				<?php
				//Setup the query args
				$args = [
				    'post_type'      => 'testimonial',
				    'post_status'    => 'publish',
				    'posts_per_page' => -1
				];
			
				$qry = new WP_Query($args);
				?>

				<section id="testimonialNavigation" class = "mb-4">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<?php $args = array(
					              'taxonomy' => 'testimonial-category',
					              'orderby' => 'name',
					              'order'   => 'ASC'
				           		); $cats = get_categories($args); ?>
								<div id="buttonWrapper" class = "d-none d-md-inline-flex">
									<a type="button" data-mixitup-control data-filter="all">All Testimonials</a>
									<?php foreach($cats as $cat) { ?>
			      					<a type="button" data-mixitup-control data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?>s</a>
									<?php } ?>	
								</div><!-- #buttonWrapper -->
								<div id="selectWrapper" class = "d-md-none">
									<select id="mobileSelector">
									    <option data-mixitup-control value="all">All</option>
									    <?php foreach($cats as $cat) { ?>
									    	<option data-mixitup-control value=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></option>
									    <?php } ?>
									 </select>	
								</div>
							</div><!-- .col-sm-12 -->
						</div><!-- .row -->
					</div><!-- .container -->
				</section><!-- #galleryNavigation -->

				<section id="testimonials" class = "mb-5">
					<div class="container">
						<?php $i = 0; ?>
						<?php if ($qry->have_posts()) : ?>
							<div class="row">
						<?php while ($qry->have_posts()) : $qry->the_post(); ?>
						<?php //vars
							$image = get_field('image');
							$content = get_field('content');
							$name = get_field('name');
							$region = get_field('region');
							$company = get_field('company_name');
							$title = get_field('title');
							$terms = wp_get_post_terms( $post->ID, 'testimonial-category');
							$term = $terms[0]; ?>
						<div class="testimonial-wrapper col-sm-12 mb-3 mix<?php foreach($terms as $term) { echo ' ' . $term->slug; } ?>">
							<div class="testimonial p-3">
								<?php foreach ($terms as $term) { $term = $term->name; } ?>
								<?php if ($company) { ?>
									<h5 class = "font-weight-bold green mb-3"><?php echo $term . ' | ' . $company . ' | ' . $region; ?></h5>
								<?php } else { ?>
								<h5 class = "font-weight-bold green mb-3"><?php echo $term . ' | ' . $region; ?></h5>
								<?php } ?>
								<div class="row">
									<div class="col-sm-3">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
									</div><!-- .col-sm-3 -->
									<div class="col-sm-9">
										<p class = "mb-3"><?php echo $content; ?></p>
										<?php if ($company) { ?>
									<h6>- <?php echo $name . ', ' . $company; ?></h6>
								<?php } else { ?>
								<h6>- <?php echo $name;?></h6>
								<?php } ?>
									</div><!-- .col-sm-9 -->
								</div><!-- .row -->
							</div><!-- .testimonial -->
						</div><!-- .testimonial-wrapper -->
						<?php $i++; ?>
						<?php endwhile; endif; wp_reset_postdata(); ?> 
							</div><!-- .row -->
					</div><!-- .container -->
				</section><!-- #testionials -->

				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #content -->
</div><!-- .page-wrapper -->
<?php get_footer(); ?>