<?php $this->layout('layout', ['title' => 'Contacter moi']) ?>
<?php $this->start('main_content') ?>
<div class="row">
<?php var_dump($_POST); ?>
	<form method="post" class="col s12 m6">
		<div class="row">
			<div class="input-field col s6 m6">
				<input  name="first_name" type="text" class="validate" data-error="" data-success="">
				<label for="first_name" class="active">Prénom</label>
			</div>
			<div class="input-field col s6 m6">
				<input id="last_name" name="last_name" type="text" class="validate">
				<label for="last_name" class="active">Nom</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6 m6">
				<input id="email" type="email" class="validate">
				<label for="email" class="active" data-error="wrong" data-success="right">Email
				</label>
			</div>
			<div class="input-field col s6 m6">
				<input id="project" name="project" type="text" class="validate">
				<label for="project" class="active">Nature du project:</label>
			</div>
		</div>
	<div class="row">
		<div class="input-field col s12 m6">
			<textarea id="message" name="message" class="materialize-textarea"></textarea>
			<label for="message">Queqlue détails sur vos besoin</label>
		</div>
	</div>
	<div class="row">
		<button class="btn waves-effect waves-green" type="submit" name="action">envoyer
		</button>
	</div>
</form>
</div>

<?php $this->stop('main_content') ?>