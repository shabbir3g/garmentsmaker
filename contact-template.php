<?php
/**
Template Name: Contact Page
 */

get_header(); ?>

	
  <!-- Content -->
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="span12"> 
         <?php $page_title_get_in = get_field('page_title_get_in');
                  if($page_title_get_in):  ?>   
          <h2><?php echo $page_title_get_in; ?></h2>
          <?php endif; ?>
        </div>        
                
        <div class="span6">
         <h3>Tabs</h3>
          <!-- Tabs -->
          <div class="tabbable">
            <ul class="nav nav-tabs">
              <?php $tabs_elements = get_field('tabs_elements');
                  if($tabs_elements): ?>
                   
                    <?php 
                  $num = 1; 
                  foreach($tabs_elements as $tabs):  ?>   
              <li><a href="#tab<?php echo $num++; ?>" data-toggle="tab"><?php echo $tabs['tabs_title']; ?></a></li>
            <?php endforeach; endif; ?>



            </ul>
            <div class="tab-content">

              <?php $tabs_elements = get_field('tabs_elements');
                  if($tabs_elements):
                  $num = 1; 
                  foreach($tabs_elements as $tabs):  ?>   


              <div class="tab-pane" id="tab<?php echo $num++; ?>">

                <?php echo $tabs['tabs_content']; ?>
                

                
              </div>
              <?php endforeach;  endif; ?>
              
            </div>
          </div>
          <!-- Tabs End -->
        </div>
        <div class="span6">

        <?php $content_title_contact = get_field('content_title_contact');
                  if($content_title_contact):  ?>   

          <h3><?php echo $content_title_contact; ?></h3>

        <?php endif; ?>

          <?php $content_des_cont = get_field('content_des_cont');
                  if($content_des_cont):  echo $content_des_cont; ?>

            <?php endif; ?>


          
        </div>        

        <div class="row space40"></div> 

        <div class="span12">
      <!-- Our Clients -->
      <div class="row">
        <div class="span12">
         <?php $section_title_connnn = get_field('section_title_connnn');
                  if($section_title_connnn):  ?>
          <h3><?php echo $section_title_connnn; ?></h3>
        <?php endif; ?>
        </div>
      </div> 
    
      <div id="our-clients" class="slider2 flexslider">
        <ul class="slides">
          <li>
            <div class="row">


              <?php $clients_logoss = get_field('clients_logoss');
                  if($clients_logoss): 


                  foreach($clients_logoss as $cllogos):  ?>   
              <div class="span2">
                <a href="#" rel="external">
                    <img src="<?php echo $cllogos['url']; ?>" alt="">
                </a>
              </div>
          <?php endforeach; endif; ?>



            </div>  
          </li>
          <li>
            <div class="row">
              <?php $clients_logoss = get_field('clients_logoss');
                  if($clients_logoss): 


                  foreach($clients_logoss as $cllogos):  ?>   
              <div class="span2">
                <a href="#" rel="external">
                    <img src="<?php echo $cllogos['url']; ?>" alt="">
                </a>
              </div>
          <?php endforeach; endif; ?>

            
            </div>  
          </li>
        </ul>
      </div> 
      <!-- Our Clients End -->
        
      </div>
      <div class="row space50"></div> 
    </div>
  </div>
  <!-- Content End -->

	

<?php get_footer();
