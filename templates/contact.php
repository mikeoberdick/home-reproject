<?php
/**
 * Template Name: Contact
 * @package understrap
**/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="contact" class = "page-wrapper">
	<div id="content" tabindex="-1">
		<main class="site-main" id="main">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php get_template_part( 'partials/content', 'header' ); ?>
				<div class="entry-content container">
					<section class = "row">
						<div class="col-md-6">
							<div id="contactBox" class = "pb-5 mb-5">
								<div id="address" class = "mb-3 d-flex align-items-center">
									<i class="fa fa-2x mr-3 fa-map-marker" aria-hidden="true"></i>
									<div>
									<?php the_field('address_line_1', 'option'); ?><br>
									<?php the_field('address_line_2', 'option'); ?>
									</div>
								</div><!-- #address -->
								<div id="phone" class = "mb-3 d-flex align-items-center">
									<i class="fa fa-2x mr-3 fa-phone" aria-hidden="true"></i>
									<?php $phone = preg_replace('/[^0-9]/', '', get_field('phone_number', 'option')); ?>
									<a href="tel:<?php echo $phone ?>">
									  <?php the_field('phone_number', 'option'); ?>
									</a>
								</div><!-- #phone -->
								<div id="email" class = "d-flex align-items-center">
									<i class="fa fa-2x mr-3 fa-envelope" aria-hidden="true"></i>
									<?php the_field('email_address', 'option'); ?>
								</div><!-- #email -->
							</div><!-- #contactBox -->
							<h5 class = "mb-3 font-weight-bold maroon">Or send us a message:</h5>
							<?php echo do_shortcode('[ninja_form id=2]'); ?>
						</div><!-- .col-md-6 -->
						<div class="col-md-6">
							<?php $map = get_field('google_map_image', 'option'); ?>
							<img src="<?php echo $map['url']; ?>" alt="<?php echo $map['alt']; ?>">
						</div><!-- .col-md-6 -->
					</section><!-- .row -->
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #content -->
</div><!-- .page-wrapper -->
<?php get_footer(); ?>