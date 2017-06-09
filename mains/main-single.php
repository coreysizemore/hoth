<?php
	
	/*
		@package WordPress
		@subpackage hoth
	*/
	 
?>

<div class="main">
	
	<div class="container">
		
		<div class="row gutters">
			
			<div class="col_12">
				
				<div class="content">
	
					<?php get_template_part( 'loops/loop', 'single' ); ?>
					
				</div>
				
			</div>
			
		</div>
	
	</div>
	
	<div class="edit_button">

		<span class="edit"><?php edit_post_link(); ?></span>
	
	</div>
	
</div>

	
	