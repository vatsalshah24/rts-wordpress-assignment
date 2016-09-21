<?php
// The header for our theme.
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.css">

<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

  <div class="container">
    <div class="header" style="height:115px;">
      <div class="row">
      	<div class="logo">
        	<a href="#"> 
            	<?php
				// check to see if the logo exists and add it to the page
				if ( get_theme_mod( 'your_theme_logo' ) ) : ?>

                	<img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
                <?php // add a fallback if the logo doesn't exist
				else : ?>
 
					<img src="<?php echo get_template_directory_uri(); ?>/Slices/footer-logo.png" />
 
				<?php endif; ?>
            </a>
      	</div>
        
        <div class="pMenu">
        	<?php echo wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'pMenu_ul', 'depth' => 0 ) ); ?>
        </div>
      
      </div>	
    </div>  <!-- End of header -->
  </div>  <!-- End of container  -->
         
            
    
	
