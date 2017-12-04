<?php $this->layout('layout', ['title' => 'Alloitech: Réparation smartphone & tablette sur tout le Médoc']) ?>
<?php $this->start('head') ?>
<meta name="description" content="Réparation Smartphone & Tablette Apple et Android sur tout le Médoc à prix cassé, remplacement écran, résolution des problèmes de charge."/>
<?php $this->stop('head') ?>
<?php $this->start('main_content') ?>
<h2>Réparation Smartphone et tablette</h2>
<div class="row row-smartphone animated fadeInLeft">
	<div class="col-lg-12 title"><h3 class="my-3">Votre écran de smartphone est cassé ? votre batterie ne charge plus ?</h3></div>
	<div class="col-lg-6 col-md-12 text-infor">
		<!-- <blockquote class="blockquote left"> -->
		<p class="left-info"><strong>Alloitech</strong> répare également vos <strong>smartphone et tablette Apple</strong> à votre domicile en express. (hors interventions sur puce électronique).</p>
		<p class="left-info">Pour tout autre <strong>Smartphone</strong>, ou intervention nécessitant une immobilisation nous vous en prêterons un (sous réserve de stock disponible).
		</p>
		<p class="left-info">Nos <strong>techniciens</strong> se déplacent sur tout le <strong>Médoc</strong> pour récupérer votre <strong>téléphone ou tablette</strong> à votre domicile, sur votre lieu de travail ou tout autre endroit vous arrangeant.</p>
		<!-- </blockquote> -->
	</div>
	<div class="col-lg-6 col-md-12">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/mobile-phone-broken.jpg')?>" alt="écran d'iphone cassé">
	</div>
</div>
<br><br>
<div class="row row-smartphone animated fadeInRight">
	<div class="col-lg-12 title"><h3 class="my-3">Prestations proposées</h3></div>
	<div class="col-lg-6 col-md-12">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/mobile-phone-1280.jpg')?>" alt="réparation de smartphone">
	</div>
	<div class="col-lg-6 col-md-12">
		<ul class="left smart">
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i><strong>Remplacement d'écran</strong> (<strong>lcd</strong> et/ou <strong>vitre cassé</strong>).</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i><strong>Remplacement de batterie</strong>.</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i><strong>Mise à jour logiciel</strong>.</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Résolution des <strong>problèmes de charge</strong> (<strong>connecteur ou micro-puce de gestion</strong>).</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Résolution des <strong>problèmes de sons</strong>.</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i><strong>Remplacement bouton home</strong>.</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Remplacement <strong>module wi-fi</strong>.</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Problème de <strong>fonctionement du tactile</strong>.</li>
			<li><i class="fa fa-check-square-o fa-2x check" aria-hidden="true">&nbsp;</i>Rétablissement de l'<strong>étanchéité du téléphone</strong> (si équipé).</li>
		</ul>
	</div>
</div>
<div class="column justify-content-center div_smart">
	<div class="col">
		<h5 class="my-3">Votre problème ne figure pas dans cette liste ? <span class="h6">(non exhaustive)</span></h5>
		<p>Pas de panique contactez-nous par téléphone ou via ce formulaire.</p>
	</div>
	<div class="col">
		<a class="btn btn-info btn-primary btn-contact" href="<?=$this->url('contact')?>">Contactez-nous</a><br>
		<h6">Diagnostique et devis gratuit</h6>
	</div>
</div>
<?php $this->stop('main_content') ?>
