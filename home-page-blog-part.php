<?php $blog = getBlogSummary(); ?>

<section id="blog">
	<header id="postListHeader">
	<h1><a href="<?= $blog['url']; ?>"><?= $blog['header']; ?></a></h1>
		<p><?= $blog['_aioseop_description']; ?></p>
	</header>
<?php

if ($blog['posts']):
	foreach ($blog['posts'] as $post):
		$id = $post->ID;
		
	$tags = get_the_tags($id);
?>
	<article id="post-<?= $id; ?>">
		<h2><a href="<?= get_permalink($id); ?>"><?= $post->post_title; ?></a></h2>
		<time class="headerTitle" datetime="<?= $post->post_date; ?>" pubdate><?= $post->post_date; ?></time>
		<? if( $tags ): ?>
			<ul class="tags">
				<? foreach($tags as $tag): ?>
					<li><a href="<?= get_tag_link($tag->term_id); ?>"><?= $tag->name; ?></a></li>
				<? endforeach; ?>
			</ul>
		<? endif ?>
	</article>
<?
	endforeach;
	endif;
?>
</section>

