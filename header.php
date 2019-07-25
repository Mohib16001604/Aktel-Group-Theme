<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php wp_head(); ?>
</head>  
<body <?php body_class(); ?>>
		<div class="header-area">
			<div class="header-images">
				<img src="<?php header_image(); ?>" alt="">
			</div>
		</div>
		<?php wp_nav_menu(array(
			'theme_location' => 'footer-menu'
		)); ?>