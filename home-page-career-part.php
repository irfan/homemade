<?php
	$carrierSummary = getCareerSummary();
	$companies = $carrierSummary['companies'];
	$careerHeader = $carrierSummary['header'];
?>

<section id="career">
	<header id="careerHeader">
		<h1><a href="<?= $careerHeader['permalink']; ?>"><?= $careerHeader['title']; ?></a></h1>
		<p><?= $careerHeader['description']; ?></p>
		</header>
	<? foreach ($companies as $company): ?>
	<article class="column">
		<header>
			<h2><a href="<?= $careerHeader['permalink']; ?>#<?= $company[4]; ?>"><?= $company[1]; ?></a></h2>
			<time class="headerTitle" datetime="2010-01-20" pubdate><?= $company['2']; ?></time>
		</header>
		<span class="careerTitle"><?= $company['3']; ?></span>
	</article>
	<? endforeach; ?>
			
</section>
