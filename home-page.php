<?php
	$home_id=1;
	$home_page = get_page($home_id);
	$home_text = $home_page->post_content;
	
	$home_title = get_post_custom($home_id);
	$home_title = $home_title['alternate_title'][0];
?>

	<section <?php post_class(); ?>>
		<h1><?= $home_title; ?></h1>
		<div id="homeText"><?= $home_text; ?></div>

		<?php 
		  get_template_part('home-page-projects-part');
		  get_template_part('home-page-blog-part');
		  get_template_part('home-page-career-part');
		?>
	</section>


