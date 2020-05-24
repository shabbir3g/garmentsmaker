<?php
/**
Template Name: Services Page
 */

get_header(); ?>

	
  <!-- Content -->
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="span12">

        <?php $top_content = get_field('top_content');
                  if($top_content):  ?>
        <?php echo $top_content; ?>
        <?php endif; ?>


          <div class="ic-1"></div>

          <?php $page_banner = get_field('page_banner');
                  if($page_banner):  ?>
          <img src="<?php echo $page_banner['url']; ?>" alt="">
            <?php endif; ?>
          

          <?php $service_title_ser = get_field('service_title_ser');

                  if($service_title_ser):  ?>       
          <div class="title-1"><h4><?php echo $service_title_ser; ?>:</h4></div>
           <?php  endif; ?>
           <!-- List -->
          <div class="text-1"> 
            <ul class="list-b">



            <?php $services_item_ser = get_field('services_item_ser');
                  if($services_item_ser): 
                  foreach($services_item_ser as $service):  ?>   
              <li><i class="icon-ok"></i> <?php echo $service['single_items_ser']; ?></li>
               <?php endforeach; endif; ?>



            </ul>     
          </div>
          <!-- List End -->
      <!-- List End -->
      <div class="space20"></div>
      <div class="row">
           
              <?php $first_block_ser = get_field('first_block_ser');

                  if($first_block_ser):  ?>
                <div class="span4">
                  <!-- Service Icon --> 
                  <div class="ic-1"><i class="icon-lightbulb"></i></div>
                  <!-- Service Title --> 
                  <div class="title-1"><h4><?php echo $first_block_ser['block_title_f_ser']; ?></h4></div>
                  <!-- Service Content --> 
                  <div class="text-1"> 
                    <?php echo $first_block_ser['block_content_f_ser']; ?>
                  </div>
                </div>
             <?php  endif; ?>


            <!-- Service Container End --> 
             <?php $second_block_ser = get_field('second_block_ser');

                  if($second_block_ser):  ?>
            <div class="span4">
              <div class="ic-1"><i class="icon-resize-small"></i></div>
              <div class="title-1"><h4><?php echo $second_block_ser['block_title_s_ser']; ?></h4></div>
              <div class="text-1">         
               <?php echo $second_block_ser['block_content_s_ser']; ?>
              </div>
            </div>
           <?php  endif; ?>


          <?php $third_block_ser = get_field('third_block_ser');

                  if($third_block_ser):  ?>
            <div class="span4">
              <div class="ic-1"><i class="icon-eye-open"></i></div>
              <div class="title-1"><h4><?php echo $third_block_ser['block_title_t_ser']; ?></h4></div>
              <div class="text-1">
               <?php echo $third_block_ser['block_content_t_ser']; ?>
              </div>
            </div>  
           <?php  endif; ?>


           
      </div>   
      
      <div class="space30"></div> 
      
      <!-- Typography Row -->

      <?php $we_have_text = get_field('we_have_text');

      $accession = get_field('accession');

         if($we_have_text || $accession):  ?>
      <div class="row t-row">
        <!-- Line -->
        <div class="span12"><hr></div>
        <div class="span9">
          <h2><?php echo $we_have_text; ?></h2>
        </div>
        <div class="span3">
          <!-- Button -->
          <div class="btn btn-blue f-right">
            <!-- Title -->
            <h3><i class="icon-signin hidden-tablet"></i> <?php echo $accession; ?></h3>
          </div>
        </div>
        <div class="space30 visible-phone"></div>
        <!-- Line -->
        <div class="span12"><hr></div>
      </div>
      <!-- Typography Row End-->
      <?php  endif; ?>

      <div class="row">
        <div class="span6">
         
          <!-- Accordion -->
          <div class="accordion" id="accordion2">



           <?php $accordion = get_field('accordion');
                if($accordion): ?>
                   <h3>Accordion</h3>
             <?php    $num = 1; 

             $bam = 1;
                foreach($accordion as $accord):  ?> 

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $num++; ?>">
                  <?php echo $accord['accordion_title']; ?>
                </a>
              </div>
              <div id="collapse<?php echo $bam++; ?>" class="accordion-body collapse">
                <div class="accordion-inner">
                  <?php echo $accord['accordion_content']; ?>
                </div>
              </div>
            </div>
          <?php endforeach; endif; ?>
            

          </div>
          <!-- Accordion End -->
      
        </div>      
        <div class="span6">
          <!-- Tabs -->
          <!-- Tabs -->
           <h3>New Services</h3>
          <div class="tabbable">
            <ul class="nav nav-tabs">
              <?php $tabs_elements_ser = get_field('tabs_elements_ser');
                  if($tabs_elements_ser): ?>
                  
                    <?php 
                  $num = 1; 
                  foreach($tabs_elements_ser as $tabs):  ?>   
              <li><a href="#tab<?php echo $num++; ?>" data-toggle="tab"><?php echo $tabs['tabs_title_serv']; ?></a></li>
            <?php endforeach; endif; ?>



            </ul>
            <div class="tab-content">

              <?php $tabs_elements_ser = get_field('tabs_elements_ser');
                  if($tabs_elements_ser):
                  $num = 1; 
                  foreach($tabs_elements_ser as $tabs):  ?>   


              <div class="tab-pane" id="tab<?php echo $num++; ?>">

                <?php echo $tabs['tabs_content_serv']; ?>
                

                
              </div>
              <?php endforeach;  endif; ?>
              
            </div>
          </div>
          <!-- Tabs End -->

        </div>
      </div>  

      <div class="row space30"></div>  

      <!-- Our Clients -->
      <div class="row">
        <div class="span12">
         <?php $section_title_client_logo = get_field('section_title_client_logo');
                  if($section_title_client_logo):  ?>
          <h3><?php echo $section_title_client_logo; ?></h3>
        <?php endif; ?>
        </div>
      </div> 
    
      <div id="our-clients" class="slider2 flexslider">
       <ul class="slides">
          <li>
            <div class="row">


              <?php $clients_logos_images = get_field('clients_logos_images');
                  if($clients_logos_images): 


                  foreach($clients_logos_images as $cllogos):  ?>   
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
              <?php $clients_logos_images = get_field('clients_logos_images');
                  if($clients_logos_images): 


                  foreach($clients_logos_images as $cllogos):  ?>   
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

      <div class="row space50"></div>  
    </div>
  </div> </div>
  <!-- Content End -->
	

<?php get_footer();
