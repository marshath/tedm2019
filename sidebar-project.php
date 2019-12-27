
	<aside class="related-sites clearfix" role="secondary">
		<h3><span class="related-sites-icon" aria-hidden="true" data-icon="&#xe019;"></span> More Sweet Projects...</h3>
		<ul class="project">
			<?php query_posts(array('post_type' => 'project')); ?>
			<?php $my4post = array( 'post_type' => 'project', 'posts_per_page' => 4, 'cat' => 'Featured', 'orderby' => 'rand' );
			$projloop = new WP_Query( $my4post ); ?>
			<?php while ( $projloop->have_posts() ) : $projloop->the_post(); ?>
	        	<li>
	                <a href="<?php the_permalink(); ?>">
		        		<figure>
		                	<?php the_post_thumbnail(); ?>
		                    <figcaption>View project &raquo;</figcaption>
		                </figure>
		                <h3><?php the_title(); ?></h3>
	                </a>
	            </li>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
	    </ul>
	</aside> <!-- .related-sites -->