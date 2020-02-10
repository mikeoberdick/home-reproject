<?php
/**
 * Template Name: Service Regions
 * @package understrap
**/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="serviceRegions" class = "page-wrapper">
	<div id="content" tabindex="-1">
		<main class="site-main" id="main">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php get_template_part( 'partials/content', 'header' ); ?>
				<div class="entry-content container">
					<section class = "row">
						<div class="col-sm-12">
							<?php $image = get_field('service_region_map'); ?>
							<img class = "mb-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</div><!-- .col-sm-12 -->
					</section><!-- .row -->
					<section class = "row">
						<div class="col-md-6">
							<div id = "starburst">
								<h5><?php the_field('starburst_text'); ?></h5>
							</div><!-- #starburst -->
						</div><!-- .col-md-6 -->
						<div id = "currentRegions" class="col-md-6">
							<h5 class="mb-3 maroon font-weight-bold pb-3">Current Service Regions</h5>
							<p>Twin Cities, MN <a href="/twin-cities-mn">View Zone Map</a></p>
							<p>New Haven, CT <a href="/new-haven-ct">View Zone Map</a></p>
						</div><!-- .col-md-6 -->
					</section><!-- .row -->
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #content -->
</div><!-- .page-wrapper -->
<?php get_footer(); ?>