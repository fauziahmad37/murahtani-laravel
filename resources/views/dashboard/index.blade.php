@extends('dashboard.layouts.main')

@section('container')
    @if (session('status'))
        <div class="alert alert-warning alert-dismissible fade show w-50" role="alert">
            <p>{{ session('status') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
    </div>
@endsection
