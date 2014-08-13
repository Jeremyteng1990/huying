<?php
/*
template name: 首页
*/
?>
<?php
     get_header();
			 
?>			 
					

	

<div id="container">
	
	<?php
	      $myposts = get_posts( $args );
	      $num=300;
		  $artnum = 357;	
          $let="box";
     ?>
    
	<?php $wp_query = new WP_Query(array('cat'=>7,'showposts'=>4,'paged'=>$paged)); ?>

    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
	 <?php   
			$smallbox=$let.$num;
	        $num+=1;
	 ?>
	<?php global $more; $more = 0; ?>
	<div id="<?php print $smallbox ;?>">
	<li>
          <?php the_title(); ?>
    </li
	     <?php   
				$url = site_url();
				$article = "/archives/";
				$url = $url.$article;
				
				
				$more_file = $url.$artnum;
				$artnum += 2;
				$more_link_text = "详细了解";
			    the_content($more_link_text ,$strip_teaser,$more_file);
				
			?>
			<p class="<?php print $smallbox ;?>"><a href ="<?php  echo $more_file; ?>">详细了解</a></p> 
	</div>
	
   <?php //此处定义日志显示格式 ?>
 
  <?php endwhile; ?>


<?php else : // do not delete ?>

     <h3><?php _e("Page not Found", 'ifonder'); ?></h3>

     <p><?php _e("We're sorry, but the page you're looking for isn't here.", 'ifonder'); ?></p>

     <p><?php _e("Try searching for the page you are looking for or using the navigation in the header or sidebar", 'ifonder'); ?></p>

<?php endif; // do not delete ?>

	
		</div>





	<?php
		get_sidebar();
	?>
					
					
					
									
			 
		
	<?php
		get_footer();
	?>
			
			