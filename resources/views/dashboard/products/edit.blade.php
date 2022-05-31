
@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" name="name" required autofocus value="{{ old('name', $post->name) }}">
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control @error('code') is-invalid @enderror"  id="code" name="code" required autofocus value="{{ old('code', $post->code) }}">
            @error('code')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

      
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
              @if (old('category_id', $post->category_id) == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @endforeach

          </select>
        </div>

        <div class="mb-3">
          <label for="image_1" class="form-label">Post Image 1</label>
          <input type="hidden" name="oldImage" value="{{ $post->image_1 }}">

          @if ($post->image_1)
          <img src="{{ asset('storage/' . $post->image_1) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
          @endif

          
          <input class="form-control @error('image_1') is-invalid @enderror" type="file" id="image_1" name="image_1" onchange="previewImage()">
          @error('image_1')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
        </div>

        <div class="mb-3">
            <label for="image_2" class="form-label">Post Image 2</label>
            <input type="hidden" name="oldImage2" value="{{ $post->image_2 }}">
  
            @if ($post->image_2)
            <img src="{{ asset('storage/' . $post->image_2) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
              <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
  
            
            <input class="form-control @error('image_2') is-invalid @enderror" type="file" id="image_2" name="image_2" onchange="previewImage()">
            @error('image_2')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>

          <div class="mb-3">
            <label for="image_3" class="form-label">Post Image 3</label>
            <input type="hidden" name="oldImage3" value="{{ $post->image_3 }}">
  
            @if ($post->image_3)
            <img src="{{ asset('storage/' . $post->image_3) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
              <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
  
            
            <input class="form-control @error('image_3') is-invalid @enderror" type="file" id="image_3" name="image_3" onchange="previewImage()">
            @error('image_3')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          @error('description')
          <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="description" type="hidden" name="description" required value="{{ old('description', $post->description) }}">
          <trix-editor input="description"></trix-editor>
        </div>
        
        <button type="submit" class="btn btn-primary mb-3">Update Post</button>
      </form>

</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title='+ title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    });

  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
  
    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
    
@endsection