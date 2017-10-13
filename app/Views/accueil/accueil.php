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
          <h3>Dépannage informatique</h3>
          <p>Windows, Mac et Linux</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= $this->assetUrl('img/mobile-phone-broken.jpg')?>" alt="Second slide">
        <div class="carousel-caption d-none d-md-block title_carousel">
          <h3>Réparation Smartphone & Tablette</h3>
          <p>Iphone et Smartphone Android</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= $this->assetUrl('img/officemedium.jpg')?>" alt="Third slide">
        <div class="carousel-caption d-none d-md-block title_carousel">
          <h3>Développement site web</h3>
          <p>Site vitrine & Solution E-commerce</p>
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
<div class="container">
  <div class="row justify-content-between">
    <div class="col-lg-4 col-sm-6">
      <div class="card h-100">
        <h4 class="card-header">Card Title</h4>
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="card h-100">
        <h4 class="card-header">Card Title</h4>
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="card h-100">
        <h4 class="card-header">Card Title</h4>
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->stop('main_content') ?>