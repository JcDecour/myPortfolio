<?php $this->layout('layout', ['title' => 'Réparation smartphone-tablette en Medoc - Alloitech']) ?>
<?php $this->start('head') ?>
<?php $this->stop('head') ?>
<?php $this->start('main_content') ?>
<h1>Réparation Smartphone et tablette</h1>
<div class="row">
	<div class="col-md-8">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/mobile-phone-broken.jpg')?>" alt="">
	</div>
	<div class="col-md-4 justify-content-center">
		<h3 class="my-3">Project Description</h3>
		<p>Alloitech répare également vos smartphone et tablette Apple sur place dans un délais d'une heure.</p>
		<p>Pour tout autre Smartphone, en cas d'immobilisation nous vous en prêterons un (sous réserve de stock disponible).
		</p>
		<!-- </div> -->
		<!-- <div class="col-md-6"> -->
		<h3 class="my-3">Prestations proposé</h3>
		<ul>
			<li>Remplacement d'écran (lcd et/ou vitre cassé)</li>
			<li><i class="fa fa-battery-empty" aria-hidden="true"></i>Remplacement de batterie</li>
			<li>Mise à jour logiciel</li>
			<li>Résolution des problèmes de charge (connecteur ou micro-puce de gestion)</li>
			<li>Résolution des problème de son</li>
			<li>Remplacement bouton home</li>
			<li>Remplacement module wi-fi</li>
			<li>Problème de fonctionement du tactile...</li>
		</ul>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-md-8">
		<h5 class="my-3">Votre problème ne figure pas dans cette liste ? <span class="h6">(non exhaustive)</span></h5>
		<p>Pas de panique contactez-nous par téléphone ou via ce formulaire</p>
	</div>
	<div class="col-md-4">
		<a class="btn btn-info btn-lg" href="<?=$this->url('contact')?>">Demande d'information</a><br>
		<h6">Diagnostique et devis gratuit</h6>
	</div>
</div>
<?php $this->stop('main_content') ?>