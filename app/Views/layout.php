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
    <link rel="stylesheet" href="<?= $this->assetUrl('css/loader.css') ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
  </head>
  <body>
    <div class="container">
        <div class="masthead">
          <div class="row justify-content-between">
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
        </div>
      <!-- section header -->
      <?=$this->section('header_content')?>
      <section>
        <?= $this->section('main_content') ?>
      </section>
    </div>
    <footer class="py-5 bg-dark footer">
      <p class="m-0 text-center text-white">Copyright © Alloitech 2017</p>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="<?= $this->assetUrl('js/bootjs.min.js') ?>"></script>
  </body>
</html>