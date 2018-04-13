<?php
/*Template Name:Tunning*/
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<?php while ( have_posts() ) : the_post();

				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );
				?>
<form action="http://bblperformance.com/action.php" id="myform" method="post" enctype="multipart/form-data" validate>

<div class="rt wow animated slideInDown">
            <div class="col-md-6"> 
			<label for="postTitle"><?php _e('Make: *', 'framework') ?></label>       
			<input type="text" name="make" id="first-name" value="<?php echo get_field( "make", $id ); ?>" Required/>                 </div>    
			<div class="col-md-6">  
			<label for="postTitle"><?php _e('Model: *', 'framework') ?></label>   
			<input type="text" name="model" id="last-name" value="<?php echo get_field( "model", $id ); ?>" required/>           
			</div>		 
			  	<div class="col-md-6">  
			<label for="postTitle"><?php _e('Build: *', 'framework') ?></label>   
			<input type="text" name="build" id="last-name" value="<?php echo get_field( "build", $id ); ?>" required/>           
			</div>	
	<div class="col-md-6">  
			<label for="postTitle"><?php _e('Engine: *', 'framework') ?></label>   
			<input type="text" name="engine" id="last-name" value="<?php echo get_field( "engine", $id ); ?>" required/>           
			</div>	
	<div class="col-md-6">  
			<label for="postTitle"><?php _e('Year: *', 'framework') ?></label>   
			<input type="text" name="year" id="last-name" value="<?php echo get_field( "year", $id ); ?>" required/>           
			</div>	
	<div class="col-md-6">  
			<label for="postTitle"><?php _e('Engine Power (hp): *', 'framework') ?></label>   
			<input type="text" name="enginepower" id="last-name" value="<?php echo get_field( "enginepower", $id ); ?>" required/>           
			</div>
	  <div class="col-md-6">    
			<label for="postContent"><?php _e('Dropdown:', 'framework') ?></label> 
		  <select class="selectpicker" name="drop" Required>
		 <option value="">Select</option>       
			<option value="Naturally Aspirated">Naturally Aspirated</option>   
			<option value="Female">Female</option>     
			<option value="Supercharged">Supercharged</option>      
			<option value="Turbocharged">Turboccharged</option>		
			
			</select>
			</div>
           <div class="col-md-6">  
			<label for="postTitle"><?php _e('VIN: *', 'framework') ?></label>   
			<input type="text" name="vin" id="last-name" value="<?php echo get_field( "vin", $id ); ?>" required/>           
			</div> 
            <div class="col-md-6">    
			<label for="postContent"><?php _e('Tuning_level:', 'framework') ?></label> 
		  <select class="selectpicker" name="tuning_level" Required>
		 <option value="">Select</option>       
			<option value="Level 1">Level 1</option>   
			<option value="Level 2">Level 2</option>     
			<option value="Special Tuning">Special Tuning</option>      
			
			
			</select>
			</div>	
 <div class="col-md-12 bottom manage-top">	
			
			<label for="postContent"><?php _e('Upload ECU file:', 'framework') ?></label>
						
			 <input type="file" name="thumbnail" id="thumbnail" Required>
			
            </div>			
            <div class="col-md-12">  
			<label for="postContent"><?php _e('Special Requirements: *', 'framework') ?></label>    
			<textarea style="    width: 100%;  border: 1px solid #ccc; height: 150px; margin-bottom: 30px;" name="content" id="post-code" required/><?php the_content(); ?></textarea>     
            </div>
			
	
			

	<div class="col-md-12">
			<div class="col-md-6 cat1">	
						
						<input style="float:right;" class="submita" type="submit" name="submit" value="SUBMIT">    
						
			</div>   
</div>			
			</form>



		
<?php
				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );


 get_footer();?>
