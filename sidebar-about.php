
	<aside class="client-quotes clearfix" role="secondary">
		<h3><span class="testimonial-icon" aria-hidden="true" data-icon="&#xe01a;"></span> What My Clients Are Saying...</h3>
		<div class="quotes">
			<?php query_posts(array('post_type'=>'testimonials')); // ------- Display Testimonials ------- ?>
			<?php $my1post = array( 'post_type' => 'testimonials' );
			$qloop = new WP_Query( $my1post ); ?>
			<!-- Cycle through all posts -->
			<?php while ( $qloop->have_posts() ) : $qloop->the_post(); ?>
				<blockquote class="testimonial">
					<?php the_content(); ?>
					<cite><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_client', true ) ); ?>, <a href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_url', true ) ); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_company', true ) ); ?></a></cite></p>
				</blockquote>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>			
		</div>
	</aside> <!-- end .client-quotes -->