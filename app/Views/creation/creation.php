<?php $this->layout('layout', ['title' => 'Alloitech: Création de site internet & de site E-Commerce professionel sur le Médoc et la france entière']) ?>
<?php $this->start('head') ?>
<meta name="description" content="Vos créateurs de site internet professionel au meilleur prix, Nous créons vos sites vitrines & E-Commerces sur tout le Médoc et la France entière." />
<?php $this->stop('head') ?>
<?php $this->start('main_content') ?>
<h2>Création de Site Internet</h2>
<div class="row row-create animated fadeInLeft">
	<div class="col-lg-12 title"><h3 class="my-3">Vous manquez de visibilité, ou souhaitez vendre vos produits sur internet ? Ensemble créons votre site Web !</h3></div>
	<div class="col-lg-6 col-md-12 text-infor">
		<p class="left-info">C'est indéniable, avoir une <strong>présence sur le web</strong> est de nos jours indispensable pour se démarquer de la concurence.</p>
		<ul class="left ul-web">
			<li><h5>Quelques chiffres:</h5></li>
			<li>&nbsp;&nbsp;-85% des Français ont accès à <strong>Internet</strong></li>
			<li>&nbsp;&nbsp;-74% y accèdent tous les jours, 95% des 18-24 ans</li>
			<li>&nbsp;&nbsp;-En moyenne, les Français passent 18 heures par semaine sur <strong>Internet</strong></li>
			<li>&nbsp;&nbsp;-Navigation web par support: 48% sur <strong>mobile</strong>, 47% sur <strong>ordinateur</strong>, 5% sur <strong>tablette</strong></li>
			<li class="text-muted"><small>Source:&nbsp;<a href="https://www.blogdumoderateur.com/chiffres-internet/">Blog du Modérateur</a></small></li>
		</ul><br>
		<p class="left-info">L'équipe <strong>Alloitech</strong> mets à votre disposition son savoir faire ainsi que son expertise afin d'accompagné et d'assurer le bon <strong>développement</strong> de votre <strong>site web</strong>, de sa conception jusqu'à sa livraison (<strong>mise en production</strong>)<br>Bien entendu nous assurerons également sa <strong>maintenance</strong> tout au long de sa vie :-)</p>
	</div>
	<div class="col-lg-6 col-md-12">
		<img class="rounded img-fluid" src="<?= $this->assetUrl('img/responsive.png')?>" alt="Développement Web responsive">
	</div>
</div>
<div class="row row-create animated fadeInRight">
	<div class="col-lg-12 title">
		<h3 class="my-3">Nos Compétences</h3>
	</div>
	<div class="col-lg-6 col-md-12">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="<?= $this->assetUrl('img/devirama.jpg')?>" alt="site web devirama.ovh">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="<?= $this->assetUrl('img/luraztia.jpg')?>" alt="site web luraztia.org">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="<?= $this->assetUrl('img/nbclconsulting.jpg')?>" alt="site web nbclconsulting.fr">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	<div class="col-lg-6 col-md-12">
		<ul class="left smart">
			<li><i class="fa fa-code fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Conception</strong> du <strong>cahier des charges</strong> & <strong>gestion de projet.</strong>.</li>
			<li><i class="fa fa-code fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Webmastering</strong> (<strong>Maintenance et mise à jour du site</strong> sur le long terme).</strong></li>
			<li><i class="fa fa-code fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Création</strong>, <strong>adaptation</strong> et <strong>intégration</strong> de votre <strong>charte graphique</strong>.</li>
			<li><i class="fa fa-code fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Nom de domaine</strong>, <strong>Hébergement</strong> et analyse du <strong>référencement</strong>.</li>
			<li><i class="fa fa-code fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Développement mobile first</strong> ou <strong>responsive</strong> (<strong>site adaptable multi-support</strong>).</li>
			<li><i class="fa fa-code fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Optimisation du référencement (SEO)</strong>.</li>
			<li><i class="fa fa-code fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Site vitrine</strong> & <strong>Solution E-Commerce</strong>.</li>
			<li><i class="fa fa-code fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Application Web complexe sur mesure</strong>.</li>
			<li><i class="fa fa-code fa-2x map-marker" aria-hidden="true">&nbsp;</i><strong>Développement Front-end & back-end</strong>.</li>
		</ul>
	</div>
</div>
<div class="column justify-content-center div_smart">
	<div class="col">
		<h5 class="my-3">Vous souhaitez créer votre site ? Ou avez une idée de projet révolutionnaire ?</h5>
		<p>Prenons contact pour en discuter. Contactez-nous par téléphone ou via ce formulaire.</p>
	</div>
	<div class="col">
		<a class="btn btn-info btn-primary btn-contact" href="<?=$this->url('contact')?>">Contactez-nous</a><br>
		<h6">Devis Gratuit</h6>
	</div>
</div>
<?php $this->stop('main_content') ?>