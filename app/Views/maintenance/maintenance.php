<?php $this->layout('layout', ['title' => 'Alloitech: Dépannage et maintenance informatique en Medoc']) ?>
<?php $this->start('head') ?>
<?php $this->stop('head') ?>
<?php $this->start('main_content') ?>
<h2>Dépannage & Maintenance Informatique</h2>
<div class="row row-info animated fadeInLeft">
	<div class="col-md-6">
		<h3 class="my-3">Votre <stong>Ordinateur plante</stong>, rame ou n'est plus aussi performant? </h3>
		<p class="left"> Il existe plusieurs façons de décrire un ordinateur ou périphérique ne fonctionnant pas correctement, en revanche il n'en existe qu'une seule pour résoudre le problème : Faire appel à un <strong>spécialiste informatique</strong>.</p>
		<p class="left">Chez <strong>Alloitech</strong>, nous mettons à votre disposition l'<strong>expertise</strong> de nos <strong>spécialistes</strong> afin de trouvé la meilleur solution possible à votre problématique.</p>
		<p class="left">Nos techniciens interviennent sur tout le <strong>Médoc</strong>, à votre domicile ou en atelier après récupération de votre matériel sur le lieux de votre choix. 
		</p>
	</div>
	<div class="col-md-6">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/laptop-help.jpg')?>" alt="ordinateur en panne">
	</div>
</div>
<div class="row row-info animated fadeInRight" style="margin-top: 20px;">
		<div class="col-md-6">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/repair-computer-1280.jpg')?>" alt="Intervention sur composant">
	</div>
	<div class="col-md-6">
		<h3 class="my-3">Nos services</h3>
		<ul class="left maint">
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Diagnostics & Interventions</strong> immédiates à distance ou directement sur site.</li>
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Réinstallation</strong>, <strong>configuration</strong> et <strong>optimisation</strong> de votre <strong>pc</strong> et de vos <strong>applications</strong></li>
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Suppression de virus</strong>, résolution des <strong>problèmes d’accès Internet</strong> ou au <strong>email</strong></li>
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Optimisation & nettoyage</strong> de votre <strong>système</strong></li>
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i>Création et <strong>assemblage de votre ordinateur</strong> sur mesure en fonction de l'utilisation désirée <strong>(bureautique, multimédia ou gaming)</strong></li>
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Upgrade Matériel & composant</strong></li>
			<li><i class="fa fa-cog fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Récupération de données</strong> sur <strong>disque dur</strong>, <strong>clef usb endommagé</strong>. (Hors passage en salle blanche)</li> 
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