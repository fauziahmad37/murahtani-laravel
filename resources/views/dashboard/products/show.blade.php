@extends('dashboard/layouts/main')

@section('container')

<div class="container">

    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $product->name }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my posts</a>
            <a href="/dashboard/posts/{{ $product->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $product->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                  <span data-feather="x-circle"></span> Delete
                </button>
              </form>

              @if ($product->image_1)
              <div style="max-height:350px; overflow:hidden;">
                  <img src="{{ asset('storage/' . $product->image_1) }}" class="img-fluid mt-3"> 
              </div>
              @else
                <img src="https://source.unsplash.com/1200x400?{{ $product->category }}" alt="{{ $product->category }}" class="img-fluid mt-3">  
              @endif
            
            <article class="my-3 fs-5">
                {!! $product->description !!}
            </article>
            
        </div>
    </div>
</div>

@endsection