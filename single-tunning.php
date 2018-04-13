<?php
/*Template Name:single-Tunning*/
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<?php while ( have_posts() ) : the_post();
				
				?>
<div id="<?php echo $post_id; ?>" class="post-<?php echo $post_id; ?> tunning type-tunning status-publish has-post-thumbnail hentry">
			<header class="entry-header">
			
			<h1 class="entry-title"><?php the_title(); ?></h1>		</header><!-- .entry-header -->
				<div class="entry-content">
			<p><?php the_content(); ?></p>
					</div><!-- .entry-content -->
		</div>
<div class="rt wow animated slideInDown">
            <div class="col-md-6"> 
			<label for="postTitle"><?php _e('Make: *', 'framework') ?></label>       
			<input type="text" name="make" id="first-name" value="<?php echo get_field( "make", $id ); ?>" readonly Required/>                 </div>    
			<div class="col-md-6">  
			<label for="postTitle"><?php _e('Model: *', 'framework') ?></label>   
			<input type="text" name="model" id="last-name" value="<?php echo get_field( "model", $id ); ?>" readonly required/>           
			</div>		 
			  	<div class="col-md-6">  
			<label for="postTitle"><?php _e('Build: *', 'framework') ?></label>   
			<input type="text" name="build" id="last-name" value="<?php echo get_field( "build", $id ); ?>" readonly required/>           
			</div>	
	<div class="col-md-6">  
			<label for="postTitle"><?php _e('Engine: *', 'framework') ?></label>   
			<input type="text" name="engine" id="last-name" value="<?php echo get_field( "engine", $id ); ?>" readonly required/>           
			</div>	
	<div class="col-md-6">  
			<label for="postTitle"><?php _e('Year: *', 'framework') ?></label>   
			<input type="text" name="year" id="last-name" value="<?php echo get_field( "year", $id ); ?>" readonly required/>           
			</div>	
	<div class="col-md-6">  
			<label for="postTitle"><?php _e('Engine Power (hp): *', 'framework') ?></label>   
			<input type="text" name="enginepower" id="last-name" value="<?php echo get_field( "enginepower", $id ); ?>" readonly required/>           
			</div>
	  <div class="col-md-6">    
			<label for="postContent"><?php _e('Dropdown:', 'framework') ?></label> 
	
			<input type="text" name="vin" id="last-name" value="<?php echo get_field( "drop", $id ); ?>" readonly required/>    
			</div>
           <div class="col-md-6">  
			<label for="postTitle"><?php _e('VIN: *', 'framework') ?></label>   
			<input type="text" name="vin" id="last-name" value="<?php echo get_field( "vin", $id ); ?>" readonly required/>           
			</div> 
            <div class="col-md-6">    
			<label for="postContent"><?php _e('Tuning_level:', 'framework') ?></label> 
		
		    <input type="text" name="vin" id="last-name" value="<?php echo get_field( "tuning_level", $id ); ?>" readonly required/>    
			  <div class="col-md-12">  
			<label for="postContent"><?php _e('Special Requirements: *', 'framework') ?></label>    
			<p><?php the_content(); ?></p> 
            </div>
			
			</div>	
			<div class="col-md-12 bottom manage-top">
			<label for="postContent"><?php _e('ECU file:', 'framework') ?></label>
			</div>
 <div class="col-md-12 bottom manage-top">	
			
			
			<div style="width:25%;float:left;" class="col-md-3">			
			<img style="width:100%" src="<?php echo get_the_post_thumbnail_url(); ?>">
			</div>
			<div style="width:25%;float:left;"class="col-md-3">		
			   
	<?php 
	$image = get_field('first_file');
			?>
      <img style="width:100%" src="<?php echo $image['url']; ?>" alt="">
    </div>
			<div style="width:25%;float:left;" class="col-md-3">		
	<?php 
	$image = get_field('second_file');
			?>
      <img style="width:100%" src="<?php echo $image['url']; ?>" alt="">
    </div>
			<div style="width:25%;float:left;" class="col-md-3">		
			   
	<?php 
	$image = get_field('third_file');
			?>
      <img style="width:100%" src="<?php echo $image['url']; ?>" alt="">
    </div>
            </div>			
          
			
	
			

			
		



		
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
