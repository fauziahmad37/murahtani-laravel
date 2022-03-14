<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/sidebars.css">

    <title>Hello, world!</title>
  </head>
  <body style="height: 2000px;">

    @include('partials.navbar')
    
    <div class="container" style="padding-top: 5%;">

      @include('partials.header')

     
      <div class="row">
        <div class="col-3">

          <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
              <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
              <span class="fs-5 fw-semibold">PILIH KATEGORI</span>
            </a>
            <ul class="list-unstyled ps-0">
              <li class="mb-1">
                <button class="btn btn-toggle w-100 align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#tanamanbuah-collapse" aria-expanded="false">
                  Bibit Tanaman Buah
                </button>
                <div class="collapse" id="tanamanbuah-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded w-100">Alpukat</a></li>
                    <li><a href="#" class="link-dark rounded w-100">Apel</a></li>
                    <li><a href="#" class="link-dark rounded w-100">Lain - lain</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle w-100 align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#tanamanhias-collapse" aria-expanded="false">
                  Bibit Tanaman Hias
                </button>
                <div class="collapse" id="tanamanhias-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded w-100">Campur</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle w-100 align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#mediatanam-collapse" aria-expanded="false">
                  Pupuk
                </button>
                <div class="collapse" id="mediatanam-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded w-100">Organik</a></li>
                    <li><a href="#" class="link-dark rounded w-100">Kimia</a></li>
                    <li><a href="#" class="link-dark rounded w-100">Lain - lain</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle w-100 align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#pot-collapse" aria-expanded="false">
                  Pot
                </button>
                <div class="collapse" id="pot-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded w-100">Pot Hitam</a></li>
                    <li><a href="#" class="link-dark rounded w-100">Pot Warna</a></li>
                    <li><a href="#" class="link-dark rounded w-100">All</a></li>
                  </ul>
                </div>
              </li>

             
              <li class="border-top my-3"></li>
              <li class="mb-1">
                <button class="btn btn-toggle w-100 align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                  Account
                </button>
                <div class="collapse" id="account-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark rounded">New...</a></li>
                    <li><a href="#" class="link-dark rounded">Profile</a></li>
                    <li><a href="#" class="link-dark rounded">Settings</a></li>
                    <li><a href="#" class="link-dark rounded">Sign out</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
            
          
            
        </div>
        <div class="col-9">
          @yield('container')
        </div>
      </div>

  
      
  
    </div>

    {{-- menu bar left --}}
    <script src="js/sidebars.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>