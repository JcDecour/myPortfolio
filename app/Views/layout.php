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
    <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">

  </head>
  <body>
    <div class="container">
      <nav>
        <div class="masthead">
        <h3 class="rollIn text-muted">Alloitech BY J-C Decourtheix</h3>

        <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
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
      </nav>
      <!-- section header -->
        <?=$this->section('header_content')?>
      <section>

        <?= $this->section('main_content') ?>
      </section>
    </div>
    <footer class="py-5 bg-dark footer">
        <p class="m-0 text-center text-white">Copyright © Alloitech 2017</p>
      <!-- /.container -->
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="<?= $this->assetUrl('js/bootjs.min.js') ?>"></script>
  </body>
</html>