<h2>Your Tunning Requests</h2>
<table><tr><th>Name</th><th>Action</th></tr>
<?php  
$args = array( 'post_type' => 'tunning');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();	
							?>

<tr><td><?php the_title(); ?></td><td><a href="<? the_permalink(); ?>">View</a></td></tr>
						
							<?php endwhile; ?>
							</table>	