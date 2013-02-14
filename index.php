<?php get_header(); ?>
	<div class="clearfix">
		<section class="main-content">
			<img src="<?php bloginfo('stylesheet_directory');?>/images/grapefruit-closeup.jpg" />
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<section>
					<h1><a href="<?php the_permalink(); ?>" title="Click to read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						<?php the_content(); ?>
                        		<!--<p>We are a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
<p>We also make smoothies on the side.</p>-->
				</section>
            
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</section>
        	<?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>