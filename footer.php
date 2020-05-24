<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garmentsmaker
 */

?>


<!-- Footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="span5">

         <?php $contact_form = get_field('contact_form','options');

              if($contact_form): ?>
        <h3>Contact Form</h3>
        <div>

        <?php echo $contact_form; ?>         
          
        </div>
        <?php endif; ?>


        </div>
        <div class="span3 offset3">


          <?php $address = get_field('address','options');

              if($address): ?>
          <h3>Address</h3>
          <?php echo  $address; ?>
          
          <br>
           <?php endif; ?>



          <?php $phone_number = get_field('phone_number','options');

            if($phone_number): ?>
          <i class="icon-phone"></i><?php echo $phone_number; ?><br>
          <?php endif; ?>


         <?php $mail_address = get_field('mail_address','options');

            if($mail_address): ?>
          <i class="icon-envelope"></i><a href="mailto:<?php echo $mail_address; ?>"><?php echo $mail_address; ?></a><br>
         <?php endif; ?>

        <?php $website = get_field('website','options');

            if($website): ?>
          <i class="icon-home"></i><a href="<?php echo esc_url($website); ?>"><?php echo $website; ?></a>
         <?php endif; ?>


          
          <div class="row space40"></div>  


              <?php $social_url = get_field('social_url','options');

              if($social_url): 
              foreach($social_url as $social):   ?>

              <a href="<?php echo $social['social_urlssss']; ?>" class="social-network sn2 <?php echo $social['social_platform']; ?>"></a>


            <?php endforeach; endif; ?>

         <!-- <a href="#" class="social-network sn2 behance"></a>
          <a href="#" class="social-network sn2 facebook"></a>
          <a href="#" class="social-network sn2 pinterest"></a>
          <a href="#" class="social-network sn2 flickr"></a>
          <a href="#" class="social-network sn2 dribbble"></a>
          <a href="#" class="social-network sn2 lastfm"></a>
          <a href="#" class="social-network sn2 forrst"></a>
          <a href="#" class="social-network sn2 xing"></a>    --> 


        </div>
      </div>
      
      <div class="row space50"></div>
      <div class="row">
        <div class="span6">
          <div class="logo-footer">
          
            <?php $design_by_text = get_field('design_by_text','options');

            
           if($design_by_text): echo $design_by_text; ?>


               


         <?php endif; ?>
         


          </div>                       
        </div>
        <div class="span6 right">


         <?php $copyright_text = get_field('copyright_text','options');

            if($copyright_text): echo $copyright_text; ?>


           <?php endif; ?>
        </div>
      </div>

    </div>
	
	<?php wp_footer(); ?>
  </footer>
  <!-- Footer End -->

  

</body>
</html>
  