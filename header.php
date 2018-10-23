<html>
	<head>
		<title>Google</title>
		<?php wp_head(); ?>
	</head>
	<?php if( is_front_page() ): 
		$class = array('front-page');
		else:
		$class = array('not-front');	
		endif; 
	?>
<body <?php body_class( $class ); ?>>	
	<?php wp_nav_menu(array('theme_location' => 'first')); ?>