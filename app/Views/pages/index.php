
  <?= $this->include('templates/header'); ?>
  <?= $this->include('templates/navbar'); ?>

  <div class="container-fluid pr-0 pl-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.startexam.ru/img/top_girl@2x.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="container-fluid bg-light">
    <div class="container">
      <div class="row pt-5 pb-5">
        <div class="col-12">
          <h1 class="h1 text-center text-uppercase"><strong>Как это работает?</strong></h1>
        </div>
      </div>
      <div class="row pb-4">
        <div class="col-4">
          <div class="border shadow pl-3 pr-3">
            <h3 class="text-danger text-center mt-5 step-who-work">01</h3>
            <p class="title-card text-center"><strong>Создайте тест</strong></p>
            <p class="text-center">
              который можно пройти на любом
              устройстве и в любое время
            </p>
            <div class="text-center pt-4 pb-5">
              <i class="fab fa-accessible-icon size-icon"></i>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="border shadow pl-3 pr-3">
            <h3 class="text-danger text-center mt-5 step-who-work">02</h3>
            <p class="title-card text-center"><strong>Создайте тест</strong></p>
            <p class="text-center">
              который можно пройти на любом
              устройстве и в любое время
            </p>
            <div class="text-center pt-4 pb-5">
              <i class="fab fa-accessible-icon size-icon"></i>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="border shadow pl-3 pr-3">
            <h3 class="text-danger text-center mt-5 step-who-work">03</h3>
            <p class="title-card text-center"><strong>Создайте тест</strong></p>
            <p class="text-center">
              который можно пройти на любом
              устройстве и в любое время
            </p>
            <div class="text-center pt-4 pb-5">
              <i class="fab fa-accessible-icon size-icon"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= $this->include('templates/footer'); ?>
