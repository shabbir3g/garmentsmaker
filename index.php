<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package garmentsmaker
 */

get_header(); ?>

	
 <!-- Content -->
  <div id="content">
    <div class="container">
          <div class="row">
            <div class="span12">
            <h3>&nbsp;</h3>
            </div>
            
            <div class="span9">
  


              <?php while(have_posts()): the_post(); ?>
              <!-- Blog Item -->
              <div class="row">
                <div class="span1">
                </div>
                <div class="span8">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          
                  <div class="row">
                    <div class="span8 post-d-info">
                      <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                      <div class="blue-dark">
                      <i class="icon-user"></i> By <?php the_author() ?> <?php the_tags( '<i class="icon-tag"></i>', '|' , $after = '' ); ?>  <i class="icon-comment-alt"></i> <?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments are off for this post') ?>
                      </div>
                      <p>
                       

                         <?php echo wp_trim_words(get_the_content(), 40, false); ?>
                   
                      </p>
                    </div>
          
                  </div>
                </div>
              </div>
              <!-- Blog Item End -->
              <div class="row space40"></div>
              <?php endwhile; ?>





              
              
  
              <div class="row space30"></div>   
  
              <!-- Paging -->      
              <div class="row">

        
              </div> 
              <!-- Paging End -->              
              
              <div class="row space40"></div>   

            </div>
          
          <!-- Side Bar -->  
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <!-- Content End -->

	

<?php get_footer();
