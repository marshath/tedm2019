<?php
/*
Template Name: Projects
*/

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
</div><!-- .header-wrap -->
<div id="main" class="article-wrap">

	<article class="content clearfix" role="main">
    	
		<h2><?php the_title(); ?></h2>
		<div class="flex-section-container">
		    <div class="flexslider">
		      <ul class="slides">
				<?php $imagesTypes = get_post_meta($post->ID, 'project_image1'); { // displays project images
					foreach ($imagesTypes as $imageType) {
						$fullValue = explode('|', $imageType);
	
						$imgTitle = $fullValue[0];
						$imgLink = $fullValue[1];
	                            
						echo "<li><figure><img src='/library/images_project/$imgLink' alt='$imgTitle' name='$imgTitle'></figure></li>";
					}
				} ?>
		      </ul>
		    </div>
    	</div>
		<div class="project-desc">
			<?php the_content(); ?>
		    <p>&nbsp;</p>
		    <?php get_template_part('inc/inc-services'); ?>
		</div>
	</article> <!-- .content -->
	
</div> <!-- .article-wrap -->
<div class="related-wrap">

	<?php get_sidebar('project'); ?>
<?php // div ends in footer ?>
<?php endwhile; ?>
<?php get_footer(); ?>
