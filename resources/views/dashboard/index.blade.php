@extends('dashboard.layouts.main')

@section('container')
    @if (session('status'))
        <div class="alert alert-warning alert-dismissible fade show w-50" role="alert">
            <p>{{ session('status') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
    @endif
@endsection
