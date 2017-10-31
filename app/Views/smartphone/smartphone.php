<?php $this->layout('layout', ['title' => 'Réparation smartphone-tablette en Medoc - Alloitech']) ?>
<?php $this->start('head') ?>
<?php $this->stop('head') ?>
<?php $this->start('main_content') ?>
<h2>Réparation Smartphone et tablette</h2>
<div class="row row-smartphone">
	<div class="col-md-6">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/mobile-phone-broken.jpg')?>" alt="">
	</div>
	<div class="col-md-6">
		<h3 class="my-3">Project Description</h3>
		<blockquote class="blockquote">
			<p class="mb-0">Alloitech répare également vos smartphone et tablette Apple sur place dans un délais d'une heure.</p>
		<p class="mb-0">Pour tout autre Smartphone, en cas d'immobilisation nous vous en prêterons un (sous réserve de stock disponible).
		</p>
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote>
		
	</div>
</div>
<br><br>
<div class="row row-smartphone">
	<div class="col-md-6">
		<h3 class="my-3">Prestations proposé</h3>
		<ul class="left">
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Remplacement d'écran (lcd et/ou vitre cassé)</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Remplacement de batterie</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Mise à jour logiciel</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Résolution des problèmes de charge (connecteur ou micro-puce de gestion)</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Résolution des problème de son</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Remplacement bouton home</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Remplacement module wi-fi</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Problème de fonctionement du tactile...</li>
		</ul>
	</div>
	<div class="col-md-6">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/mobile-phone-1280.jpg')?>" alt="">
	</div>
</div>
<div class="column justify-content-center div_smart">
	<div class="col">
		<h5 class="my-3">Votre problème ne figure pas dans cette liste ? <span class="h6">(non exhaustive)</span></h5>
		<p>Pas de panique contactez-nous par téléphone ou via ce formulaire</p>
	</div>
	<div class="col">
		<a class="btn btn-info btn-primary btn-contact" href="<?=$this->url('contact')?>">Demande d'information</a><br>
		<h6">Diagnostique et devis gratuit</h6>
	</div>
</div>
<?php $this->stop('main_content') ?>