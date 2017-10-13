<!-- PAGE LOADER -->
<?php $this->layout('layout', ['title' => 'Jean-Charles Decourtheix']) ?>
<?php $this->start('head') ?>
<meta http-equiv="refresh" content="3;url=<?=$this->url('accueil')?>">
<?php $this->stop('head') ?>
<?php $this->start('header_content') ?>
<?php $this->stop('header_content') ?>
<?php $this->start('main_content') ?>
<div class="container-loader">
	<h3 style="color: black;"><span class="animated flash" >&lsaquo;Développement Web/>, Maintenance &amp; Dépannage informatique</span></h3>
	<div class="row justify-content-center">
		<div id="loader">
			<div class="col-12 loader">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>