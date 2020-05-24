<?php
/**
Template Name: Gallery Page
 */

get_header(); ?>

	
<div id="content">
    <div class="container">

      <div class="row">
        <div class="span12">
          <?php while(have_posts()): the_post(); ?>

             <?php the_content(); ?>
         
        <?php endwhile; ?>
      <div class="row">
        <div class="span12">  
            <!-- portfolio filter -->		
        		<ul id="portfolio-filter">


        			 <li class="active"><a href="#" class="filter" data-filter="*">All</a></li>


             <?php   $cate =  get_terms('port-category'); 
            
               foreach($cate as $cat):  ?>
              <li><a href="#" class="filter" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a></li>
              <?php endforeach; ?>

              
        		</ul>
    
        		<section class="row isotope" id="portfolio-items" style="position: relative; overflow: hidden; height: 1062px;">
              <ul class="portfolio">


                <?php 

                    $portfoliopost = new WP_Query(array(
                    'post_type'         => 'portfolio-post',
                    'posts_per_page'    => -1,
                  ));
                
                while($portfoliopost->have_posts()): $portfoliopost->the_post(); ?>

                  <li>
                  <article class="span3 project" data-tags="<?php $type = get_the_terms(get_the_id(),'port-category'); 
                        
                        foreach( $type as $tp){ 
                        
                        echo  $tp->slug.',';
                        
                        }
                         ?>">     
                    <a href="#">
                      <div class="square-1">
                        <div class="img-container">
                         <?php the_post_thumbnail(); ?>
                          <div class="img-bg-icon"></div>
                        </div>
                        <h3><?php the_title(); ?></h3>
                          More description about photo 
                      </div>
                    </a>
                  </article>
                </li> 
                <?php endwhile; ?>
                
              </ul> 
            </section>   
                          
  <!-- Content End -->
  </div> </div> </div> </div> </div> </div>

	

<?php get_footer();
