@extends('layouts.main')

@section('container')
    <div class="row">
        @php
            $a=1;    
        @endphp
        @foreach ($products as $product)
        <div class="col-sm-4 mt-3">
            <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
              <img class="card-img-top" src="{{ "img/product/" . $product->image_1 }}" alt="Card image cap">
              <div class="card-body bg-light">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <a href="#" class="btn btn-primary" data-target="#produk{{ $a }}<?php //echo $a; ?>" data-toggle="modal">Detail</a>
                <a href="#" class="btn btn-primary">{{ 'Rp. '.$product->harga }}<?php //echo 'Rp. '.number_format($val['harga']); ?></a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection
