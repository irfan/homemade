<!--aside start-->
<div id="wrapper">
<aside id="blogSidebar">

	<section id="aboutAuthor">
		<img src="/wp-content/themes/homemade/img/authors/1.jpg" alt="<?= bloginfo('title'); ?>" />
		<span class="authorName"><?= bloginfo('title'); ?></span>
		<span class="authorTitle"><?= bloginfo('description'); ?></span>
	</section>

	<nav id="categories">
		<?php wp_list_categories('title_li=<h4>Kategoriler</h4>'); ?>
	</nav>

	<nav id="projects">
		<?php wp_list_pages('title_li=<h4>Projects</h4>&child_of=7'); ?>
	</nav>

	<nav id="blogroll">
		<?php wp_list_bookmarks('title_li=<h4>Eşim Dostum</h4>&category=2&categorize=0'); ?>
	</nav>


</aside>

<!--aside end-->

