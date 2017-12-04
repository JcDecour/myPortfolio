<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?=$this->section('head')?>
    <title><?= $this->e($title) ?></title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="smartphone et tablette, dépannage, informatique, réparation, site web, Lesparre-Médoc, Castelnau-de-Médoc, St-Laurent, St-Vivien-de-Médoc, ordinateur, Développement web, Site vitrine, Solution E-commerce" />
    <meta name="author" content="Jean-Charles Decourtheix" />
    <meta name="copyright" content="© alloitech." />
    <link rel="icon" href="<?= $this->assetUrl('img/favicon.png')?>" type="image/png">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/animate.css')?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/grid.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/reboot.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/styleb1.min.css') ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
      <link href="https://fonts.googleapis.com/css?family=Pacifico|Roboto" rel="stylesheet">
    </head>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
    <div class="container">
      <!--  <div class="masthead">
        -->
        <div id="header-card" class="row justify-content-between">
          <h3 class="">Allo<span class="itech-color">itech<small class="span-layout">BY J-C Decourtheix</small></h3>&nbsp;&nbsp;
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
                <a class="nav-link" href="<?=$this->url('accueil')?>"><strong>Accueil</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=$this->url('maintenance')?>"><strong>Maintenance informatique</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=$this->url('smartphone')?>"><strong>Smartphone et tablette</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=$this->url('developpement-web')?>"><strong>Création Site Web</strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=$this->url('contact')?>"><strong>Contact</strong></a>
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
                  <li></li><a href="<?=$this->url('maintenance')?>" class="light"><h2 class="h6"><strong>Dépannage Informatique St-Vivien-de-Médoc</strong></h2></a></li>
                  <li></li><a href="<?=$this->url('smartphone')?>" class="light"><h2 class="h6"><strong>Réparation Smartphone St-Vivien-de-Médoc</strong></h2></a></li>
                  <li></li><a href="<?=$this->url('maintenance')?>" class="light"><h2 class="h6"><strong>Dépannage Informatique Lesparre-Médoc</strong></h2></a></li>
                  <li></li><a href="<?=$this->url('smartphone')?>" class="light"><h2 class="h6"><strong>Réparation Smartphone Lesparre-Médoc</strong></h2></a></li>
                  <li></li><a href="<?=$this->url('maintenance')?>" class="light"><h2 class="h6"><strong>Dépannage Informatique Pauillac</strong></h2></a></li>
                  <li></li><a href="<?=$this->url('smartphone')?>" class="light"><h2 class="h6"><strong>Réparation Smartphone Pauillac</strong></h2></a></li>
                  <li></li><a href="<?=$this->url('maintenance')?>" class="light"><h2 class="h6"><strong>Dépannage Informatique St-Laurent</strong></h2></a></li>
                  <li></li><a href="<?=$this->url('smartphone')?>" class="light"><h2 class="h6"><strong>Réparation Smartphone St-Laurent</strong></h2></a></li>
                  <li></li><a href="<?=$this->url('maintenance')?>" class="light"><h2 class="h6"><strong>Dépannage Informatique Castelnau-de-Médoc</strong></h2></a></li>
                  <li></li><a href="<?=$this->url('smartphone')?>" class="light"><h2 class="h6"><strong>Réparation Smartphone Castelnau-de-Médoc</strong></h2></a></li>
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
                  <li><a href="tel:+33761607494"><i class="fa fa-phone fa-2x"></i></a></li>
                  <!--  <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                  <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li> -->
                </ul>
                <ul class="hide-keywords">
                  <li><h2><strong>diagnostics & dépannage informatique médoc</strong></h2></li>
                  <li><h2><strong>réparation smartphone et tablette médoc</strong></h2></li>
                  <li><h2><strong>Création de site web médoc</strong></h2></li>
                  <li><h2><strong>site vitrine médoc</strong></h2></li>
                  <li><h2><strong>site e-commerce médoc</strong></h2></li>
                  <li><h2><strong>technicien spécialiste informatique médoc</strong></h2></li>
                  <li><h2><strong>dévellopeur web médoc</strong></h2></li>
                  <li><h2><strong>spécialiste informatique</strong></h2></li>
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
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSvHUtnQhtntDu3weSLqnCmX3Mu3-SfA8&callback=initMap"
      type="text/javascript">
      </script>
      <!-- SOCIAL media check -->
      <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a21dcd615ace226"></script> 
    </body>
  </html>
