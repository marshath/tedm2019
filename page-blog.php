<?php
/*
Template Name: Blog
*/

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
</div><?php // ------- .header-wrap ------- ?>
<div id="main" class="article-wrap">

	<div class="body-content clearfix" role="main">
	
		<div class="contact-page">
			<?php the_content(); ?>
			<br>
			<a href="http://33degreesds.com/blog/" rel="bookmark" class="secondary-btn">View all blog posts <span class="arrow_btn" aria-hidden="true" data-icon="&#xe018;"></span></a>
			<p>&nbsp;</p>
		</div>
		
		<?php get_sidebar('blog'); ?>

	</div>
	
</div> <?php // ------- .article-wrap ------- ?>

  <? wp_reset_query(); //Restore global post data
    } 
    ?>    

<?php endwhile; ?>
<?php get_footer(); ?>