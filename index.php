<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php wp_head(); ?>
</head>  
<body>
		<div class="header-area">
			<div class="header-images">
				<img src="<?php header_image(); ?>" alt="">
			</div>
		</div>
		<?php bloginfo('title'); ?>
		<br>
		<?php bloginfo('description'); ?>
		<br>
		<?php bloginfo('url'); ?>
		<br>
		<?php bloginfo('name'); ?>
		<br>
		<?php bloginfo('home'); ?>
		<br>
		<?php bloginfo('admin_email'); ?>
		<br>
		<?php bloginfo('atom_url'); ?>
		<br>
		<?php bloginfo('charset'); ?>
		<br>
		<?php bloginfo('comments_atom_url'); ?>
		<br>
		<?php bloginfo('html_type'); ?>
		<br>
		<?php bloginfo('language'); ?>
		<br>
		<?php bloginfo('stylesheet_directory'); ?>
		<br>
		<?php bloginfo('stylesheet_url'); ?>
		<br>
		<?php bloginfo('template_directory'); ?>
		<br>
		<?php bloginfo('template_url'); ?>
		<br>
		<?php bloginfo('text_direction'); ?>
		<br>
		<?php bloginfo('version'); ?>
		<br>
		<?php bloginfo('wpurl'); ?>
		<br>
		<?php wp_nav_menu(array(
			'theme_location' => 'footer-menu'
		)); ?>

	<?php  wp_footer(); ?>
</body>
</html>