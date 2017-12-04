<?php $this->layout('layout', ['title' => 'Alloitech: Contactez-nous']) ?>
<?php $this->start('head') ?>
<meta name="description" content="Prenez contact avec vos spécialistes informatique, réparateur smartphone et tablette et vos développeur web." />
<?php $this->stop('head') ?>
<?php $this->start('main_content') ?>
<div class="row row-contact animated fadeInLeftBig">
  <div id="title" class="col-lg-12 title">
    <h2>Restons en contact</h2>
    <p class="h4">Merci de renseigner le formulaire, nous vous recontacterons dans les plus brefs délais.</p>
  </div>
  <div class="col-lg-12">
    <form method="post" class="">
      <?php if(!isset($formValid['valid'])): ?>
      <div class="row row-contact">
        <div class="col-lg-6">
          <!-- lastname -->
          <!-- Gestion des erreurs -->
          <?php if(isset($formErrors['name'])): ?>
          <span class="error"><?=$formErrors['name']?></span>
          <?php endif; ?>
          <input type="text" name="name" id="name" required="required" class="form" placeholder="Nom *" value="<?=isset($post['name']) ? $post['name'] : '';?>"/>
          <!-- société -->
          <?php if(isset($formErrors['business'])): ?>
          <span class="error"><?=$formErrors['business']?></span>
          <?php endif; ?>
          <input type="text" name="business" id="business" class="form" placeholder="Société" value="<?=isset($post['business']) ? $post['business'] : '';?>"/>
          <!-- email -->
          <?php if(isset($formErrors['email'])): ?>
          <span class="error"><?=$formErrors['email']?></span>
          <?php endif; ?>
          <input type="email" name="email" id="email" required="required" class="form" placeholder="Email *" value="<?=isset($post['email']) ? $post['email'] : '';?>"/>
          <!-- téléphone -->
          <?php if(isset($formErrors['phone'])): ?>
          <span class="error"><?=$formErrors['phone']?></span>
          <?php endif; ?>
          <input type="number" name="phone" id="phone" class="form" placeholder="Téléphone" value="<?=isset($post['phone']) ? $post['phone'] : '';?>"/>
        </div>
        <div class="col-lg-6">
          <!-- Subject -->
          <?php if(isset($formErrors['subject'])): ?>
          <span class="error"><?=$formErrors['subject']?></span>
          <?php endif; ?>
          <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Sujet *" value="<?=isset($post['subject']) ? $post['subject'] : '';?>"/>
          <!-- Message -->
          <?php if(isset($formErrors['message'])): ?>
          <span class="error"><?=$formErrors['message']?></span>
          <?php endif; ?>
          <textarea name="message" id="message" class="form textarea" required="required"  placeholder="Votre Message *" value="<?=isset($post['message']) ? $post['message'] : '';?>"></textarea>
        </div>
        <div class="col align-self-center">
          <?php if(isset($formErrors['robot'])): ?>
          <span class="error"><?=$formErrors['robot']?></span>
          <?php endif; ?>
          <div class="g-recaptcha justify-content-center" data-sitekey="6Lf1xDkUAAAAAEm7-JtKsNL2pUMbvzZm6baARomg"></div><br>
          <div class="relative fullwidth col-xs-12">
            <!-- Send Button -->
            <button type="submit" id="submit" class="btn btn-info btn-lg">Envoyer</button>
            </div><!-- End Bottom Submit -->
          </div>
        </div>
        <?php endif; ?>
        <div class="clear"></div>
        <?php if(isset($formValid['valid'])): ?>
        <div class="alert alert-success" role="alert"><?=$formValid['valid']?></div>
        <?php endif; ?>
      </form>
    </div>
    <?php $this->stop('main_content') ?>