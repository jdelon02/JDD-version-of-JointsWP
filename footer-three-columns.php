			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="row clearfix">
				
					<!--   	<nav role="navigation">
    						<?php joints_footer_links(); ?> -->
						<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3">
 							<li><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer1') ) ?></li>
							<li><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer2') ) ?></li>
							<li><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer3') ) ?></li>
						</ul>
    					<!--   </nav> -->
				
				
	               
	                		<div class="large-12 medium-12 columns">		
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.  To use this copyright material permission must be is granted.</p>
					</div>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		</div>
		</div>
				
		<!-- all js scripts are loaded in library/joints.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->
