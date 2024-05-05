@extends('layouts.app')

    <style>
 .card-body{
  background-color:#111;
  color:#B2B2B2;
 }
  
</style>



@section('content')
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
<div><br></div>
<div class="container">
        <div class="row">
          <div class="col-6">
            <h2 style="color:white;">KUP BILET</h2>
          </div>
          <div class="col-6 text-md-end">
            
          </div>
          <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide"
              data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <img class="img-fluid" alt="100%x280"
                          src="../1.jpg">
                          </div>
                        <div class="card-body">
                          <h4 class="card-title">Mój pies Artur</h4>
                        </div>
                      
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <img class="img-fluid" alt="100%x280"
                          src="../2.jpg">  
                       </div>                      
                          <div class="card-body">
                            <h4 class="card-title">Pogromny Duchów: Imprerium lodu</h4>
                          </div>
                      
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <img class="img-fluid" alt="100%x280"
                          src="../3.jpg"> 
                          </div>                       
                          <div class="card-body">
                          <h4 class="card-title">Bękart</h4>
                          
                        </div>
                      
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <img class="img-fluid" alt="100%x280"
                          src="../4.jpg">   
                          </div>                     
                          <div class="card-body">
                          <h4 class="card-title">Zakonnica</h4>
                        
                        </div>
                      
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <img class="img-fluid" alt="100%x280"
                          src="../5.jpg">        
                          </div>                
                          <div class="card-body">
                          <h4 class="card-title">Królestwo Planety małp</h4>

                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <img class="img-fluid" alt="100%x280"
                          src="../6.jpg"> 
                          </div>                       
                          <div class="card-body">
                          <h4 class="card-title">Władca Mroku</h4>
                          
                        
                      </div>
                    </div>
                  </div>
                </div>
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>



@endsection


