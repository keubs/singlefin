    <div class="contact" id="contact">
		
        <?php
        $left_column_header = get_field('left_column_header', 'options');
        $left_column = get_field('left_column', 'options');
        $right_column_header = get_field('right_column_header', 'options');
        $right_column = get_field('right_column', 'options');
        ?>

        <div class="container grid grid-pad">
            <!-- <h2>Contact</h2> -->

			<div class="contact-container">
	        <!--     <div class="contact-left">
	                <div class="contact-left-header"><h3><?php echo $left_column_header; ?></h3></div>
	                <div class="contact-left-content"><?php echo $left_column; ?></div>
	            </div>
	
	            <div class="contact-right">
	                <div class="contact-right-header"><h3><?php echo $right_column_header; ?></h3></div>
	                <div class="contact-right-content"><?php echo $right_column; ?></div>
	            </div> -->
	            <div class="col-3">
	                <h2 class="gotham-bold">Contact</h2>
	            </div>
	            <div class="col-4">
	                <div class="contact-left-content"><?php echo $left_column; ?></div>	
	            </div>
	            <div class="col-5">
	                <div class="contact-right-content"><?php echo $right_column; ?></div>
	            </div>
            </div>
        	<div class="item-navigation-top"><a href="#top"></a></div>
        </div>
    </div>

<!--     <div class="footer">
        <div class="container">
            <div class="footer-slogan"><p>Drawing lines since 1991</p></div>

            <div class="footer-waves"></div>
        </div>
    </div> -->

    <script>
	    
	    
	    jQuery(document).ajaxComplete(function(){
		    jQuery(".close-post").click(function(){
				jQuery("#single-post-container").animate({left: "6vw", opacity: 0}, 200, function(){
					jQuery("#single-post-container").empty();
					jQuery("body").removeClass('project-expand');
				});		
				    	    
	        });
		})
	    
		
        jQuery(document).ready(function(){
        	
  
        	/*
        	jQuery.ajaxSetup({cache:false});
        	
	        jQuery(".post-link, .item-navigation-next a").click(function(){

	            
	           var post_link = jQuery(this).attr("href");
				   
	           function loadfirst() {    
		            jQuery('html, body').animate({scrollTop: 0}, 200, function(){
		            	jQuery("body").removeClass('no-project');
		            	jQuery("body").addClass('project-expand');
			            jQuery("#single-post-container").load(post_link, function(){
				            jQuery("#single-post-container").animate({left: "0vw", opacity: 1}, 400);
						});
		            });    
	            }	            
	            
	            
	            
	            
	            function loadagain() {     
		            jQuery('html, body').animate({scrollTop: 0}, 200, function(){
						jQuery("#single-post-container").load(post_link);
		            });
				}
				
				
				if (jQuery("body").hasClass('project-expand')) {
					jQuery(".single-wrapper").css({opacity: 0, left: '100%'});
					setTimeout(loadagain, 100)
				} else {
					setTimeout(loadfirst, 100)	
				}
				

	            
	            
            return false;
            });	
            
            */
   	            
			
			jQuery(window).scroll(function() {    
			    var scroll = jQuery(window).scrollTop();
			
			    if (scroll > 100) {
			        jQuery('.header-image-down').removeClass('bounce');
			    } else {
				    jQuery('.header-image-down').addClass('bounce');
			    }
			    /* 
			    if (scroll > 400) {
			        jQuery('.modal-header').addClass('fixed');
			    } else {
				    jQuery('.modal-header').removeClass('fixed');
			    }
			    */
			    

			    
			});
			
        
        
            jQuery('a[href^="#"]').on('click',function (e) {
                e.preventDefault();

                var target = this.hash;
                var $target = jQuery(target);

                jQuery('html, body').stop().animate({
                    'scrollTop': $target.offset().top
                }, 900, 'swing');
            });

            jQuery('.header-waves').on('click', function() {
                jQuery('.header-mobile').slideToggle();
            });
            
            // Nav bar functionality
            lastpos = jQuery(window).scrollTop();
            lastcount = 0 - lastpos;
            jQuery(window).scroll(function() {
                curpos = jQuery(window).scrollTop();
                lastcount += lastpos - curpos;
                lastpos = curpos
            });
            setInterval(function() {
                if (lastcount > 50 || lastpos <= 50) {
                    jQuery('body').removeClass('shortie');
                    lastcount = 0
                }
                ;if (lastcount < -20) {
                    jQuery('body').addClass('shortie');
                    lastcount = 0
                }
            }, 50)

            // scroll visible
            $(window).load(function(){
            	var $h1 = jQuery('.work-desktop');
            	var testVis = function () {
            	    $h1.each(function () {
            	        if (jQuery(this).visible()) {
            	            jQuery(this).addClass('animated');
            	        } else {
            	            // jQuery(this).removeClass('animated');
            	        }
            	    });
            	};
            	jQuery(window).on('scroll resize', testVis);
            	testVis();
            });
        });
    </script>

</body>

<?php wp_footer(); ?>

</html>