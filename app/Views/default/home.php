<!-- PAGE LOADER -->
<?php $this->layout('layout', ['title' => 'Jean-Charles Decourtheix']) ?>
<?php $this->start('head') ?>
<link rel="stylesheet" href="<?= $this->assetUrl('css/loader.css') ?>">
<meta http-equiv="refresh" content="3;url=<?=$this->url('accueil')?>">
<?php $this->stop('head') ?>
<?php $this->start('main_content') ?>
<h3 style="color: black;"><span class="animated flash" >&lsaquo;Développement Web/>, Maintenance &amp; Dépannage informatique</span></h3>
<div class="container">
	<div class="loader">
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
	</div>
</div>
<?php $this->stop('main_content') ?>