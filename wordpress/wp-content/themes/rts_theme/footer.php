<?php
//  Footer part of this home page
?>	
<div class="end">
  <div class="container">
    <div class="footer" style="height:100px;">
      <div class="row">
        
        <div class="pMenu">
        	<?php echo wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'pMenu_ul', 'depth' => 0 ) ); ?>
            
            <p style="color:#999999;"> © 2011 rtPanel. All Rights Reserved. Designed by rtCamp </p>
        </div>
        
        <div class="footer_logo">
        	<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/Slices/footer-logo.png" style="width:260px; height:75px;" /></a>
        </div>
      
      </div>	
    </div>  <!-- End of header -->
  </div>  <!-- End of container  -->
</div>  <!-- End of end class --> 


</body>
</html>
