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
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
      <footer>
        <div class="footer" id="footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
                <h3><span class="card-title"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;Informations</span></h3>
                <ul class="footer-link">
                <li></li><a href="<?=$this->url('maintenance')?>" class="light"><strong>Dépannage Informatique St-Vivien-de-Médoc</strong></a></li>
                <li></li><a href="<?=$this->url('smartphone')?>" class="light"><strong>Réparation Smartphone St-Vivien-de-Médoc</strong></a></li>
                <li></li><a href="<?=$this->url('maintenance')?>" class="light"><strong>Dépannage Informatique Lesparre-Médoc</strong></a></li>
                <li></li><a href="<?=$this->url('smartphone')?>" class="light"><strong>Réparation Smartphone Lesparre-Médoc</strong></a></li>
                <li></li><a href="<?=$this->url('maintenance')?>" class="light"><strong>Dépannage Informatique Pauillac</strong></a></li>
                <li></li><a href="<?=$this->url('smartphone')?>" class="light"><strong>Réparation Smartphone Pauillac</strong></a></li>
                <li></li><a href="<?=$this->url('maintenance')?>" class="light"><strong>Dépannage Informatique St-Laurent</strong></a></li>
                <li></li><a href="<?=$this->url('smartphone')?>" class="light"><strong>Réparation Smartphone St-Laurent</strong></a></li>
                <li></li><a href="<?=$this->url('maintenance')?>" class="light"><strong>Dépannage Informatique Castelnau-de-Médoc</strong></a></li>
                <li></li><a href="<?=$this->url('smartphone')?>" class="light"><strong>Réparation Smartphone Castelnau-de-Médoc</strong></a></li>
              </ul>
              </div>
              <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12">
                <h3><span class="card-title"><i class="fa fa-compass" aria-hidden="true"></i>&nbsp;Zone d'intervention</span></h3>
                <div id="map">
              </div>
              </div>
              <div class="col-lg-4  col-md-4 col-sm-12 col-xs-12 ">
                <h3><span class="card-title">Alloitech<small class="text-muted span-layout">BY J-C Decourtheix</small></span></h3>
                <ul class="social">
                  <li><a href="#"><i class=" fa fa-facebook fa-2x"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
                  <li><a href="#"><i class="fa fa-phone fa-2x"></i></a></li>
                 <!--  <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li> -->
                </ul>
              </div>
            </div>
            <!--/.row-->
          </div>
          <!--/.container-->
        </div>
        <!--/.footer-->
        
        <div class="footer-bottom">
          <div class="container">
            <p class="m-0 text-center text-white">Copyright © Alloitech 2017</p>
            <!-- <div class="pull-right">
              <ul class="nav nav-pills payments">
                <li><i class="fa fa-cc-visa"></i></li>
                <li><i class="fa fa-cc-mastercard"></i></li>
                <li><i class="fa fa-cc-amex"></i></li>
                <li><i class="fa fa-cc-paypal"></i></li>
              </ul> -->
            </div>
          </div>
        </div>
        <!--/.footer-bottom-->
      </footer>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="<?= $this->assetUrl('js/bootjs.min.js') ?>"></script>
      <script type="text/javascript" src="<?= $this->assetUrl('js/initMap.js') ?>">
      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHZfYLmxyVV2xmwmF_IrwFlWszQTH8jOM&callback=initMap"
      type="text/javascript">
      </script>
    </body>
  </html>