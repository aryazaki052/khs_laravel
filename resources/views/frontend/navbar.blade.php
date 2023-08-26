<nav class="navbar container-fluid navbar-expand-md navbar-light " style="position: fixed;">
  <div class="container-fluid item">
      <!-- Logo navbar -->
      <div class="logo">
          <a class="navbar-brand img-fluid" href="#"><img src="{{ asset('frontend/gambar/logo.png') }}" alt="logo" width="145px"></a>
          <marquee behavior="scroll" direction="left">Sevanam Eka Asa, Jayamahe!!!</marquee>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container-lg collapse navbar-collapse justify-content-end navbara" id="navbarNavDropdown">
          <ul class="navbar-nav navbarb">
              <li class="nav-item active overflow">
                  <a href="#" class="wrap">Beranda</a>
              </li>
              <!-- Dropdown About Us -->
              <li class="nav-item dropdown">
                  <div class="overflow">
                      <a class="navbarc dropdown-hover wrap" href="#" id="navbarDropdownMenuLink teks" role="button"
                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          About Us
                      </a>
                  </div>
                  <ul class="dropdown-menu overflow" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Bagian 1</a>
                      <a class="dropdown-item" href="#">Bagian 2</a>
                      <a class="dropdown-item" href="#">Bagian 3</a>
                      <a class="dropdown-item" href="#">Bagian 4</a>
                  </ul>
              </li>
              <!-- End of Dropdown About Us -->
              <li class="overflow">
                  <a href="#" class="wrap">News</a>
              </li>
              <li class="overflow">
                  <a href="#" class="wrap">Contact</a>
              </li>
          </ul>
      </div>
  </div>
</nav>