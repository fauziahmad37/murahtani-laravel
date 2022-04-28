<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Murah Tani</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" id="tanaman-buah-dropdown" href="#">Tanaman Buah</a>
                <div class="tanaman-buah-list"></div>
              </li>
              <li><a class="dropdown-item" id="tanaman-hias-dropdown" href="#">Tanaman Hias</a>
                <div class="tanaman-hias-list"></div>
              </li>
              <li><a class="dropdown-item" href="#">Media Tanam</a></li>
              <li><a class="dropdown-item" id="pot-dropdown" href="#">Pot</a>
                <div class="pot-list"></div>
              </li>
              <li><a class="dropdown-item" id="pupuk-dropdown" href="#">Pupuk</a>
                <div class="pupuk-list"></div>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak Kami</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <div class="row g-3 align-items-center">
            <div class="col-auto">
              <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Cari">
            </div>
            <div class="col-auto ms-0">
              <button type="submit" class="btn" style="background-color: darkgray;"><i class="bi bi-search"></i></button>
            </div>
          </div>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
          <div class="col-0.5">
            <button type="button" class="icon-button">
                <span><i class="bi bi-cart4"></i></span>
                <span class="icon-button__badge">0</span>
            </button>
        </div>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>