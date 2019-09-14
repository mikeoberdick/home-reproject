<?php /* Template Name: Event Calendar */ ?>

<?php get_header(); ?>

<div id	= "eventCalendar">
	<main id="main" class="site-main" >
		<section id="sectionOne" class = "mt-5 pb-5">
			<div class="container">
				<div class="row mb-5">
					<div class="col-sm-12 text-center mb-3">
						<?php the_field('content'); ?>
					</div><!-- .col-sm-12 -->
					<div class="col-sm-4">
						<div><a class = "event-category maroon-button text-center" href="#">Symposium</a></div>
					</div><!-- .col-sm-4 -->
					<div class="col-sm-4">
						<div><a class = "event-category maroon-button text-center" href="#">Fall Seminar</a></div>
					</div><!-- .col-sm-4 -->
					<div class="col-sm-4">
						<div><a class = "event-category maroon-button text-center" href="#">Webinars</a></div>
					</div><!-- .col-sm-4 -->
				</div><!-- .row -->
				<div class="row mb-5">
					<div class="col-sm-12">
						<h2 class="h4 text-center underlined">UPCOMING EVENTS</h2>
						<?php echo do_shortcode('[eo_fullcalendar]'); ?>
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->
					<?php
					//Get upcoming Events for Listing
					$events = eo_get_events(array(
					     'event_start_after'=>'today',
					     'showpastevents'=>false,//Will be deprecated, but set it to true to play it safe.
					  ));

						if( $events ) {
						    global $post;
						    foreach( $events as $post ) {
						         setup_postdata($post);
						         // vars
								$file = get_field('program_pdf');
								$attachment_id = $file['id'];
								?>
								<div class="row mb-3">
						         <div class="col-sm-11">
							        <a href='<?php the_permalink() ?>'><h2 class = "h5 underlined mb-1"><?php the_title(); ?></h2></a>
									<p class = "mb-2 font-italic">DATE</p>
									<?php the_content(); ?>	
						         </div><!-- .col-sm-11 -->
						         <div class="col-sm-1 d-flex align-items-center">
						         <?php if ( get_field('program_pdf') ) { ?>
						         	<a target = "_blank" href = "<?php echo $file['url']; ?>">
								<?php echo wp_get_attachment_image( $attachment_id); ?>
								</a>
								<?php } ?>	
						         </div><!-- .col-sm-1 -->
						         </div><!-- .row -->
							
						        
						     <?php } //end events call
						    wp_reset_postdata();
						} else {
						    echo 'No Upcoming Events';
						} ?>
			</div><!-- .container -->
		</section><!-- #sectionTwo -->
	</main>
</div><!-- #eventCalendar -->

<?php get_footer(); ?>