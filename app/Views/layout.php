<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?=$this->section('head')?>
    <title><?= $this->e($title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Une description de la page..." />
    <meta name="keywords" content="péniche, écluses, paquebot, crise, décroissance" />
    <meta name="author" content="Jean-Charles Decourtheix" />
    <meta name="copyright" content="© Supercalifragilisticexpialidocious Inc." />
    <link rel="stylesheet" href="<?= $this->assetUrl('css/normalize.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/animate.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/grid.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/reboot.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/styleb1.min.css') ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    </head>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
  </head>
  <body>
    <div class="container">
      <!--  <div class="masthead">
        -->          <div class="row justify-content-between">
          <h3 class="rollIn">Alloitech<small class="text-muted span-layout">BY J-C Decourtheix</small></h3>
          <a href="tel:+33761607494" class="phone-number"><i class="fa fa-phone-square fa-2x" aria-hidden="true"></i><span class="phone-number">&nbsp;0761607494</span></a>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3 justify-content-center">
          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>&nbsp;Menu
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
              <!-- <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="<?=$this->url('accueil')?>">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=$this->url('maintenance')?>">Maintenance informatique</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=$this->url('smartphone')?>">Smartphone et tablette</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=$this->url('developpement-web')?>">Création Site Web</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=$this->url('contact')?>">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- </div> -->
        <!-- section header -->
        <?=$this->section('header_content')?>
        <section>
          <?= $this->section('main_content') ?>
        </section>
      </div>
      <footer class="py-5 bg-dark footer">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-4 col-sm-4">
              <h4 class=""><span class="card-title"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;Informations</span></h4>
              <ul>
                <li></li><a href="<?=$this->url('maintenance')?>" class="light"><strong>Dépannage Informatique St-Vivien-de-Médoc</strong></a></li>
                <li></li><a href="<?=$this->url('smartphone')?>" class="light"><strong>Réparation Smartphone St-Vivien-de-Médoc</strong></a></li>
                <li></li><a href="<?=$this->url('maintenance')?>" class="light"><strong>Dépannage Informatique Lesparre-Médoc</strong></a></li>
                <li></li><a href="<?=$this->url('smartphone')?>" class="light"><strong>Réparation Smartphone Lesparre-Médoc</strong></a></li>
                <li></li><a href="<?=$this->url('maintenance')?>" class="light"><strong>Dépannage Informatique St-Laurent</strong></a></li>
                <li></li><a href="<?=$this->url('smartphone')?>" class="light"><strong>Réparation Smartphone St-Laurent</strong></a></li>
                <li></li><a href="<?=$this->url('maintenance')?>" class="light"><strong>Dépannage Informatique Castelnau-de-Médoc</strong></a></li>
                <li></li><a href="<?=$this->url('smartphone')?>" class="light"><strong>Réparation Smartphone Castelnau-de-Médoc</strong></a></li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-4">
              <h4 class=""><span class="card-title"><i class="fa fa-compass" aria-hidden="true"></i>&nbsp;Zone d'intervention</span></h4>
              <div id="map">
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <h5><span class="card-title"><i class="fa fa-facebook-official fa-2x" aria-hidden="true">&nbsp;Alloitech</i></span></h5><br>
              <h5><span class="card-title"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true">&nbsp; Jean-Charles Decourtheix</i></span></h5><br>
              <h5><span class="card-title"><i class="fa fa-phone fa-2x" aria-hidden="true">&nbsp;0761607494</i></span></h5>
            </div>
          </div>
        </div>
        <br><br><br>
        <p class="m-0 text-center text-white">Copyright © Alloitech 2017</p>
      </footer>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="<?= $this->assetUrl('js/bootjs.min.js') ?>"></script>
      <script type="text/javascript">
      function initMap() {
      // Create a map object and specify the DOM element for display.
      var optionsCarte = {
      CircleColor: '#81BEF7',
      zoom: 9,
      center: {lat: 45.25, lng:  -1.0333},
      mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var maCarte = new google.maps.Map(document.getElementById("map"), optionsCarte);
      var optionsCercle = {
      map: maCarte,
      center: maCarte.getCenter(),
      radius: 35000
      }
      var monCercle = new google.maps.Circle(optionsCercle);
      }
      /*var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 45.3, lng: -0.9333},
      zoom: 10
      });
      
      var maCarte = new google.maps.Map(document.getElementById("EmplacementDeMaCarte"), optionsCarte);
      var optionsCercle = {
      map: map,
      center: map.getCenter(),
      radius: 500
      }
      var monCercle = new google.maps.Circle(optionsCercle);
      }*/
      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHZfYLmxyVV2xmwmF_IrwFlWszQTH8jOM&callback=initMap"
      type="text/javascript">
      </script>
    </body>
  </html>