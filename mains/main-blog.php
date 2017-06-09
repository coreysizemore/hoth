<?php
	
	/*
		@package WordPress
		@subpackage hoth
	*/
	 
?>

<div class="main coloredbg <?php echo basename(get_permalink()); ?>">
	
	<div class="container">
		
		<div class="row gutters">
			
			<div class="col_12">
				
				<div class="content">
	
					<?php get_template_part( 'loops/loop', 'blog' ); ?>
					
				</div>
				
			</div>
			
		</div>
	
	</div>
	
</div>

<?php get_template_part( 'sidebars/sidebar' , 'blog' ); ?>
	
	