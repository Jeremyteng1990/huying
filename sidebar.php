<div id="sidebar">
<div  id="fwxm"><img src="<?php bloginfo('template_url'); ?>/image/fwxm.jpg" alt=""></div>
<ul>
<?php
    $args=array(
        'cat' => 13,   // 分类ID
        'posts_per_page' => 4, // 显示篇数
    );
    query_posts($args);
	
		 
	
    if(have_posts()) : while (have_posts()) : the_post();
?>

    	
    <li>
		<img src="<?php bloginfo('template_url'); ?>/image/mgnf.png" alt=""> 
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
        <div class="summary">
        <?php if (has_excerpt()) {
                echo $description = get_the_excerpt(); //文章编辑中的摘要
            }else {
                echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 170,"……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
            } ?>
        </div>
		<br/>
    </li>
<?php  endwhile; endif; wp_reset_query(); ?>
</ul>
							
							
</div>