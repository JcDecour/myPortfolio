<?php $this->layout('layout', ['title' => 'Contacter moi']) ?>
<?php $this->start('main_content') ?>
<div class="container">
  <?php var_dump($_POST); ?>
  <div class="row">
    <div class="col-lg">
      <form class="row align-items-center" id="needs-validation" novalidate>
        <div class="form-group col-md-6 justify-content-center">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group col-md-6 justify-content-center">
          <label for="exampleFormControlSelect1">Example select</label>
          <select class="form-control form-control-lg" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="exampleFormControlSelect2">Example multiple select</label>
          <select multiple class="form-control form-control-lg" id="exampleFormControlSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </form>
    </div>
    <div class="col-lg">
      <h2>Restons en contact</h2>
      <p class="h3">Merci de renseigner le formulaire, nous vous recontacterons dans les plus brefs délais.</p>
    </div>
  </div>
  <?php $this->stop('main_content') ?>    