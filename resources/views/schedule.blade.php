@extends('layouts.app')

@section('content')
<style>
  body{
    color:white;
  }
  .align-items-center{
    align-items: none;
  }
  .col-6 {
    flex: 0 0 30%;
    max-width: 30%;
}
.col-5 {
    flex: 0 0 41.66666667%;
    max-width: 15.66666667%;
}
.row{
  margin-right:0px;
}
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../avengers.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../cin.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../x.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="col-xs-12 col-md-6 ">
    <div breakpoint="xs">
        <div style="text-align:center;" role="group" class="qb-days-group btn-group">
            <button style="color:white;" type="button" data-automation-id="day_1" aria-pressed="false" aria-label="Poniedziałek" class="btn-default btn"> Pn </button>
            <button style="color:white;" type="button" data-automation-id="day_2" aria-pressed="false" aria-label="Wtorek" class="btn-default btn"> Wt </button>
            <button style="color:white;" type="button" data-automation-id="day_3" aria-pressed="false" aria-label="Środa" class="btn-default btn"> Śr </button>
            <button style="color:white;" type="button" data-automation-id="day_4" aria-pressed="false" aria-label="Czwartek" class="btn-default btn"> Cz </button>
            <button style="color:white;" type="button" data-automation-id="day_5" aria-pressed="false" aria-label="Piątek" class="btn-default active btn"> Pt </button>
            <button style="color:white;" type="button" data-automation-id="day_6" aria-pressed="false" aria-label="Sobota" class="btn-default active btn"> So </button>
            <button style="color:white;" type="button" data-automation-id="day_0" aria-pressed="false" aria-label="Dziś" class="btn-default btn"> Nd </button>
          </div>
    </div>
</div>


        <div style="border-bottom: 2px solid white; padding:30px;" class="row  ">
          <div class="col-5">
            <img style="width:150px; height:200px;" src="../1.jpg" alt=""
              class="img-fluid  d-block">
          </div>
          <div class="col-6">
            <h3 class="mb-2 display-5 fw-bold">Mój pies artur</h3>
            <p class="lead">Przygotowy | 120 min</p>
            <button class="btn btn-primary">9:00</button>
            <button class="btn btn-primary">12:50</button>
            <p class="lead">ENG(NAP PL)</p>
          </div>
        </div>
        <div style="border-bottom: 2px solid white; padding:30px;" class="row  ">
          <div class="col-5">
            <img style="width:150px; height:200px;" src="../3.jpg" alt=""
              class="img-fluid  d-block">
          </div>
          <div class="col-6">
            <h3 class="mb-2 display-5 fw-bold">Bękart</h3>
            <p class="lead">Dramat/Historia | 127 min</p>
            <button class="btn btn-primary">15:00</button>
            <button class="btn btn-primary">18:50</button>
            <p class="lead">ENG(NAP PL)</p>
          </div>
        </div>
@endsection
