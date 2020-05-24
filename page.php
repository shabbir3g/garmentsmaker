<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package garmentsmaker
 */

get_header(); ?>
<div class="row space40"></div>  
<div id="content">
    <div class="container">
          <div class="row">
            <div class="span12">
	
	<?php while(have_posts()): the_post(); ?>

		
		
		<?php the_content(); ?>
	



	 <?php endwhile; ?>

		</div>
	</div>
</div>
<div class="row space40"></div>  

<?php get_footer();
