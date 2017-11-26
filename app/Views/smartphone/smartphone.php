<?php $this->layout('layout', ['title' => 'Réparation smartphone-tablette en Medoc - Alloitech']) ?>
<?php $this->start('head') ?>
<?php $this->stop('head') ?>
<?php $this->start('main_content') ?>
<h2>Réparation Smartphone et tablette</h2>
<div class="row row-smartphone">
	<div class="col-md-6">
		<h3 class="my-3">Votre écran de smartphone est cassé, ou votre batterie ne charge plus ?</h3>
		<!-- <blockquote class="blockquote left"> -->
		<p class="left"><strong>Alloitech</strong> répare également vos <strong>smartphone et tablette</strong> Apple à votre domicile en express. (hors interventions sur puce électronique).</p>
		<p class="left">Pour tout autre <strong>Smartphone</strong>, ou intervention nécessitant une immobilisation nous vous en prêterons un (sous réserve de stock disponible).
		</p>
		<p class="left">Nos techniciens se déplace sur tout le <strong>Médoc</strong> pour récuperer votre téléphone à votre domicile, sur votre lieu de travail ou sur à tout autre endroit vous arrangeant.</p>
		<!-- </blockquote> -->
	</div>
	<div class="col-md-6">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/mobile-phone-broken.jpg')?>" alt="écran d'iphone cassé">
	</div>
</div>
<br><br>
<div class="row row-smartphone">
	<div class="col-md-6">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/mobile-phone-1280.jpg')?>" alt="réparation de smartphone">
	</div>
	<div class="col-md-6">
		<h3 class="my-3">Prestations proposé</h3>
		<ul class="left">
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Remplacement d'écran (lcd et/ou vitre cassé)</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Remplacement de batterie</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Mise à jour logiciel</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Résolution des problèmes de charge (connecteur ou micro-puce de gestion)</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Résolution des problèmes de son</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Remplacement bouton home</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Remplacement module wi-fi</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Problème de fonctionement du tactile...</li>
		</ul>
	</div>
</div>
<div class="column justify-content-center div_smart">
	<div class="col">
		<h5 class="my-3">Votre problème ne figure pas dans cette liste ? <span class="h6">(non exhaustive)</span></h5>
		<p>Pas de panique contactez-nous par téléphone ou via ce formulaire</p>
	</div>
	<div class="col">
		<a class="btn btn-info btn-primary btn-contact" href="<?=$this->url('contact')?>">Nous contactez</a><br>
		<h6">Diagnostique et devis gratuit</h6>
	</div>
</div>
<?php $this->stop('main_content') ?>