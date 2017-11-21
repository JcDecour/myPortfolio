<?php $this->layout('layout', ['title' => 'Contacter moi']) ?>
<?php $this->start('main_content') ?>
  <?php var_dump($_POST); ?>
  <div class="row row-contact">
    <div class="col-md-6">
      <h2>Restons en contact</h2>
      <p class="h3">Merci de renseigner le formulaire, nous vous recontacterons dans les plus brefs délais.</p>
    </div>
    <div class="col-md-6">
      <form method="post" class="align-items-center" id="needs-validation" novalidate>
        <div class="form-group">
          <div class="form-group">
            <label for="lastname">Nom:</label>
            <input type="text" class="form-control form-control-lg" id="lastname" name="lastname" placeholder="dupont" required>
          </div>
          <label for="email">Email:</label>
          <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="name@example.com" required>
        </div>
        <div class="form-group">
          <label for="phone">Téléphone:</label>
          <input type="number" class="form-control form-control-lg" id="phone" name="phone" placeholder="0123456789">
        </div>
        <div class="form-group">
          <label for="business">Société:</label>
          <input type="text" class="form-control form-control-lg" id="lastname" name="lastname" placeholder="">
        </div>
        
        <div class="form-group">
          <label for="subject">Sujet:</label>
          <input type="text" class="form-control form-control-lg" id="subject" name="subject" placeholder="" required>
        </div>
        
        <div class="form-group">
          <label for="message">Votre demande:</label>
          <textarea class="form-control form-control-lg" id="message" name="message" rows="4" required></textarea>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="signin"></label>
        </div>
        <div class="g-recaptcha" data-sitekey="6Lf1xDkUAAAAAEm7-JtKsNL2pUMbvzZm6baARomg"></div><br>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>
  </div>
  <?php $this->stop('main_content') ?>