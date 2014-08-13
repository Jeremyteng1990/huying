<?php  		register_nav_menus( array(
										'header_menu' => '顶部导航菜单',
										'footer_menu' => '底部导航菜单'
									 ) );
?>

<?php
//* HEAD
define('HEADER_IMAGE', '%s/images/banner-white.jpg'); // %s is theme dir uri
define('HEADER_IMAGE_WIDTH', 1480);
define('HEADER_IMAGE_HEIGHT', 200);
define('NO_HEADER_TEXT', true );
define('HEADER_TEXTCOLOR', '');
function admin_header_style() { ?>
<style type="text/css">
#headimg{
background: #fff url(<?php header_image(); ?>) no-repeat 0 0;
color: #333;			
float: left;
margin: 0;
padding: 0;
height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
clear:both;
}
#headimg h1,#desc {
display: none;
}
.wrap {
clear:both;
}
#uploadForm {
margin:0!important;
}
</style>
<?php }
function header_style() { ?>
<style type="text/css">
#banner{
background: #fff url(<?php header_image(); ?>) no-repeat 0 0;
color: #333;
float: left;
margin: 0;
padding: 0;
height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
}
</style>
<?php }
if ( function_exists('add_custom_image_header') ) {
add_custom_image_header('header_style', 'admin_header_style');
}
?>
<?php

if ( ! function_exists( 'simplecatch_custom_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @since Simple Catch 2.7
 */
function simplecatch_custom_header_image() { 

	if ( get_header_image() ) : ?>
    	<div id="headimg">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
       	</div><!-- #headimg -->
	<?php endif;
}
endif; // simplecatch_custom_header_image

?>



<?php

function myScripts() {  
        wp_register_script( 'google',  get_template_directory_uri().'/js/jquery.js' );  
        wp_register_script( 'default', get_template_directory_uri() . '/jquery.js' );  
        wp_register_style( 'default', get_template_directory_uri() . '/style.css' );  
    if ( !is_admin() ) { /** Load Scripts and Style on Website Only */  
        wp_deregister_script( 'jquery' );  
        wp_enqueue_script( 'google' );  
        wp_enqueue_script( 'default' );  
        wp_enqueue_style( 'default' );  
    }  
}  
add_action( 'init', 'myScripts' );


//分页导航
function par_pagenavi($range = 9){
	global $paged, $wp_query;
	if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
	if($max_page > 1){if(!$paged){$paged = 1;}
	if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 返回首页 </a>";}
	previous_posts_link(' 上一页 ');
    if($max_page > $range){
		if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
    elseif($paged >= ($max_page - ceil(($range/2)))){
		for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
		for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
    else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	next_posts_link(' 下一页 ');
    if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 最后一页 </a>";}}
}

  
//disable  google   字体
add_filter('gettext_with_context', 'disable_open_sans', 888, 4 );
function disable_open_sans( $translations, $text, $context, $domain )
{
if ( 'Open Sans font: on or off' == $context && 'on' == $text ) {
$translations = 'off';
}
return $translations;
}



function dw_remove_open_sans() {   
        wp_deregister_style( 'open-sans' );   
        wp_register_style( 'open-sans', false );   
        wp_enqueue_style('open-sans','');   
    }   
add_action( 'init', 'dw_remove_open_sans' );



//
function remove_more_jump_link($link)
{
    $offset = strpos($link, '#more-');

    if ($offset)

    {
        $end = strpos($link, '"',$offset);
    }

    if ($end)
    {
      $link = substr_replace($link, '', $offset, $end-$offset);
    }
    return $link;

}

add_filter('the_content_more_link', 'remove_more_jump_link');
















?>