<?php
/**
 * Template Name: Simple
 * Description: A simple template.
 */


$continuous_slide = ( isset( $atts['slideshow_settings']['continuous_sliding'] ) && '1' == $atts['slideshow_settings']['continuous_sliding'] ) ? 'true' : 'false';

do_action( 'wpmtst_before_view' );
?>
<div class="google-reviews">
	<div class="owl-carousel testimonial-carousel">
		<!--   Start Testimonials -->
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="single-testimonial">
				<div class="testimonials-wrapper">
					<?php wpmtst_the_title( 'h4', 'wpmtst-testimonial-heading testimonial-heading' ); ?>
					<div class="testimonials-blob"></div>
					<div class="testimonials-img">                                    
						<?php wpmtst_the_thumbnail(); ?>
					</div>
					<div class="testimonials-person-info">
						<p><b><?php wpmtst_the_client(); ?></b><br />
						<?php do_action( 'wpmtst_after_testimonial' ,$atts); ?></p>
					</div>
				</div>
			</div>
		<?php endwhile; ?>		
	</div>
</div>
