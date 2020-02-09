<?php
/**
 * Template Name: Homepage
 * @package understrap
**/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="homepage" class = "page-wrapper">
	<div id="content" tabindex="-1">
		<main class="site-main" id="main">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php $hero = get_field('hero'); ?>
				<section id = "hero" class="container-fluid position-relative d-flex align-items-center" style = "background: url('<?php echo $hero['image']['url']; ?>');">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-7">
								<p class = "text-white mb-0"><?php echo $hero['content']; ?></p>
							</div><!-- .col-sm-12 -->
						</div><!-- .row -->	
					</div>
				</section><!-- .container-fluid -->

				<section id = "bucketsText" class = "container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class = "py-4 mb-0"><?php the_field('buckets_text'); ?></p>
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</section>

				<section id = "buckets" class = "py-5">
					<div class="container">
						<div class="row">
							<?php while( have_rows('buckets') ): the_row(); 

							// vars
							$title = get_sub_field('title');
							$image = get_sub_field('image');
							$content = get_sub_field('content');
							$btn_text = get_sub_field('button_text');
							$btn_link = get_sub_field('button_link');
							?>

							<div class="col-md-4">
								<div class="d-flex flex-column bucket-wrapper p-3 text-center">
									<h5 class = "mb-3"><?php echo $title; ?></h5>
									<img class = "mb-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
									<p><?php echo $content ?></p>
									<a class = "mt-auto" href = '<?php echo $btn_link; ?>/'><button role = 'button' class = 'btn green-button'><?php echo $btn_text; ?></button></a>
								</div><!-- .content-wrapper -->
							</div><!-- .col-md-4 -->

							<?php endwhile; ?>
						</div><!-- .row -->
					</div><!-- .container -->
				</section><!-- #buckets -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #content -->
</div><!-- .page-wrapper -->
<?php get_footer(); ?>