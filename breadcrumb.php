<?php //---- Breadcrumb Trail for the website ----//?>
		<div class="crumb clearfix">
	    	<ul>
	    		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
				<li>// <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">Blog</a></li>
	    		<?php if (is_single()) { ?>
		    		<li>// <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li><? } ?><!-- blog post -->
	    		<?php if (is_archive()) { // is this an archive page
	    			if (is_author()) { // if this an author archive then display this ?>
	    				<li>// <?php printf( __( '%s' ), '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '">' . get_the_author() . '</a>' ); ?></li> 
	    			<? } else { // if this is the blog archive then display this
	    				echo '// '; the_category('</li>', '<li>');
	    			} 
	    		}?>
	    	</ul>
    	</div><!-- .crumb -->