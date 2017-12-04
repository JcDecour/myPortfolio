<?php $this->layout('layout', ['title' => 'Alloitech: Dépannage et Maintenance Informatique sur tout le Médoc à un prix défiant toute concurence !']) ?>
<?php $this->start('head') ?>
<meta name="description" content="Nous dépannons et assurons la Maintenance de votre Matériel Informatique, à domicile ou en atelier après récupération de votre ordinateur sur le Médoc." />
<?php $this->stop('head') ?>
<?php $this->start('main_content') ?>
<h2>Dépannage & Maintenance Informatique</h2>
<div class="row row-info animated fadeInLeft">
	<div class="col-lg-12 title"><h3 class="my-3">Votre <stong>Ordinateur plante</stong>, rame ou n'est plus aussi performant ?</h3></div>
	<div class="col-lg-6 col-md-12 text-infor">
		<p class="left-info"> Il existe plusieurs façons de décrire un <strong>ordinateur</strong> ou <strong>périphérique</strong> ne fonctionnant pas correctement, en revanche il n'en existe qu'une seule pour résoudre le problème : <br>Faire appel à un <strong>spécialiste informatique</strong>.</p>
		<p class="left-info">Chez <strong>Alloitech</strong>, nous mettons à votre disposition l'<strong>expertise</strong> de nos <strong>spécialistes</strong> afin de trouver la meilleur solution possible à votre problématique.</p>
		<p class="left-info">Nos <strong>techniciens informatique</strong> interviennent sur tout le <strong>Médoc</strong>, à votre <strong>domicile ou en atelier</strong> après récupération de votre matériel sur le lieu de votre choix. 
		</p>
	</div>
	<div class="col-lg-6 col-md-12">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/laptop-help.jpg')?>" alt="ordinateur en panne">
	</div>
</div>
<div id="div2-info" class="row row-info animated fadeInRight">
	<div class="col-lg-12 title">
		<h3 class="my-3">Nos services</h3>
	</div>

		<div class="col-lg-6 col-md-12">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/repair-computer-1280.jpg')?>" alt="Intervention sur composant informatique">
	</div>
	
	<div class="col-lg-6 col-md-12">
		<ul class="left maint">
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Diagnostic & intervention</strong> immédiate à distance ou directement sur site</li>
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Réinstallation</strong>, <strong>configuration</strong> et <strong>optimisation</strong> de votre <strong>pc</strong> et de vos <strong>applications</strong></li>
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Suppression de virus</strong>, résolution des <strong>problèmes d’accès Internet</strong> ou aux <strong>emails</strong></li>
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Optimisation & nettoyage</strong> de votre <strong>système</strong></li>
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i>Création et <strong>assemblage de votre ordinateur</strong> sur mesure en fonction de l'utilisation désirée (<strong>bureautique, multimédia ou gaming</strong>)</li>
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Upgrade Matériel & composant</strong></li>
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Récupération de données</strong> sur <strong>disque dur</strong> et <strong>clef usb endommagés</strong>. (Hors passage en salle blanche)</li> 
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Audit système</strong></li>
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Installation Hot-Spot Wi-Fi</strong></li> 
		</ul>
		
	</div>
</div>
<div class="column justify-content-center div_smart">
	<div class="col">
		<h5 class="my-3">Vous rencontrez un problème très spécifique ?</h5>
		<p>Pas de panique, contactez-nous par téléphone ou via ce formulaire</p>
	</div>
	<div class="col">
		<a class="btn btn-info btn-primary btn-contact" href="<?=$this->url('contact')?>">Contactez-nous</a><br>
		<h6">Devis Gratuit</h6>
	</div>
</div>
<?php $this->stop('main_content') ?>
