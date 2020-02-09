<?php
/**
 * Template Name: FAQ
 * @package understrap
**/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div id="faq" class = "page-wrapper">
	<div id="content" tabindex="-1">
		<main class="site-main" id="main">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php get_template_part( 'partials/content', 'header' ); ?>
				<div class="entry-content container">
					<section class = "row">
						<div id = "accordians" class="col-sm-12">
							<div class="w-100 accordion md-accordion" id="faqAccordion" role="tablist" aria-multiselectable="true">
							<?php $i = 0; ?>
 							<?php while ( have_rows('questions_and_answers') ) : the_row(); ?>
				        	<div class="question">
				        		<div class="card-wrapper mb-3 p-3" role="tab" id="<?php echo 'question-' . $i; ?>">
	      							<a data-toggle="collapse" data-target="<?php echo '#collapse-question-' . $i; ?>" aria-expanded="<?php if ( $i == 0 ) {echo 'true';} else {echo 'false';}; ?>" aria-controls="<?php echo 'collapse-question-' . $i; ?>">
	      								<div class = "d-flex align-items-center">
	        								<h2 class="d-inline h5 mb-0"><?php the_sub_field('question'); ?></h2>
	        								<i class="d-inline fa ml-auto fa-caret-up" aria-hidden="true"></i>	
	      								</div>
      							
	        				<div id="<?php echo 'collapse-question-' . $i; ?>"
	        					class = "<?php if ( $i == 0 ) {echo 'collapse show';} else {echo 'collapse';}; ?>" role="tabpanel" aria-labelledby="<?php echo 'question-' . $i; ?>" data-parent="#faqAccordion">
						      <div class="card-body mt-3">
								<?php the_sub_field('answer'); ?>
						      </div><!-- .card-body -->
	    					</div><!-- .collapse -->
      							</a>
    					</div><!-- card-wrapper -->
    				</div><!-- .question -->
    				<?php $i++ ?>
				<?php endwhile; ?>
					</div><!-- .accordion -->			
						</div><!-- .col-sm-12 -->
					</section><!-- .row -->
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #content -->
</div><!-- .page-wrapper -->
<?php get_footer(); ?>