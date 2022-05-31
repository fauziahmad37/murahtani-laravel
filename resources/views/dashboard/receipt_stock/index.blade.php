@extends('dashboard/layouts/main')

@section('container')


  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
  </div>

  @if (session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
      </div>
  @endif

  <div class="table-responsive col-lg-8">
      <a href="/dashboard/receipt_stock/create" class="btn btn-primary mb-3">Create new receipt</a>
    <table class="table table-striped table-sm">
      <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">Document No</th>
              <th scope="col">Receipt No</th>
              <th scope="col">Supplier</th>
              <th scope="col">Status</th>
              <th scope="col">Tanggal Pembelian</th>
              <th scope="col">Amount</th>
            </tr>
            
        </thead>
        <tbody>
          @foreach ($receipt_stocks as $receipt_stock)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $receipt_stock->document_no }}</td>
              <td>{{ $receipt_stock->receipt_no }}</td>
              <td>{{ $receipt_stock->supplier->name }}</td>
              <td>{{ $receipt_stock->status }}</td>
              <td>{{ $receipt_stock->tanggal_pembelian }}</td>
              <td>{{ $receipt_stock->amount }}</td>
              <td>
                  <a href="/dashboard/posts/{{ $receipt_stock->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                  <a href="/dashboard/posts/{{ $receipt_stock->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/posts/{{ $receipt_stock->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                      <span data-feather="x-circle"></span>
                    </button>
                  </form>
              </td>
            </tr>
            @endforeach
            
      </tbody>
    </table>
  </div>




@endsection