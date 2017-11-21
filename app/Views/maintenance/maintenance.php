<?php $this->layout('layout', ['title' => 'Alloitech: Dépannage et maintenance informatique en Medoc']) ?>
<?php $this->start('head') ?>
<?php $this->stop('head') ?>
<?php $this->start('main_content') ?>
<h2>Dépannage & Maintenance Informatique</h2>
<div class="row row-info">
	<div class="col-md-6">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/laptop-help.jpg')?>" alt="ordinateur en panne">
	</div>
	<div class="col-md-6">
		<h3 class="my-3">Votre <stong>Ordinateur plante</stong>, rame ou n'est plus aussi performant? </h3>
		<p class="left"> Il existe plusieurs façons de décrire un ordinateur ou périphérique ne fonctionnant pas correctement, en revanche il n'en existe qu'une seule pour résoudre le problème : Faire appel à un <strong>spécialiste informatique</strong>.</p>
		<p class="left">Chez <strong>Alloitech</strong>, nous mettons à votre disposition l'expertise de nos spécialistes afin de trouvé la meilleur solution possible à votre problématique.</p>
		<p class="left">Nos techniciens interviennent sur tout le <strong>Médoc</strong>, à votre domicile ou en atelier après récupération de votre matériel sur le lieux de votre choix. 
		</p>
	</div>
</div>
<div class="row row-info" style="margin-top: 20px;">
	<div class="col-md-6">
		<h3 class="my-3">Nos services</h3>
		<ul class="left">
			<li><i class="fa fa-cog fa-3x" aria-hidden="true">&nbsp;</i>Diagnostics & Interventions immédiates à distance ou directement sur site.</li>
			<li><i class="fa fa-cog fa-3x" aria-hidden="true">&nbsp;</i>Réinstallation, configuration et optimisation de votre pc et de vos applications</li>
			<li><i class="fa fa-cog fa-3x" aria-hidden="true">&nbsp;</i>Suppression de virus, résolution des problèmes d’accès Internet ou au email</li>
			<li><i class="fa fa-cog fa-3x" aria-hidden="true">&nbsp;</i>Optimisation & nettoyage de votrs système</li>
			<li><i class="fa fa-cog fa-3x" aria-hidden="true">&nbsp;</i>Création et assemblage de votre pc sur mesure en fonction de l'utilisation désirée</li>
			<li><i class="fa fa-cog fa-3x" aria-hidden="true">&nbsp;</i>Upgrade Matériel & composant</li>
			<li><i class="fa fa-cog fa-3x" aria-hidden="true">&nbsp;</i>Récupération de données sur disque dur, clef usb endommagé. (Hors passage en salle blanche)</li> 
			<li><i class="fa fa-cog fa-3x" aria-hidden="true">&nbsp;</i>Audit système</li> 
		</ul>
		
	</div>
	<div class="col-md-6">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/repair-computer-1280.jpg')?>" alt="Intervention sur composant">
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