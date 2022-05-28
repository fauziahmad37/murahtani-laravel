@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" name="name" required autofocus value="{{ old('name') }}">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" required value="{{ old('code') }}">
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
                @if (old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
              @endforeach
  
            </select>
          </div>
  
          <div class="mb-3">
            <label for="image" class="form-label">Post Image 1</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>

          <div class="mb-3">
            <label for="image2" class="form-label">Post Image 2</label>
            <img class="img-preview2 img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image2') is-invalid @enderror" type="file" id="image2" name="image2" onchange="previewImage2()">
            @error('image2')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>

          <div class="mb-3">
            <label for="image2" class="form-label">Post Image 3</label>
            <img class="img-preview3 img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image3') is-invalid @enderror" type="file" id="image3" name="image3" onchange="previewImage3()">
            @error('image3')
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
            <input id="description" type="hidden" name="description" required value="{{ old('description') }}">
            <trix-editor input="description"></trix-editor>
          </div>
          
          <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
  
<script>
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

  function previewImage2(){
    const image2 = document.querySelector('#image2');
    const imgPreview2 = document.querySelector('.img-preview2');
  
    imgPreview2.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image2.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview2.src = oFREvent.target.result;
    }
  }

  function previewImage3(){
    const image3 = document.querySelector('#image3');
    const imgPreview3 = document.querySelector('.img-preview3');
  
    imgPreview3.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image3.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview3.src = oFREvent.target.result;
    }
  }
</script>

@endsection