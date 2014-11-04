			<div id="inner-footer" class="row clearfix">
				
					<!--   	<nav role="navigation">
    						<?php joints_footer_links(); ?> -->
    					<div class="row">
    						<div class="small-3 columns"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer1') ) ?></div>
							<div class="small-3 columns"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer2') ) ?></div>
							<div class="small-6 columns"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer3') ) ?></div>
						</div>
					<!--   </nav> -->
				
				
	               
	                		<div class="large-12 medium-12 columns">		
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
					</div>
				
				</div> <!-- end #inner-footer -->