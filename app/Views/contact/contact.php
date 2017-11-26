<?php $this->layout('layout', ['title' => 'Contacter moi']) ?>
<?php $this->start('main_content') ?>
  <?php var_dump($_POST); ?>
  <div class="row row-contact">
    <div class="col">
      <h2>Restons en contact</h2>
      <p class="h3">Merci de renseigner le formulaire, nous vous recontacterons dans les plus brefs délais.</p>
    </div>
  </div>
  <div class="row row-contact">
    <!-- <div class="col-md-12"> -->
      <!-- <form method="post" class="align-items-center" id="needs-validation" novalidate>
        <div class="form-inline">
          <div class="form-group">
            <label for="lastname">Nom:</label>
            <input type="text" class="form-control form-control-sm" id="lastname" name="lastname" placeholder="dupont" required>
          </div>
          <label for="email">Email:</label>
          <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="name@example.com" required>
        </div>
        <div class="form-inline">
        <div class="form-group">
          <label for="phone">Téléphone:</label>
          <input type="number" class="form-control form-control-sm" id="phone" name="phone" placeholder="0123456789">
        </div>
        <div class="form-group">
          <label for="business">Société:</label>
          <input type="text" class="form-control form-control-sm" id="lastname" name="lastname" placeholder="">
        </div>
      </div>
        
        <div class="form-group">
          <label for="subject">Sujet:</label>
          <input type="text" class="form-control form-control-sm" id="subject" name="subject" placeholder="" required>
        </div>
        
        <div class="form-group">
          <label for="message">Votre demande:</label>
          <textarea class="form-control form-control-sm" id="message" name="message" rows="4" required></textarea>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="signin"></label>
        </div>
        <div class="g-recaptcha align-items-center" data-sitekey="6Lf1xDkUAAAAAEm7-JtKsNL2pUMbvzZm6baARomg"></div><br>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form> -->
      <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="#">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Nom" />
                            <!-- société -->
                            <input type="text" name="business" id="business" class="form" placeholder="Société" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                            <!-- phone -->
                            <input type="number" name="phone" id="phone" class="form" placeholder="Téléphone" />
                            <!-- Subject -->
                            <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Sujet" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button> 
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->

    <!-- </div> -->
  </div>
  <?php $this->stop('main_content') ?>