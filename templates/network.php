<?php
/**
 * Template Name: Network
 * @package understrap
**/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<?php 
    global $post;
    $page_slug = $post->post_name;
    $page_title = get_the_title();
?>

<div id="network" class = "page-wrapper">
	<div id="content" tabindex="-1">
		<main class="site-main" id="main">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php get_template_part( 'partials/content', 'header' ); ?>
				<div class="entry-content">
					<?php $hero = get_field('hero'); ?>
					<section id = "hero" class="container-fluid position-relative d-flex align-items-center mb-5" style = "background: url('<?php echo $hero['image']['url']; ?>');">
					<div class="container">
						<div class="row text-center">
							<div class="col-sm-12">
								<?php if ($hero['title']) : ?><h1 class="h3 mb-1"><?php echo $hero['title']; ?></h1><?php endif; ?>
								<?php if ($hero['subtitle']) : ?><h5 class = "mb-5"><?php echo $hero['subtitle']; ?></h5><?php endif; ?>
								<?php if ($hero['content']) : ?><p class = "text-white mb-0"><?php echo $hero['content']; ?></p><?php endif; ?>
							</div><!-- .col-sm-12 -->
						</div><!-- .row -->	
					</div>
				</section><!-- .container-fluid -->
				<?php if ( $page_slug == 'network-owner' || $page_slug == 'network-member' ) : ?>
				<section id = "serviceRegions" class="container mb-5">
					<div class="row mb-5">
						<div class="col-md-6">
							<?php $map = get_field('service_regions_map','option'); ?>
							<img src="<?php echo $map['url']; ?>" alt="<?php echo $map['alt']; ?>">
						</div><!-- .col-md-6 -->
						<div class="col-md-6 d-flex flex-column justify-content-center">
							<h4 class = "green mb-3 font-weight-bold">Our Current Service Regions Are...</h4>
							<a class = "mb-3" href = '/new-haven-ct'><button role = 'button' class = 'btn maroon-button btn-lg'>New Haven, CT</button></a>
							<a href = '/twin-cities-mn'><button role = 'button' class = 'btn maroon-button btn-lg'>Twin Cities, MN</button></a>
						</div><!-- .col-md-6 -->
					</div><!-- .row -->
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href = '/join'><button role = 'button' class = 'btn green-button btn-lg'>Become a <?php echo $page_title; ?></button></a>
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</section><!-- .container -->
			<?php endif; ?>
			<?php if ( $page_slug == 'network-customer' ) : ?>
				<section id = "customerCallout" class="container mb-5">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class = "green"><?php the_field('callout'); ?></p>
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</section><!-- .container -->
			<?php endif; ?>
				<section id = "video" class = "py-5 mb-5">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<?php $video = get_field('video'); ?>
								<div class = "mb-3 d-flex align-items-center">
									<img class = "mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/video.png" alt="video icon">Watch the video to learn more</div>
								<div>VIDEO</div>
							</div><!-- .col-md-6 -->
							<div class="col-md-6 d-flex flex-column justify-content-center">
								<h5 class = "maroon mb-3 font-weight-bold text-uppercase"><?php echo $video['header']; ?></h5>
								<?php if ($video['text_above_bullets']) : ?>
								<p><?php echo $video['text_above_bullets']; ?></p>
								<?php endif; ?>
								<ul class = "list-unstyled mb-3">
								  <?php
								  	$list = $video['bullets'];
								   	$items = explode(PHP_EOL, $list);
								   foreach($items as $item) {
								   echo '<li class = "d-flex"><i class="fa fa-circle" aria-hidden="true"></i>' . $item . '</li>';
								  } ?>
								</ul>
								<?php if ($video['text_below_bullets']) : ?>
								<p><?php echo $video['text_below_bullets']; ?></p>
								<?php endif; ?>
							</div><!-- .col-md-6 -->
						</div><!-- .row -->
					</div><!-- .container -->
				</section><!-- #video -->
				<?php if ( $page_slug == 'network-owner' || $page_slug == 'network-member' ) : ?>
				<section id = "howItWorks" class="container mb-5 pb-5">
					<div class="row">
						<div class="col-md-3">
							<h1 class = "font-weight-bold"><span class = "green">HOW</span><br><span class="maroon">IT</span> <span class="gray">WORKS</span></h1>
						</div><!-- .col-md-3 -->
						<div class="col-md-9 d-flex flex-column">
							<ul class = "list-unstyled mb-3">
							  <?php
							  	$list = get_field('how_it_works');
							   	$items = explode(PHP_EOL, $list);
							   foreach($items as $item) {
							   echo '<li class = "d-flex"><i class="fa fa-circle" aria-hidden="true"></i>' . $item . '</li>';
							  } ?>
							</ul>
						</div><!-- .col-md-9 -->
					</div><!-- .row -->
				</section><!-- .container -->
			<?php endif; ?>
			<section id = "process" class="container mb-5">
					<div class="row">
						<div class="col-sm-12">
							<h5 class = "mb-3 maroon font-weight-bold text-uppercase">THE COLLABORATIVE PROCESS</h5>
							<p class = 'mb-5'>Click on the steps below to learn more.</p>
						</div><!-- .col-sm-12 -->
						<?php $i = 1; ?>
						<?php while( have_rows('process_cards') ): the_row(); 

						// vars
						$front = get_sub_field('front');
						$back = get_sub_field('back');
						?>

						<div class="outer col-md-4 mb-3">
							<span class="number"><?php echo $i; ?></span>
						   <div class="flip-container">
						    <div class="flipper">
						      <div class="front p-3">
						        <p class = "mb-0"><?php echo $front; ?></p>
						      </div>
						      <div class="back p-3">
						         <p class = "mb-0"><?php echo $back; ?></p>
						      </div>
						     </div>
						  </div>
						</div>
						<?php $i++; endwhile; ?>
					</div><!-- .row -->
				</section><!-- .container -->
				<section id = "form" class = "py-5">
					<div class="container">
						<div class="row text-center">
							<div class="col-sm-12">
								<h5 class = "mb-3 font-weight-bold maroon text-uppercase"><?php the_field('form_title'); ?></h5>
								<p class = "mb-3"><?php echo the_field('form_content'); ?></p>
								<?php echo do_shortcode('[ninja_form id=1]'); ?>
							</div><!-- .col-sm-12 -->	
						</div><!-- .row -->
					</div><!-- .container -->
				</section><!-- #form -->
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #content -->
</div><!-- .page-wrapper -->
<?php get_footer(); ?>