<?php
/*
template name: 公司新闻
*/
?>
<?php
     get_header();
			 
?>			 
					

	

<div id="container">
			<?php
				$myposts = get_posts( $args );
				$num=300; 
				$let="news";
			?>
    
	<?php $wp_query = new WP_Query(array('cat'=>6,'showposts'=>3,'paged'=>$paged)); ?>

    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
	 <?php   
			$newsbox=$let.$num;
	        $num+=1;
	 ?>
	<?php global $more; $more = 0; ?>
	<div id="<?php print $newsbox ;?>">
	<li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </li
	     <?php   $more_link_text="详细了解";
			     the_content( $more_link_text , $strip_teaser, $more_file ); 
		 ?>
	</div>

   <?php //此处定义日志显示格式 ?>
 
  <?php endwhile; ?>


<?php else : // do not delete ?>

     <h3><?php _e("Page not Found", 'ifonder'); ?></h3>

     <p><?php _e("We're sorry, but the page you're looking for isn't here.", 'ifonder'); ?></p>

     <p><?php _e("Try searching for the page you are looking for or using the navigation in the header or sidebar", 'ifonder'); ?></p>

<?php endif; // do not delete ?>
<div class="page_navi"><?php par_pagenavi(9); ?></div>
</div>




	<?php
		get_sidebar();
	?>
					
					
					
									
			 
		
	<?php
		get_footer();
	?>
			
			