@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card text-center">
          <div class="card-header">
            <h3>WELCOME</h3>
          </div>
      </div>
    <div class="row justify-content- center ">
        <div class="col-md-12 mb-42">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ url('img/exo.jpg') }}" class="d-block w-100" width="700" height="300" alt="..." style="display: block; margin: auto;margin-top: 20px; margin-bottom: 20px;">
              </div>
              <div class="carousel-item">
                <img src="{{ url('img/exo2.jpg') }}" class="d-block w-100" width="700" height="300" alt="..." style="display: block; margin: auto;margin-top: 20px; margin-bottom: 20px;">
              </div>
              <div class="carousel-item">
                <img src="{{ url('img/slide2.jpg') }}" class="d-block w-100" width="700" height="300" alt="..." style="display: block; margin: auto;margin-top: 20px;margin-bottom: 20px;">
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
      </div>
    </div>
  </div>
</div>
@endsection