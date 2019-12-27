	<aside class="services clearfix" role="secondary">
		<?php query_posts(array('showposts' => 3, 'post_parent' => 21, 'post_type' => 'page','post__not_in' => array(1098)) );
			while (have_posts()) {
				the_post(); //vital ?>
				<section class="work-services">
					<h3><span class="services-icon" aria-hidden="true" data-icon="&#<?php echo get_post_meta($post->ID, 'service_icon', true); ?>;"></span> <?php the_title(); ?></h3>
						<figure>
							<div class="services-img"><?php the_post_thumbnail(); ?></div>
							<figcaption>
								<?php echo get_post_meta($post->ID, 'summary', true); ?>
								<p class="services_btn"><a href="<?php the_permalink() ?>" class="secondary-btn"><?php the_title(); ?> <span class="arrow_btn" aria-hidden="true" data-icon="&#xe018;"></span></a></p>
							</figcaption>
						</figure>
				</section>
	        <?php } ?>
	</aside> <!-- .services -->
