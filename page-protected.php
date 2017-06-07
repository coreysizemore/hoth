<?php
	
	get_header();
	
	/*
		@package WordPress
		@subpackage hoth
		Template Name: Page - Protected
	*/
	 
?>

<?php get_template_part( 'headers/header', 'page' ); ?>

<?php get_template_part( 'mains/main', 'protected' ); ?>

<?php get_footer(); ?>