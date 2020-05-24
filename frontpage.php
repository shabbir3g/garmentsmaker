<?php
/**
Template Name: Home Page
 */

get_header(); ?>

	
 <!-- Content -->
  <div id="content">
    <div class="container">
       <div class="f-center">

             <?php $why_choose_tl = get_field('why_choose_tl');

              if($why_choose_tl): ?>

              <h2><?php echo  $why_choose_tl; ?></h2>

              <?php endif; ?>
               <?php $why_section_content = get_field('why_section_content');

              if($why_section_content): ?>
                <div class="head-info">
                  <?php echo $why_section_content; ?>
                </div> 

                 <div class="f-hr"></div>
              <?php endif; ?>
       

       </div>
      
      <div class="row space40"></div>
      <div class="row">
        <div class="span12">
          <div class="row">
            <!-- Service Container --> 


              <?php $first_block = get_field('first_block');

                  if($first_block):  ?>
                <div class="span4">
                  <!-- Service Icon --> 
                  <div class="ic-1"><i class="icon-lightbulb"></i></div>
                  <!-- Service Title --> 
                  <div class="title-1"><h4><?php echo $first_block['block_title_first']; ?></h4></div>
                  <!-- Service Content --> 
                  <div class="text-1"> 
                    <?php echo $first_block['block_content_first']; ?>
                  </div>
                </div>
             <?php  endif; ?>


            <!-- Service Container End --> 
             <?php $second_block = get_field('second_block');

                  if($second_block):  ?>
            <div class="span4">
              <div class="ic-1"><i class="icon-resize-small"></i></div>
              <div class="title-1"><h4><?php echo $second_block['block_title_second']; ?></h4></div>
              <div class="text-1">         
               <?php echo $second_block['block_content_second']; ?>
              </div>
            </div>
           <?php  endif; ?>


          <?php $third_block = get_field('third_block');

                  if($third_block):  ?>
            <div class="span4">
              <div class="ic-1"><i class="icon-eye-open"></i></div>
              <div class="title-1"><h4><?php echo $third_block['block_title_third']; ?></h4></div>
              <div class="text-1">
               <?php echo $third_block['block_content_third']; ?>
              </div>
            </div>  
           <?php  endif; ?>




          </div>   
        </div>   
       
        <div class="span12">
          <?php $section_title_const = get_field('section_title_const');
                  if($section_title_const):  ?>
          <h2><?php echo $section_title_const;  ?></h2>

           <?php  endif; ?>
        </div> 
        <div class="span8"> 
        <?php $section_image_const = get_field('section_image_const');
                  if($section_image_const):  ?>       
          <img src="<?php echo $section_image_const['url']; ?>" alt="">
            <?php  endif; ?>
        </div>
        <div class="span4">
          <div class="ic-1"></div>
          <?php $service_title_const = get_field('service_title_const');
                  if($service_title_const):  ?>       
          <div class="title-1"><h4><?php echo $service_title_const; ?>:</h4></div>
           <?php  endif; ?>
          <!-- List -->
          <div class="text-1"> 
            <ul class="list-b">
              <!-- List Items -->

               <?php $services_item = get_field('services_item');
                  if($services_item): 
                  foreach($services_item as $service):  ?>   
              <li><i class="icon-ok"></i> <?php echo $service['single_items_serv']; ?></li>
               <?php endforeach; endif; ?>

            
            </ul>     
          </div>
          <!-- List End -->
        </div>
               
      </div>

      <div class="space40"></div>  
              
      <!-- Our Clients -->
      <div class="row">
        <div class="span12">
          <?php $section_title_clients = get_field('section_title_clients');
                  if($section_title_clients):  ?>
          <h3><?php echo $section_title_clients; ?></h3>
        <?php endif; ?>
        </div>
      </div> 
    
      <div id="our-clients" class="slider2 flexslider">
        <ul class="slides">
          <li>
            <div class="row">


              <?php $clients_logos = get_field('clients_logos');
                  if($clients_logos): 


                  foreach($clients_logos as $cllogos):  ?>   
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
              <?php $clients_logos = get_field('clients_logos');
                  if($clients_logos): 


                  foreach($clients_logos as $cllogos):  ?>   
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
      
      <div class="space50"></div> 
       
    </div>
  </div>
  <!-- Content End -->

	

<?php get_footer();
