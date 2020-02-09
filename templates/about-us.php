<?php
/**
 * Template Name: About Us
 * @package understrap
**/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="aboutUs" class = "page-wrapper">
	<div id="content" tabindex="-1">
		<main class="site-main" id="main">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php get_template_part( 'partials/content', 'header' ); ?>
				<div class="entry-content container">
					<section class = "row mb-5">
						<div id = "imageSection" class="col-md-3">
							<?php $image = get_field('image'); ?>
							<img class = "mb-3" src="<?php echo $image['image']['url'] ?>" alt="<?php echo $image['image']['alt'] ?>">
							<h5 class = "mb-1 name"><?php echo $image['name']; ?></h5>
							<p class = "title"><?php echo $image['title']; ?></p>
						</div><!-- .col-md-3 -->
						<div class="col-md-9">
							<?php the_field('content'); ?>
						</div><!-- .col-md-9 -->
					</section><!-- .row -->
					<section id = "ourTeam" class = "row">
						<div class="col-sm-12">
							<h3>Our Team</h3>
							<p>See our Featured Network Owners by selecting one of our <a href="/service-regions">Service Regions</a> to learn more about who works with us today.  It’s a growing list.</p>
						</div><!-- .col-sm-12 -->
					</section><!-- .row -->
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #content -->
</div><!-- .page-wrapper -->
<?php get_footer(); ?>