<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package starter
 */

get_header(); ?>

<div class="slider_sec">
	<div class="container">
     <div class="row">
    	<div class="slider_img">
		 
           <ul class="slides">
             <li>  <img class="mySlides" src="<?php echo get_template_directory_uri(); ?>/Slices/Slider_img.jpg" style="width:100%; float:left;" /> 
 </li> 
			 <li>  <img class="mySlides" src="<?php echo get_template_directory_uri(); ?>/Slices/Slider_img.jpg" style="width:100%; float:left;" /> 
 </li> 
			 <li>  <img class="mySlides" src="<?php echo get_template_directory_uri(); ?>/Slices/Slider_img.jpg" style="width:100%; float:left;" /> 
 </li> 
			 <li>  <img class="mySlides" src="<?php echo get_template_directory_uri(); ?>/Slices/Slider_img.jpg" style="width:100%; float:left;" /> 
 </li> 
		   </ul>                
       
         	
            <div class="text_block">
            	<p style="font-family:Georgia; font-size:24px; color:#FFF"> Slide headline </p>
                <p style="font-family:Tahoma; font-family:14px; color:#ccc; text-align:justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. Sed gravida placerat eleifend. Suspendisse tincidunt fringilla dictum. Nam ipsum justo, adipiscing euullamcorper ut, hendrerit sit amet velit. Nulla facilisi. </p>
            </div>
            
            <div class="slider_box">
            	<span class="previous" onclick="plusDivs(-1)"> </span>
                	<ol class="carousel-indicators" style="top:35%;">
    					<li class="demo active" onclick="currentDiv(1)"></li>
    					<li class="demo deactive" onclick="currentDiv(2)"></li>
    					<li class="demo deactive" onclick="currentDiv(3)"></li>
                        <li class="demo deactive" onclick="currentDiv(4)"></li>
  					</ol>
                <span class="next" onclick="plusDivs(1)"> </span>
           	</div>
        
        </div>   <!-- End of slider_img -->
	 
     </div>  
	</div>

</div> <!-- End of slider_dec -->

<script>
	var slideIndex = 1;
	showDivs(slideIndex);
	
	function plusDivs(n) {
	  showDivs(slideIndex += n);
	}
	
	function currentDiv(n) {
	  showDivs(slideIndex = n);
	}
	
	function showDivs(n) {
	  var i;
	  var x = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("demo");
	  if (n > x.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = x.length}
	  for (i = 0; i < x.length; i++) {
		 x[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
		 dots[i].className = dots[i].className.replace(" active", " deactive");
	  }
	  x[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className = dots[slideIndex-1].className.replace(" deactive", " active");
	}
</script>


<div class="sec1">
	<div class="container">
	 <div class="row">
	  <div class="s_sec1">
		
        <div class="m_lbox">
        	<?php $path_name = get_template_directory_uri()."/Slices/brown-notch.png";
				  $args = array (
				  			'menu' => 'other_menu'
				  		); ?>
        	<?php echo wp_nav_menu( $args ); ?>
        </div>
        
        <div class="m_rbox">
        	<div class="col-md-4 bx">
            	<img src="<?php echo get_template_directory_uri(); ?>/Slices/img1.jpg" />
                <p class="hd"> Aldus PageMaker including versions of Lorem Ipsum. </p>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean </p> 
            </div>
            <div class="col-md-4 bx">
            	<img src="<?php echo get_template_directory_uri(); ?>/Slices/img2.jpg" />
                <p class="hd"> Many desktop publishing packages and web page  </p>
                <p> It is a long established fact that a reader will be distracted  </p> 
            </div>
            <div class="col-md-4 bx">
            	<img src="<?php echo get_template_directory_uri(); ?>/Slices/img3.jpg" />
                <p class="hd"> Aldus PageMaker including versions of Lorem Ipsum. </p>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean </p> 
            </div>
        </div>
        
       </div> 
	 </div>
	</div>
</div>  <!-- End of sec1 -->



<div class="sec2">
	<div class="container">
	 <div class="row">
   		
        <div class="col-md-3 box box1">
        	<p class="hd"> Latest News </p> 
            <ul>
			  <?php
            	$args = array( 
							'posts_per_page' => 3, 
							'category_name' => 'news'
						);
            	$rand_posts = get_posts( $args );
            	foreach ( $rand_posts as $post ) : 
              		setup_postdata( $post ); ?>
                	<li> <a href="<?php echo the_permalink(); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/Slices/footer-bullet.jpg" /> <?php echo the_title(); ?> </a> </li>
              <?php 
				endforeach; 
            	wp_reset_postdata(); ?>
            </ul>
             
     	</div>
     	<div class="col-md-3 box box2">
          	<p class="hd"> Recent Projects </p>
            <ul>
            	<li> <img src="<?php echo get_template_directory_uri(); ?>/Slices/recent-pro-1.jpg" /> </li>
                <li> <img src="<?php echo get_template_directory_uri(); ?>/Slices/recent-pro-2.jpg" /> </li>
              	<li> <img src="<?php echo get_template_directory_uri(); ?>/Slices/recent-pro-3.jpg" /> </li>
            </ul>
            
     	</div>
        <div class="col-md-3 box box3">
          	<p class="hd"> Stay In touch </p>
            <ul>
            	<li><div id="facebook"> </div><a href="#"> Facebook </a></li>
                <li><div id="twitter"> </div><a href="#"> Twitter </a></li>
                <li><div id="linkedin"> </div><a href="#"> Linked In </a></li>
                <li><div id="rss"> </div><a href="#"> RSS </a></li>
            </ul>
     	</div>
        <div class="col-md-3 box box4">
          	<p class="hd"> Security & Privacy </p>
            <ul>
            	<li><a href="#"> Security </a></li>
                <li><a href="#"> Privacy & Policy </a></li>
                <li><a href="#"> Terms of Service </a></li>
            </ul>
     	</div>
        
	 </div>
	</div>
</div>  <!-- End of sec2 -->

<?php
	
get_footer(); ?>