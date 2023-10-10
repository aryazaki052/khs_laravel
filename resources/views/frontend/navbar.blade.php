<nav class="navbar container-fluid navbar-expand-md navbar-light " style="position: fixed;">
  <div class="container-fluid item">
      <!-- Logo navbar -->
      <div class="logo">
          <a class="navbar-brand img-fluid" href="#"><img src="{{ asset('frontend/gambar/logo.png') }}" alt="logo" width="145px"></a>
          <marquee behavior="scroll" direction="left" class="marque">Sevanam Eka Asa, Jayamahe!!!</marquee>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container-lg collapse navbar-collapse justify-content-end navbara" id="navbarNavDropdown">
          <ul class="navbar-nav navbarb">
              <li class="nav-item overflow {{ request()->is('/') ? ' active' : '' }}">
                  <a href="{{ route('frontend.content-home') }}" class="wrap">Beranda</a>
              </li>
              <!-- Dropdown About Us -->
              <li class="nav-item dropdown {{ request()->is('profil*') ? ' active' : '' }}">
                <div class="overflow">
                    <a class="navbarc dropdown-hover wrap" href="#" id="navbarDropdownMenuLink teks" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: relative">
                        Profil
                    </a>
                </div>
                <div class="dropdown-margin">
                    <ul class="dropdown-menu overflow" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item{{ request()->is('profil/tentang') ? ' active' : '' }}" href="{{ route('frontend.profil.tentang') }} " style="background-color: rgba(255,255,255,255);">Tentang KHS</a>
                        {{-- <a class="dropdown-item{{ request()->is('profil/visi-misi*') ? ' active' : '' }}" href="{{ route('visi-misi.index') }}">Visi Misi</a>
                        <a class="dropdown-item{{ request()->is('profil/program-kerja*') ? ' active' : '' }}" href="{{ route('program-kerja.index') }}">Program Kerja</a>
                        <a class="dropdown-item{{ request()->is('profil/mars-hymne*') ? ' active' : '' }}" href="{{ route('mars-hymne.index') }}">Mars & Hymne</a> --}}
                    </ul>
                </div>
            </li>
            
              <!-- End of Dropdown About Us -->
              <li class="overflow {{ request()->is('berita*') ? ' active' : '' }}">
                  <a href="#" class="wrap">Berita</a>
              </li>
              <li class="overflow {{ request()->is('kontak*') ? ' active' : '' }}">
                  <a href="#" class="wrap">Kontak</a>
              </li>
          </ul>
      </div>
  </div>
</nav>
