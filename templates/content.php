<?php 

echo 'this is body part'; 
while ( have_posts() ) {
	the_post();
	get_the_title();
	the_content();
} 


?>
