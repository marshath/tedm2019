<?php
/*
Template Name: Contact
*/

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
</div><?php // ------- .header-wrap ------- ?>
<div id="main" class="article-wrap">

	<div class="body-content clearfix" role="main">
	
		<div class="contact-page">
			<h2><span class="services-icon" aria-hidden="true" data-icon="&#xe003;"></span> Contact</h2>
			<?php the_content(); ?>
		</div>

		<?php get_sidebar('blog'); ?>
		
	</div>
	
</div>
	
  <? wp_reset_query(); //Restore global post data
    } ?>
    

<?php endwhile; ?>
<?php get_footer(); ?>