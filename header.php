<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> 
<head>
	<title><?php wp_title(); ?></title>
<?php wp_head(); ?>
</head>
	
			<body>
			
					<div id="header">
							<div id='logobox'>
											<div id="logopic">
												<a href="<?php echo get_option('home'); ?> "><img src="<?php bloginfo('template_url'); ?>/image/shhy2.jpg" alt=""></a>
											</div>
											<div  id="logoinf">
												<a href="###">业务热线：0755 - 88888888</a>
												<a href="###">| 企业邮箱 </a>
											</div>
					        </div>
									
			
							
							
						
			<?php 
				// simplecatch_headersocialnetworks displays social links given from theme option in header 
				if ( function_exists( 'simplecatch_custom_header_image' ) ) :
					simplecatch_custom_header_image(); 
				endif;
			?>
		
							
						
	<div  id="nav">					
			<?php 
				if(function_exists('wp_nav_menu')) {   
					wp_nav_menu( array( 'theme_location' => 'header_menu' ) ); 
				}
			?>
	</div>

</div>