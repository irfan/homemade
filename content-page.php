<?php if (have_posts()) : while (have_posts()) : the_post();?>
<article <?php post_class(); if ($post->post_name == 'cv' ) echo 'id="'.$post->post_name.'"'; ?>>
	<header>
		<h1><?= the_title(); ?></h1>
	</header>
	<?php the_content(); ?>
</article>

<?php endwhile; endif; ?>
