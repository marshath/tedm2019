<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
</div><!-- .header-wrap -->
<div id="main" class="article-wrap">

    <article class="content clearfix">
		<div class="breadcrumb"><p><a href="<?php echo esc_url( home_url() ); ?>">Home</a> / <a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>">What We Do</a><p></div>
		<h2>Websites</h2>
		<p>Congratulations! You have found this secret archive page for our projects :)</p>
		<ul class="project">
            <?php if (have_posts( 'project' )) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<figure><a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<figcaption><h3><?php the_title(); ?></h3><p>View project &raquo;</p></figcaption>
					</a></figure>
				</li>
		    <?php endwhile; ?>
		</ul>
        <?php else : ?>
          <h3 class="center">Not Found</h3>
          <p class="center">Sorry, but you are looking for something that isn't here.</p>
          <?php get_search_form(); ?>
        <?php endif; ?>
	</article> <!-- .content -->
	
<?php get_footer(); ?>