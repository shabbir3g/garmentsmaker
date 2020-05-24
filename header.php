<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garmentsmaker
 */

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<!-- Basic Meta Tags -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  
	<meta name="description" content="ucorpora blog - Free Business Corporate HTML Template">
	<meta name="keywords" content="ucorpora, ucorpora blog, theme, template, corporate, clean, modern, bootstrap, creative, design">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if (gte IE 9)|!(IE)]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <![endif]--> 

  <!-- Favicon -->
    <?php $favicons_upload = get_field('favicons_upload','options'); 
            if( $favicons_upload): ?>
     <link href="<?php echo $favicons_upload['url']; ?>" rel="icon" type="image/png">
    <?php endif; ?>
 

	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->   
	
	<?php wp_head(); ?>

</head>       
<body <?php body_class(); ?>>
  <!-- Header -->
  <header id="header">
    <div class="container">
      <div class="row t-container">

        <!-- Logo -->
        <div class="span3">
          <div class="logo">


           <?php $logo_upload = get_field('logo_upload','options'); 
            if( $logo_upload): ?>
              <a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>">
                <img src="<?php echo $logo_upload['url']; ?>"  />
              </a>
            <?php endif; ?>

          </div>            
        </div>

        <div class="span9">
          <div class="row space60"></div>
             <nav id="nav" role="navigation">
               	<a href="#nav" title="Show navigation">Show navigation</a>
	            <a href="#" title="Hide navigation">Hide navigation</a>

            
            <?php 

            wp_nav_menu([
              'theme_location'    => 'main-menu',
              'menu_class'      => 'clearfix',
              'fallback_cb'     => 'default_menu',
              'container'       => false,
            ]);


             ?>
	         
          </nav>
         </div> 
      </div> 
       <div class="row space40"></div>
	   
	   
	   <?php if(is_front_page()): ?>
	       <div class="slider1 flexslider">  <!-- Slider -->



            <ul class="slides">

              <?php $slider = get_field('home_slider','options');

              if($slider): 
              foreach($slider as $slides):   ?>
              <li>
    	    	    <img src="<?php echo  $slides['slider_image']['url']; ?>" alt="">
    	    		</li>
    	    		<?php endforeach; endif; ?>
            </ul>

      


          </div>  <!-- Slider End -->
	   <?php endif; ?>
	   
	   
  </div> 
</header><!-- Header End -->


<?php if(!is_front_page()): ?>
<!-- Titlebar
================================================== -->
<section id="titlebar">
	<!-- Container -->

  <?php if(!is_blog()): ?>
	<div class="container">
	
		<div class="eight columns">
       <?php while(have_posts()): the_post(); ?>
			<h3 class="left"><?php the_title(); ?></h3>
       <?php endwhile; ?>
		</div>
		
		<div class="eight columns">
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					 <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <?php while(have_posts()): the_post(); ?>
					   <li><?php the_title(); ?></li>
           <?php endwhile; ?>
				</ul>
			</nav>
		</div>

	</div>

  <?php else: ?>

  <div class="container">
  
    <div class="eight columns">
       
      <h3 class="left">Blogs</h3>
    </div>
    
    <div class="eight columns">
      <nav id="breadcrumbs">
        <ul>
          <li>You are here:</li>
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li>Blogs</li>
        </ul>
      </nav>
    </div>

  </div>

<?php endif; ?>
	<!-- Container / End -->
</section>
<?php endif; ?>
