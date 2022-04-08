@extends('layouts.main')

@section('header')
    @include('partials.header')
@endsection

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('container')
    <div class="row">

        @foreach ($inventories as $key => $inventory) {{-- $key = 0, $inventory = <data0>, $key = 1, $inventory = <data1> --}}
        <div class="col-sm-4 mt-3">
            <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
              <img class="card-img-top" src="{{ "img/product/" . $inventory->product->image_1 }}" alt="Card image cap">
              <div class="card-body bg-light">
                <h5 class="card-title">{{ $inventory->product->name }}</h5>
                <p class="card-text">{{ $inventory->product->description }}</p>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $a }}">Detail</a>
                <a href="#" class="btn btn-primary">{{ 'Rp. '. number_format($inventory->sell_price) }}</a>
              </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{ $key }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $inventory->product->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div id="carouselExampleIndicators{{ $key }}" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators{{ $key }}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators{{ $key }}" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators{{ $key }}" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset($inventory->product->image_1) }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="/img/product/{{ $inventory->product->image_2 }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="/img/product/{{ $inventory->product->image_3 }}" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators{{ $key }}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators{{ $key }}" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{ route('add.cart') }}" method="POST">
                  <button type="button" class="btn btn-primary">+ Keranjang</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>

@endsection

<!-- ref https://laravel.com/docs/9.x/helpers#method-asset -->
<!-- without .env ASSET_URL -->
<!-- http://localhost/ -->
<!-- asset('image/product1.jpg') --> {{-- http://localhost/image/product1.jpg --}}

<!-- ASSET_URL=http://localhost/assets -->
<!-- http://localhost/ -->
<!-- asset('image/product1.jpg') --> {{-- http://localhost/assets/image/product1.jpg --}}
