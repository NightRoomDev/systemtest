
  <?= $this->include('templates/header'); ?>

  <div class="container">
    <div class="row mt-2 pt-5">
      <div class="col-4 m-auto pt-3">
        <img src="logo.png" width="160" class="d-block m-auto pb-5" alt="">
        <form action="" class="bg-white pt-4 pb-5 pl-5 pr-5 shadow" method="POST">
          <h3 class="text-center mt-4 mb-5">Вход</h3>
          <hr>
          <div class="form-row mt-5 mb-4">
            <input type="email" class="form-control" name="email" placeholder="email">
          </div>
          <div class="form-row mb-4">
            <input type="password" class="form-control" name="password" placeholder="password">
          </div>
          <div class="form-row">
            <input type="submit" class="btn btn-primary form-control" value="Войти">
          </div>
        </form>
      </div>
    </div>
  </div>

  <?= $this->include('templates/footer'); ?>
