<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
      <a class="navbar-brand mr-4" href="#"><img src="../img/logo.png" width="100" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?=base_url()?>/">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">О проекте</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Категории</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?=base_url()?>/sigin">Войти</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Помощь</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
</nav>
