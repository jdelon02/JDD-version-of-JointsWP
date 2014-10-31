<?php
/*
Template Name: Pinterests Page Template
*/
?>

<?php get_header(); ?>
		<div class="row">
			<div class="large-12 columns">
				<div id="masonryContainer">
					<?php $args = array( 'post_type' => 'Pinterestss', 'posts_per_page' => 13 ); ?>
					<?php $loop = new WP_Query( $args ); 
		  				if ($loop->have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
			
		    		<?php get_template_part(  'partials/content', 'masonry' ); ?>
			
		    		<?php endwhile; ?>	
		    	</div>
			</div>
			<div class="medium-12 columns">
		        <?php if (function_exists('joints_page_navi')) { ?>
		        <?php joints_page_navi(); ?>
		        <?php } else { ?>
		      
		        <nav class="wp-prev-next">
			        <ul class="clearfix">
						<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
					    <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
					</ul>
				</nav>
				<?php } ?>		
				
				<?php else : ?>
					    
    				<?php get_template_part( 'partials/content', 'missing' ); ?>
					
				<?php endif; ?>
			</div>
			<div class="row" id="Pinterest" data-masonry-options='{ "itemSelector": ".masonry-entry" }'>
		
			
			</div> 	
		</div><!-- end #stories -->
		

<?php get_footer(); ?>



