<?php
	$posts = getRelatedPosts($post);
	if($posts[0]->ID) :
	$post_backup = $post;
?>

<section class="postAttributeSection" id="postSuggestion">
   <h2>Benzer Yazılar</h2>
	<?php 
		foreach ($posts as $post) : ?>
	
	<article>
	<h3><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h3>
		<time class="headerTitle" datetime="<?php the_date('c'); ?>" pubdate><?= get_the_date(); ?></time>
		<?php the_tags('<ul class="tags"><li>','</li><li>','</li></ul>'); ?>
	</article>
	<? endforeach; ?>
</section>
<?php
$post = $post_backup;
unset($post_backup);
endif; ?>
