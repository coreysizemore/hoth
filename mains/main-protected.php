<?php
	
	/*
		@package WordPress
		@subpackage hoth
	*/
	 
?>

<?php if(is_user_logged_in()):?>

<div class="main <?php echo basename(get_permalink()); ?> ">

	<?php if( get_field('default_editor')): ?>
	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
						
					<?php if( get_field('sidebar_selection') == 'right' ): ?>
						
						<div class="col_9 first">
								
							<div class="content">
					
								<?php get_template_part( 'loops/loop', 'page' ); ?>
									
							</div>
								
						</div>
							
						<div class="col_3 last">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
								
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'none' ): ?>
					
						<div class="col_12">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'left' ): ?>
					
						<div class="col_3 first">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
							
						</div>
						
						<div class="col_9 last">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
						
				</div>
				
			</div>
			
		</div>
	
	<?php endif; ?>
	
	<?php
		
		if( get_field('gallery') ):
		
			if( have_rows('gallery_content') ):
			
				echo '<div class="container"><div class="row gutters"><div class="col_12"><div id="gallery">';
						
				while ( have_rows('gallery_content') ) : the_row();
						        
					echo '<div class="gallery_wrapper"><a href="';
						        
					the_sub_field('gallery_image');
					
					echo '" class="fancybox" rel="group"><div class="filter"><span class="icon icon-expand"></span></div><img src="';
					
					the_sub_field('gallery_image');
						
					echo '" alt="gallery image" /></a></div>';
						
				endwhile;
					
				echo '</div></div></div></div>';
							
			else :
				
			endif;
			
		endif;
		
	?>
	
	<?php
		
		if( get_field('accordion') ):
		
			if( have_rows('accordion_content') ):
			
				echo '<div class="container"><div class="row gutters"><div class="col_12"><div id="accordion" class="content">';
						
				while ( have_rows('accordion_content') ) : the_row();
						        
					echo '<h3>';
						        
					the_sub_field('section_heading');
						
					echo '</h3>';
						
					echo '<div>';
						
					the_sub_field('section_content');
						        
					echo '</div>';
						
				endwhile;
					
				echo '</div></div></div></div>';
							
			else :
				
			endif;
			
		endif;
		
	?>

	<?php
		
		if( get_field('tabs') ):
		
			if( have_rows('tabs_content') ):
			
				echo '<div class="container"><div class="row gutters"><div class="col_12"><div id="tabs" class="content">';
					
				echo '<ul>';
						
				while ( have_rows('tabs_content') ) : the_row();
						
					echo '<li><a href="#tabs-';
						
					the_sub_field('section_number');
						
					echo '">';
						        
					the_sub_field('section_heading');
						
					echo '</a></li>';
						
				endwhile;
				
				echo '</ul>';
					
				while ( have_rows('tabs_content') ) : the_row();
						
					echo '<div id="tabs-';
						
					the_sub_field('section_number');
						
					echo '">';
						        
					the_sub_field('section_content');
						
					echo '</div>';
						
				endwhile;
					
				echo '</ul>';
					
				echo '</div></div></div></div>';
							
			else :
				
			endif;
			
		endif;
		
	?>
	
	<?php 
				
		if( get_field('column_selection') == 'one' ):
					
			if( have_rows('one_columns') ):
					
				while ( have_rows('one_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_12"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
		elseif( get_field('column_selection') == 'two' ):
		
			if( have_rows('two_columns') ):
					
				while ( have_rows('two_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_6 first"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_6 last"><div class="content">';
					        
					the_sub_field('column_2');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
		elseif( get_field('column_selection') == 'onethree' ):
		
			if( have_rows('one_three_columns') ):
					
				while ( have_rows('one_three_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_3 first"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_9 last"><div class="content">';
					        
					the_sub_field('column_2');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
		elseif( get_field('column_selection') == 'threeone' ):
		
			if( have_rows('three_one_columns') ):
					
				while ( have_rows('three_one_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_9 first"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_3 last"><div class="content">';
					        
					the_sub_field('column_2');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
		elseif( get_field('column_selection') == 'three' ):
		
			if( have_rows('three_columns') ):
					
				while ( have_rows('three_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_4 first"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_4"><div class="content">';
					        
					the_sub_field('column_2');
					    
					echo '</div></div><div class="col_4 last"><div class="content">';
					        
					the_sub_field('column_3');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
			
		elseif( get_field('column_selection') == 'four' ):
		
			if( have_rows('four_columns') ):
					
				while ( have_rows('four_columns') ) : the_row();
					        
					echo '<div class="column_wrapper"><div class="container"><div class="row gutters"><div class="col_3 first"><div class="content">';
					        
					the_sub_field('column_1');
					        
					echo '</div></div><div class="col_3"><div class="content">';
					        
					the_sub_field('column_2');
					    
					echo '</div></div><div class="col_3"><div class="content">';
					        
					the_sub_field('column_3');
					    
					echo '</div></div><div class="col_3 last"><div class="content">';
					        
					the_sub_field('column_3');
					        
					echo '</div></div></div></div></div>';
					
				endwhile;
						
			else :
					
			endif;
				
		endif; 
			
	?>
	
	<?php if(is_user_logged_in()):?>
	
		<div class="edit_button">
		
			<span class="edit"><?php edit_post_link(); ?></span>
		
		</div>
	
	<?php endif; ?>

</div>

<?php if( get_field('parallax_feature')): ?>

	<div class="parallax parallax-home parallax_default_image" data-stellar-background-ratio="0.15">
			
		<?php
		
			if(get_field('parallax_content'))
			{
					echo '<div class="filter">' . get_field('parallax_content') . '</div>';
			}
											
		?>
		
	</div>

<?php endif; ?>

<?php

	if(get_field('appointment_feature'))
	{
		get_template_part( 'sidebars/sidebar' , 'appointment' );
	}
						
?>

<?php else : ?>

	<div class="main coloredbg">
		
		<div class="container">
			
			<div class="row gutters">
				
				<div class="col_12">
					
					<div class="content please_log_in">
						
						<div class="login_wrapper">
							
							<p>This page is only available to our members, please sign in below or contact us for more information.</p>
						
							<?php
								
								$args = array(
									
								    'redirect' => home_url('members'), 
								    
								    'id_username' => 'user',
								    
								    'id_password' => 'pass',
								    
								   ) 
								   
								;?>
								
							<?php wp_login_form( $args ); ?>
						
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

<?php endif; ?>
	
	