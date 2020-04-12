<?php
/*
Template Name: Projects
*/

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
</div><?php // end .header-wrap ?>
<main id="site-content" role="main" class="article-wrap">

	<article class="content clearfix">
		
		<div class="flex-project-container">
		    <div class="flexslider">
		    	<ul class="slides">
			    	
			    	<?php if ( have_rows('project_gallery_images') ) {
						while ( have_rows('project_gallery_images') ) {
							the_row();
							
							$image = get_sub_field('project_image');
							$title = get_sub_field('project_image_text'); ?>
							
							<li><figure><img src="<?php echo esc_url( home_url( '/' ) ); ?>/library/images_projects/'<?php echo $image; ?>.jpg" alt="<?php echo $title; ?>"></figure></li>
						
						<?php } // endwhile ?>
						
					<?php } // endif ?>
					
		    	</ul>
		    </div>
    	</div>
    	
		<h2 class="project-title"><?php the_title(); ?></h2>
		
		<div class="project-desc">
			<?php the_content(); ?>
		</div>
		
	</article> <?php // end .content ?>
	
	<div class="related-wrap">
	
		<?php get_sidebar('project'); ?>
	
	</div> <?php // end .article-wrap ?>
	
</main>
<?php endwhile; ?>
<?php get_footer(); ?>
