<!DOCTYPE html>
<html lang="fr">
	<head>
	<?=$this->section('head')?>
		<meta charset="UTF-8">
		<title><?= $this->e($title) ?></title>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
		<link rel="stylesheet" href="<?= $this->assetUrl('css/animate.css')?>">

		
		<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">




		
	</head>
	<body>
		<div class="container">
			<header>
				<h1 class="animated headShake"><?= $this->e($title) ?></h1>
			</header>
			<section>
				<?= $this->section('main_content') ?>
			</section>
			
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
		</div>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="<?= $this->assetUrl('js/materialize.min.js') ?>"></script>
	</body>
</html>