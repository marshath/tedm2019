<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
</div><!-- .header-wrap -->
<div id="primary" class="article-wrap">

	<div class="body-content clearfix">

    	<?php get_template_part('breadcrumb'); ?>
	
	    <article class="blog-content" role="main">

			<header class="page-header">
				<h1 class="archive-title">
					<?php if ( is_day() ) :
							printf( __( 'Daily Archives: %s' ), '<span>' . get_the_date() . '</span>' );
						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format' ) ) . '</span>' );
						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format' ) ) . '</span>' );
						else :
							_e( 'Archives' );
						endif;
					?>
				</h1>
			</header>
				
			<?php if (have_posts()) : ?>
	    
	            <?php while (have_posts()) : the_post(); ?>
	    
	                <section class="blog-list-item">
		                <header class="entry-header">
			                <h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		                </header>
	                    <footer>
	                    	<?php get_template_part('inc-author-postmeta'); ?>
	                    </footer>
	                    <figure class="entry-image"><?php the_post_thumbnail(); ?></figure>
	                    <div class="entry-summary"><?php the_excerpt('more &raquo;') ?></div>
	                </section>
	                
	            <?php endwhile; ?>
	    
	            <div class="navigation">

					<?php bones_page_navi(); ?>
					
	            </div>
	    
	        <?php else : ?>
	    
	            <h2 class="center">Not Found</h2>
	            <p class="center">Sorry, but you are looking for something that isn't here.</p>
	            <?php get_search_form(); ?>
	    
	        <?php endif; ?>
	        
		</article> <!-- .blog-content -->
	
	<?php get_sidebar(); ?>
	</div> <!-- .content -->
	
<?php get_footer(); ?>