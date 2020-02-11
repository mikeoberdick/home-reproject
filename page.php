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
						<div class="col-sm-12">
							<?php while ( have_posts() ) : the_post(); ?>
							<?php echo the_content(); ?>
						<?php endwhile; ?>
						</div><!-- .col-sm-12 -->
					</section><!-- .row -->
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #content -->
</div><!-- .page-wrapper -->
<?php get_footer(); ?>