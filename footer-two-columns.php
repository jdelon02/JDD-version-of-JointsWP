				<div id="inner-footer" class="row clearfix">
					<!--   	<nav role="navigation">
    						<?php joints_footer_links(); ?> -->
    					<div class="row">
    						<div class="small-6 columns"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer1') ) ?></div>
						<div class="small-6 columns"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer2') ) ?></div>
					</div>
					<!--   </nav> -->
					<!--   	<nav role="navigation">
    						<?php //joints_footer_links(); ?> -->
						<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">
 							<li><?php //if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer1') ) ?></li>
							<li><?php //if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer2') ) ?></li>
						</ul>
    					<!--   </nav> -->
				
				
	               
	                		<div class="large-12 medium-12 columns">		
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
					</div>
				
				</div> <!-- end #inner-footer -->