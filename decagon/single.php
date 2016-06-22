<?php 
  get_header(); 
  if (have_posts()): 
  	while (have_posts()): 
?>

<div class="container single white-bg">
    <div class="row">  
        <div class="col-md-11 col-md-offset-1">
		<?php  
			echo '<h1>' . get_the_title() . '</h1>';
		?>
		</div>  
	 	<div class="col-md-7 col-md-offset-1 col-lg-8 col-lg-offset-1">
		<?php
			if (function_exists('breadcrumbs')) breadcrumbs(); 
			the_post();
        	the_content();
			//comments_template(); 
        ?>

		
	    	
	    </div>
	    <div class="col-md-4 col-lg-3">
		<?php if (has_tag( 'article' )) {
			the_post_thumbnail('full', array( 'class' => 'img-responsive img-circle' )); 	
		}
		else {
			the_post_thumbnail('full', array( 'class' => 'img-responsive' )); 	
		};



		if (
				has_tag( 'device' )
				) {
					echo "<div class='fastFeedback'><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#fastFeedback'>Отправить запрос</button>
						  <div class='modal fade' id='fastFeedback' tabindex='-1' role='dialog' aria-labelledby='fastFeedback'>
			  				<div class='modal-dialog' role='document'>
			    				<div class='modal-content'>
			      					<div class='modal-header'>
			        					<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			        					<h1 id='fastFeedbackLabel'>Отправить запрос</h1>
			      					</div>
			      					<div class='modal-body'>"
			        				. do_shortcode( '[contact-form-7 id="403" title="my-feedback"]' )
			        				."</div></div></div></div></div>";
			        }

				?>
									
  				
			
	   	</div>
  	</div><!-- row for post content -->
</div> <!-- container -->
<?php 
		endwhile; 
	endif;
get_footer(); ?>