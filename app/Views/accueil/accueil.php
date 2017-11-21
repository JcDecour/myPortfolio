<?php $this->layout('layout', ['title' => 'Jean-Charles Decourtheix']) ?>
<?php $this->start('header_content') ?>
<header>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="max-height: 30% !important;">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="<?= $this->assetUrl('img/maintenance.png')?>" alt="First slide">
				<div class="carousel-caption d-none d-md-block title_carousel">
					<h3><strong>Dépannage Informatique</strong></h3>
					<p>Windows, Mac et Linux</p>
					<a href="<?=$this->url('maintenance')?>" class="btn btn-primary">En savoir plus</a>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="<?= $this->assetUrl('img/mobile-phone.jpg')?>" alt="Second slide">
				<div class="carousel-caption d-none d-md-block title_carousel">
					<h3><strong>Réparation Smartphone & Tablette</strong></h3>
					<p><strong>Iphone</strong> et <strong>Android</strong></p>
					<a href="<?=$this->url('smartphone')?>" class="btn btn-primary">En savoir plus</a>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="<?= $this->assetUrl('img/officemedium.jpg')?>" alt="Third slide">
				<div class="carousel-caption d-none d-md-block title_carousel">
					<h3><strong>Développement site web</strong></h3>
					<p><strong>Site vitrine</strong> & <strong>Solution E-commerce</strong></p>
					<a href="<?=$this->url('developpement-web')?>" class="btn btn-primary">En savoir plus</a>
				</div>
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
</header>
<?php $this->stop('header_content') ?>
<?php $this->start('main_content') ?>
<div id="row-accueil" class="row justify-content-between">
	<div class="col div-accueil animated fadeInLeft">
		<div class="card h-100">
			<h4 class="card-header"><i class="fa fa-map-marker fa-2x map-marker" aria-hidden="true"></i><span class="card-title">&nbsp;Proximité</span></h4>
			<div class="card-body">
				<p class="card-text">Nous assurons les <strong>dépannage informatique</strong>, <strong>réparation smartphone et tablette</strong> sur tout le <strong>Médoc</strong> et création de <strong>site web</strong> sur toute la France.</p>
			</div>
			<div class="card-footer">
			</div>
		</div>
	</div>
	<div class="col div-accueil animated fadeInDown">
		<div class="card h-100">
			<h4 class="card-header"><i class="fa fa-check fa-2x check" aria-hidden="true"></i><span class="card-title">&nbsp;Qualité</span></h4>
			<div class="card-body">
				<p class="card-text"><strong>Satisfaire nos clients</strong> est une priorité, pour cela nous mettrons tout en oeuvre pour vous fournir le <strong>meilleur service</strong> possible.</p>
			</div>
			<div class="card-footer">
			</div>
		</div>
	</div>
	<div class="col div-accueil animated fadeInRight">
		<div class="card h-100">
			<h4 class="card-header"><i class="fa fa-clock-o fa-2x clock" aria-hidden="true"></i><span class="card-title">&nbsp;Réactivité</span></h4>
			<div class="card-body">
				<p class="card-text"><strong>Ordinateurs</strong>, <strong>smartphone et tablette</strong>, tout ces objets sont devenus indispensable à notre quotidien.<br>Notre proximité géographique nous permet<strong>d'intervenir rapidement</strong>, afin de <strong>réparer</strong> votre <strong>équipement multimédia</strong> dans les plus brefs délais.</p>
			</div>
			<div class="card-footer">
			</div>
		</div>
	</div>
</div>
<!-- info responsive-->
<div id="row-accueil-responsive" class="row justify-content-between row-accueil">
	<div class="col div-accueil animated fadeInLeft">
		<div class="card h-100">
			<h4 class="card-header"><i class="fa fa-desktop fa-2x check" aria-hidden="true"></i><span class="card-title"><br>Maintenance Informatique</span></h4>
			<div class="card-body">
				<p class="card-text"><strong>Diagnostics & dépannage</strong> de vos <strong>ordinateurs</strong> et <strong>péripheriques</strong> sur site, à distance ou après enlèvement  sur le lieux de votre choix.</p>
			</div>
			<div class="card-footer">
				<a href="<?=$this->url('maintenance')?>" class="btn btn-primary">En savoir plus</a>
			</div>
		</div>
	</div>
	<div class="col div-accueil animated fadeInRight">
		<div class="card h-100">
			<h4 class="card-header"><i class="fa fa-mobile fa-2x clock" aria-hidden="true"></i><span class="card-title"><br>Smartphone & tablette</span></h4>
			<div class="card-body">
				<p class="card-text">Nous assurons la <strong>réparation</strong> de vos <strong>smartphones & tablettes</strong> sur <strong>Lesparre-médoc</strong>et ces alentours aux <strong>meilleurs prix.</strong></p>
			</div>
			<div class="card-footer">
				<a href="<?=$this->url('smartphone')?>" class="btn btn-primary">En savoir plus</a>
			</div>
		</div>
	</div>
	<div class="col div-accueil animated fadeInLeft">
		<div class="card h-100">
			<h4 class="card-header"><i class="fa fa-code fa-2x map-marker" aria-hidden="true"></i><span class="card-title"><br>Créations Web</span></h4>
			<div class="card-body">
				<p class="card-text">Besoin d'un <strong>site vitrine</strong> ou d'une <strong>solution E-commerce</strong> ?<br>N'attendez plus, créons le votre !</p>
			</div>
			<div class="card-footer">
				<a href="<?=$this->url('developpement-web')?>" class="btn btn-primary">En savoir plus</a>
			</div>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>