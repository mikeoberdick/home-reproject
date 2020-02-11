<?php
/**
 * Template Name: Region
 * @package understrap
**/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="region" class = "page-wrapper">
	<div id="content" tabindex="-1">
		<main class="site-main" id="main">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php get_template_part( 'partials/content', 'header' ); ?>
				<div class="entry-content container">
					<section class = "row">
						<div class="col-md-6">
							<p class = "mb-5"><?php the_field('content'); ?></p>
							<?php if( have_rows('featured_owners') ) : ?>
								<h4 class="maroon font-weight-bold text-uppercase underlined">Featured Network Owners</h4>
							<?php while( have_rows('featured_owners') ): the_row(); 

							// vars
							$company = get_sub_field('company_name');
							$industry = get_sub_field('industry');
							$contact = get_sub_field('contact');
							$website = get_sub_field('website');
							?>
							
							<div class="d-flex justify-content-between align-items-center owner underlined">
								<a class = "maroon" href="<?php echo $website ?>"><u><?php echo $company; ?></u></a>
								<div>
									<p class = "mb-0"><?php echo $industry; ?></p>
									<p class="mb-0">Ask for <?php echo $contact; ?></p>
								</div><!-- .d-flex flex-column -->
							</div><!-- .owner -->
							
							<?php endwhile; endif; ?>
						</div><!-- .col-md-6 -->
						<div class="col-md-6">
							<?php $map = get_field('map'); ?>
							<img class = "mb-3" src="<?php echo $map['url']; ?>" alt="<?php echo $map['alt']; ?>">
						</div><!-- .col-md-6 -->
					</section><!-- .row -->
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #content -->
</div><!-- .page-wrapper -->
<?php get_footer(); ?>