<?php
	get_header(); 
	get_sidebar();

	if(is_front_page())
		get_template_part('home-page');
	else
		get_template_part('content-page');

get_footer(); 

?>
