<?php
	$projectsSummary = getProjectsSummary();
	$projectsHeader = $projectsSummary['header'];
	$projectPages = $projectsSummary['pages'];
?>

<section id="codes">
	<header id="codesHeader">
	<h1>
		<a href="<?= $projectsHeader['permalink'] ?>" title="<?= $projectsHeader['title']; ?>"><?= $projectsHeader['custom']['alternate_title'][0]; ?></a>
	</h1>
	<p><?= $projectsHeader['custom']['description'][0]; ?></p>
	</header>
	<? foreach($projectPages as $page): ?>
		
		<?php $data = getProjectInfo($page); ?>
		<article class="column">
			<h2><a href="<?= $data['permalink'] ?>" title="<?= $data['desc']['description'][0]; ?>"><?= apply_filters('the_title', $data['title']); ?></a></h2>
			<p class="headerTitle"><?= $data['desc']['description'][0]; ?></p>
		</article>
	<? endforeach; ?>
</section>


