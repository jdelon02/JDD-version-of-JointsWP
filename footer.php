		
		<footer class="footer row" role="contentinfo clearfix">
			<?php 
				
				$footerLayout;
				
				// If only two columns equal spacing 
				// $footerLayout = 2;
				
				// If three columns equal spacing 
				// $footerLayout = 3;
				
				// If four columns equal spacing 
				// $footerLayout = 4;
				
				// If layout is 50% on left, then two cols 25% each
				// $footerLayout = 5;
				
				// If two cols 25% each, then right column 50%
				// $footerLayout = 6;
				
				// If something else, you are on your own...
				
				// SET FOOTER LAYOUT HERE
				$footerLayout = 4;
				
				switch ($footerLayout)
				{
				case 2:
				  load_template(TEMPLATEPATH . '/footer-two-columns.php');
				  break;
				case 3:
				  load_template(TEMPLATEPATH . '/footer-three-columns.php');
				  break;
				case 4:
				  load_template(TEMPLATEPATH . '/footer-four-columns.php');
				  break;
				case 5:
				  load_template(TEMPLATEPATH . '/footer-fifty-left.php');
				  break;
				case 6:
				  load_template(TEMPLATEPATH . '/footer-fifty-right.php');
				  break;		
				
				default:
				  
				}
				
			?>
				
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->	
		</div>
	
		
		<!-- all js scripts are loaded in library/joints.php -->
		<?php wp_footer(); ?>
	</div>
				
	</body>

</html> <!-- end page -->
