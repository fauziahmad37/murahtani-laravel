@extends('layouts.main')

@section('header')
    @include('partials.header')
@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('container')
    <div class="row">

      <div id="carouselExampleIndicators" class="carousel slide ps-0" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/banner_murahtani.jpg" class="d-block w-100 rounded-3 me-0" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/banner_murahtani.jpg" class="d-block w-100 rounded-3 me-0" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/banner_murahtani.jpg" class="d-block w-100 rounded-3 me-0" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


        @php
            $a=1;    
        @endphp
        @foreach ($inventories as $inventory)
        <div class="col-lg-3 mt-2 ps-0">
            <div class="card shadow p-1 mb-2 bg-white rounded" style="width: 15rem;">
              <img class="card-img-top" src="{{ "/storage/" . $inventory->product->image_1 }}" alt="Card image cap">
              <div class="card-body bg-light">
                <h6 class="card-title">{{ $inventory->product->name }}</h6>
                <p class="d-inline">{{ 'Rp. ' . number_format($inventory->sell_price) }}</p>
                {{-- <p class="card-text">{{ $inventory->product->description }}</p> --}}
                <a href="#" class="btn btn-primary p-0" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $a }}">Detail</a>
                {{-- <a href="#" class="btn btn-primary">{{ 'Rp. '. number_format($inventory->sell_price) }}</a> --}}
              </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{ $a }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $inventory->product->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div id="carouselExampleIndicators{{ $a }}" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators{{ $a }}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators{{ $a }}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators{{ $a }}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="/storage/{{ $inventory->product->image_1 }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="/storage/{{ $inventory->product->image_2 }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="/storage/{{ $inventory->product->image_3 }}" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators{{ $a }}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators{{ $a }}" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="/add_cart" method="POST">
                  <button type="button" class="btn btn-primary">+ Keranjang</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        @php
            $a++
        @endphp
        @endforeach
    </div>
    
@endsection
