<?php $this->layout('layout', ['title' => 'Contacter moi']) ?>
<?php $this->start('main_content') ?>
<?php /*var_dump($formErrors)*/;
/*var_dump($decode);*/ ?>
<div class="row row-contact animated fadeInLeftBig">
  <div id="title" class="col-lg-12">
    <h2>Restons en contact</h2>
    <p class="h3">Merci de renseigner le formulaire, nous vous recontacterons dans les plus brefs délais.</p>
  </div>
  <div class="col-lg-12">
    <form method="post" class="">
      <div class="row row-contact">
        <div class="col-lg-6">
          <!-- lastname -->
          <input type="text" name="name" id="name" required="required" class="form" placeholder="Nom *" value="<?=isset($post[' name']) ? $post['name'] : '';?>"/>
          <!-- société -->
          <input type="text" name="business" id="business" class="form" placeholder="Société" />
          <!-- email -->
          <input type="email" name="email" id="email" required="required" class="form" placeholder="Email *" value="<?=isset($post['email']) ? $post['email'] : '';?>"/>
          <!-- téléphone -->
          <input type="number" name="phone" id="phone" class="form" placeholder="Téléphone" value="<?=isset($post['phone']) ? $post['phone'] : '';?>"/>
        </div>
        <div class="col-lg-6">
          <!-- Subject -->
          <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Sujet *" value="<?=isset($post['subject']) ? $post['subject'] : '';?>"/>
          <!-- Message -->
          <textarea name="message" id="message" class="form textarea" required="required"  placeholder="Votre Message *" value="<?=isset($post['message']) ? $post['message'] : '';?>"></textarea>
        </div>
        <div class="col align-self-center">
        <div class="g-recaptcha align-self-center" data-sitekey="6Lf1xDkUAAAAAEm7-JtKsNL2pUMbvzZm6baARomg"></div><br>
        <div class="relative fullwidth col-xs-12">
          <!-- Send Button -->
          <button type="submit" id="submit" class="btn btn-info btn-lg">Envoyer</button>
          </div><!-- End Bottom Submit -->
        </div>
        </div>
        <div class="clear"></div>
      </form>
    </div>
    
          <?php $this->stop('main_content') ?>