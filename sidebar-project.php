
	<aside class="related-sites clearfix" role="secondary">
		<h2><span class="related-sites-icon" aria-hidden="true" data-icon="&#xe019;"></span> More Sweet Projects...</h2>
		
		<ul class="project">
			<?php query_posts(array('post_type' => 'project')); ?>
			<?php $my4post = array( 'post_type' => 'project', 'posts_per_page' => 4, 'cat' => 'Featured', 'orderby' => 'rand' );
			$projloop = new WP_Query( $my4post ); ?>
			<?php while ( $projloop->have_posts() ) : $projloop->the_post(); ?>
			
	        	<li>
	                <a href="<?php the_permalink(); ?>">
		        		<figure>
		                	<?php the_post_thumbnail(); ?>
		                    <div class="figslider">View project &raquo;</div>
		                </figure>
		                <h3><?php the_title(); ?></h3>
	                </a>
					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( '', 'bonestheme' ) . '</span> ', '<span class="screen-reader-text">,</span> ', '</p>' ); ?>
	            </li>
	            
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
	    </ul>
	    
	</aside> <!-- .related-sites -->