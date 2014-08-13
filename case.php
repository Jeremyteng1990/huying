<?php
/*
template name: 项目案列
*/
?>
<?php
     get_header();
			 
?>			 
					

	

<div id="container">
						<?php

							global $post;

							$args = array( 'posts_per_page' => 4, 'offset'=> 0, 'category' => 10 );

							$myposts = get_posts( $args );
	   
							foreach( $myposts as $post ) : setup_postdata($post); ?>
	   
	
					
							<li>
								<span><?php the_title(); ?></span>
							</li>
									<?php	the_content();  ?>
						</div>
	<?php endforeach; ?>


</div>





	<?php
		get_sidebar();
	?>
					
					
					
									
			 
		
	<?php
		get_footer();
	?>
			