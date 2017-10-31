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
					<h3><strong>Dépannage informatique</strong></h3>
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
	<div class="col div-accueil">
		<div class="card h-100">
			<h4 class="card-header"><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i><span class="card-title">&nbsp;Proximité</span></h4>
			<div class="card-body">
				<p class="card-text">Nous assurons les <strong>dépannage informatique</strong>, <strong>réparation smartphone et tablette</strong> sur tout le <strong>secteur Médoc</strong> et la création de <strong>site web</strong> sur toute la France.</p>
			</div>
			<div class="card-footer">
			</div>
		</div>
	</div>
	<div class="col div-accueil">
		<div class="card h-100">
			<h4 class="card-header"><i class="fa fa-check fa-2x check" aria-hidden="true"></i><span class="card-title">&nbsp;Qualité</span></h4>
			<div class="card-body">
				<p class="card-text">Satisfaire nos clients est une priorité, pour cela nous mettrons tout en oeuvre pour vous fournir le meilleur service possible.</p>
			</div>
			<div class="card-footer">
			</div>
		</div>
	</div>
	<div class="col div-accueil">
		<div class="card h-100">
			<h4 class="card-header"><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i><span class="card-title">&nbsp;Réactivité</span></h4>
			<div class="card-body">
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
			</div>
			<div class="card-footer">
			</div>
		</div>
	</div>
</div>
<!-- info responsive-->
<div id="row-accueil-responsive" class="row justify-content-between row-accueil">
	<div class="col div-accueil">
		<div class="card h-100">
			<h4 class="card-header"><i class="fa fa-desktop fa-2x" aria-hidden="true"></i><span class="card-title">&nbsp;Informatique</span></h4>
			<div class="card-body">
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
			</div>
			<div class="card-footer">
				<a href="<?=$this->url('maintenance')?>" class="btn btn-primary">En savoir plus</a>
			</div>
		</div>
	</div>
	<div class="col div-accueil">
		<div class="card h-100">
			<h4 class="card-header"><i class="fa fa-mobile fa-2x" aria-hidden="true"></i><span class="card-title">&nbsp;Smartphone & tablette</span></h4>
			<div class="card-body">
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
			</div>
			<div class="card-footer">
				<a href="<?=$this->url('smartphone')?>" class="btn btn-primary">En savoir plus</a>
			</div>
		</div>
	</div>
	<div class="col div-accueil">
		<div class="card h-100">
			<h4 class="card-header"><i class="fa fa-code fa-2x" aria-hidden="true"></i><span class="card-title">&nbsp;Créations Web</span></h4>
			<div class="card-body">
				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
			</div>
			<div class="card-footer">
				<a href="<?=$this->url('developpement-web')?>" class="btn btn-primary">En savoir plus</a>
			</div>
		</div>
	</div>
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyFb2FYJ4Q7RB1U7AImIiu-OqtI5yHmXY&callback=initMap"
type="text/javascript"></script>
<?php $this->stop('main_content') ?>