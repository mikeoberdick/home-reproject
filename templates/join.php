<?php
/**
 * Template Name: Join
 * @package understrap
**/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="join" class = "page-wrapper">
	<div id="content" tabindex="-1">
		<main class="site-main" id="main">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php get_template_part( 'partials/content', 'header' ); ?>
				<div class="entry-content">
					
					<section class = "container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<?php $steps = get_field('steps'); ?>
								<h5 class = "maroon font-weight-bold"><?php echo $steps['header']; ?></h5>
								<p class = "mb-5"><?php echo $steps['steps']; ?></p>
							</div><!-- .col-sm-12 -->
						</div><!-- .row -->
					</section>
					
					<section id = "buckets" class = "py-5">
						<div class="container">
							<div class="row">
							<?php while( have_rows('buckets') ): the_row(); 

							// vars
							$header = get_sub_field('header');
							$content = get_sub_field('content');
							$btn_link = get_sub_field('button_link');
							?>

							<div class="col-md-4">
								<div class="d-flex flex-column bucket-wrapper p-3 text-center">
									<h6 class = "mb-0 maroon font-weight-bold">Become A</h6>
									<h4 class = "mb-3"><?php echo $header ?></h4>
									<div>
									<?php
								   	$items = explode(PHP_EOL, $content);
								   foreach($items as $item) {
								   echo '<p>' . $item . '</p>';
								  	} ?>	
									</div>
									<a class = "mt-auto mb-3" href = '<?php echo $btn_link; ?>'><button role = 'button' class = 'btn grey-button'>Learn More</button></a>
									<a href = '/join'><button role = 'button' class = 'btn green-button'>Join</button></a>
								</div><!-- .content-wrapper -->
							</div><!-- .col-md-4 -->

							<?php endwhile; ?>
							</div><!-- .row -->
						</div><!-- .container -->
					</section><!-- #buckets -->
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #content -->
</div><!-- .page-wrapper -->
<?php get_footer(); ?>