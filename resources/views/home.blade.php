@extends('layouts.main')

@section('container')
    <div class="row">
        @php
            $a=1;    
        @endphp
        @foreach ($inventories as $inventory)
        <div class="col-sm-4 mt-3">
            <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
              <img class="card-img-top" src="{{ "img/product/" . $inventory->product->image_1 }}" alt="Card image cap">
              <div class="card-body bg-light">
                <h5 class="card-title">{{ $inventory->product->name }}</h5>
                <p class="card-text">{{ $inventory->product->description }}</p>
                <a href="#" class="btn btn-primary" data-target="#produk{{ $a }}<?php //echo $a; ?>" data-toggle="modal">Detail</a>
                <a href="#" class="btn btn-primary">{{ 'Rp. '. number_format($inventory->sell_price) }}<?php //echo 'Rp. '.number_format($val['harga']); ?></a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection
