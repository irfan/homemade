<?php if (have_posts()) : while (have_posts()) : the_post();?>
<article <?php post_class(); ?>>
   <header>
      <h1><a rel="bookmark" href="<?= the_permalink(); ?>" title="<?= the_title(); ?>"><?= the_title(); ?></a></h1>
      <?= the_category(); ?>
      <time class="headerTitle" datetime="<?= the_time("c"); ?>" pubdate><?= the_time(get_option( 'date_format' ) . ' / ' . get_option('time_format')); ?></time>
   </header>
	<?php the_content(); ?>
   <footer>
	<?php the_tags('<ul class="tags"><li>','</li><li>','</li></ul>'); ?>
   </footer>	
	<?php get_template_part('content-related-posts'); ?>
	<?php comments_template( '', true ); ?>

</article>

<?php endwhile; endif; ?>
