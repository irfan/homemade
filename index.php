<?= get_header(); ?>
<?= get_sidebar(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article <? post_class(); ?>>
	<header>
		<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		<?= the_category(); ?>
		<time class="headerTitle" datetime="<?php the_date('c'); ?>" pubdate><?= get_the_date(); ?> / <?php the_time(); ?></time>
	</header>
	
	<?php the_content(); ?>

	<footer>
		<!-- <?= comments_popup_link('Yorum yapılmamış','1 Yorum','% Yorum','comments-link', 'Bu yazı yoruma kapalı'); ?> -->
		<?php the_tags('<ul class="tags"><li>','</li><li>','</li></ul>'); ?>
	</footer>

</article>


<? endwhile; ?>
<nav id="page-navigation">
	<ul>
		<li><?php posts_nav_link('</li><li id="next-page-link">','Onceki Sayfa','Sonraki Sayfa'); ?></li>
	</ul>
</nav>
<? endif; ?>
<?= get_footer(); ?>


