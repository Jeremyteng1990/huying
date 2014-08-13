<?php
/*
template name: 页面
*/
?>
<?php
     get_header();
			 
?>			 
					

	

<div id="container">

<?php

		global $post;

		$args = array( 'posts_per_page' => 2, 'offset'=> 1, 'category' => 7 );

		$myposts = get_posts( $args );

	foreach( $myposts as $post ) : setup_postdata($post); ?>
		<li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
	<?php	the_content();  ?>
	<?php endforeach; ?>

</div>





			<?php
					get_sidebar();
			?>
					
					
					
									
			 
	
	<?php
		get_footer();
	?>
			
			
