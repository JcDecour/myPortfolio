<?php $this->layout('layout', ['title' => 'Jean-Charles Decourtheix']) ?>
<?php $this->start('head') ?>
<?php $this->stop('head') ?>
<?php $this->start('main_content') ?>
<h2>Création de site web</h2>
<div class="row row-create">
	<div class="col-md-6">
		<h3 class="my-3">Vous manquez de visibilité, ou souhaité vendre vos produit sur internet ? Ensemble créons votre site Web</h3>
		<p>.</p>
		<h3 class="my-3">Project Details</h3>
		<ul>
			<li>Lorem Ipsum</li>
			<li>Dolor Sit Amet</li>
			<li>Consectetur</li>
			<li>Adipiscing Elit</li>
		</ul>
	</div>
	<div class="col-md-6">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/code.jpg')?>" alt="Développement Web">
	</div>
</div>
<div class="row row-create">
	<div class="col-md-6">
		<img class="rounded img-fluid" src="http://placehold.it/750x500" alt="">
	</div>
	<div class="col-md-6">
		<h3 class="my-3">Project Description</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
		<h3 class="my-3">Project Details</h3>
		<ul>
			<li>Lorem Ipsum</li>
			<li>Dolor Sit Amet</li>
			<li>Consectetur</li>
			<li>Adipiscing Elit</li>
		</ul>
	</div>
</div>
<?php $this->stop('main_content') ?>