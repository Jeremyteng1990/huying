<?php
/*
template name: 主营业务
*/
?>
<?php
     get_header();
			 
?>			 
					

	

<div id="container">
<?php $wp_query = new WP_Query(array('cat'=>13,'showposts'=>1,'paged'=>$paged)); ?>

<?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>

<?php global $more; $more = 0; ?>
	<li>
          <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?><h2></a>
    </li
	<?php the_content(); ?>

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
			
			