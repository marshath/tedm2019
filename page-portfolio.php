<?php
/*
Template Name: Homepage
*/

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
<?php // -------- Hero Image -------- ?>
    <section class="hero-splash clearfix">
		<figure>
			<figcaption>
				<h1>Designer&nbsp;and Web&nbsp;Developer</h1>
				<h2>Front-end design and development has been my passion for over fifteen years. I have matured with the industry as it has grown into the standards that we all adhere to today.</h2>
			</figcaption>
			<div class="hero-computers"><img src="<?php echo get_template_directory_uri(); ?>/library/images/chart-home.png" /></div>
		</figure>
    </section>

</div> <?php // ------- .header-wrap ------- ?>
<main id="site-content" role="main" class="article-wrap">
    
	<article class="content clearfix">
		<?php the_content(); ?>
		<?php wp_reset_query(); ?>
		
		<ul class="project">
			<?php query_posts(array('post_type'=>'project')); // ------- Display Projects ------- ?>
			<?php $my3post = array( 'post_type' => 'project' );
			$projloop = new WP_Query( $my3post ); ?>
			<?php while ( $projloop->have_posts() ) : $projloop->the_post(); ?>
			
				<li>
				
					<a href="<?php the_permalink(); ?>">
						<figure>
							<?php the_post_thumbnail(); ?>
							<div class="figslider">View details &raquo;</div>
						</figure>
						
						<h3><?php the_title(); ?></h3>
					</a>
					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( '', 'bonestheme' ) . '</span> ', '<span class="screen-reader-text">,</span> ', '</p>' ); ?>
					<?php // the_excerpt() ?>
					
					<?php //edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>

				</li>
				
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>
		
	</article><?php // ------- .content ------- ?>
	
</main>
<?php endwhile; ?>
<?php get_footer(); ?>