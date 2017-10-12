<!-- PAGE LOADER -->
<?php $this->layout('layout', ['title' => 'Jean-Charles Decourtheix']) ?>
<?php $this->start('header_content') ?>
<link rel="stylesheet" href="<?= $this->assetUrl('css/loader.css') ?>">
<meta http-equiv="" content="3;url=<?=$this->url('accueil')?>">
<?php $this->stop('header_content') ?>
<?php $this->start('main_content') ?>
<div class="container">
<h3 style="color: black;"><span class="animated flash" >&lsaquo;Développement Web/>, Maintenance &amp; Dépannage informatique</span></h3>
	<div id="loader" class="row justify-content-center">
		<div class="col-12 loader">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>