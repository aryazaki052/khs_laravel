@extends('frontend-home.frontend-home')
@section('content')
 <!-- carousel -->
 <div class="carousel container-fluid" style="position: relative;">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <!-- Gambar-gambar slider -->
          <img src="{{ asset('frontend/gambar/slider1.jpg') }}" alt="Gambar 1" class="active" />
          <img src="{{ asset('frontend/gambar/slider2.jpg') }}" alt="Gambar 2" />
          <img src="{{ asset('frontend/gambar/slider3.jpg') }}" alt="Gambar 3" />

          <!-- Keterangan untuk setiap gambar -->
          <div class="carousel-item tulisan-slider">
              <div class="container">
                  <div class="row justify-content-center text-center">
                      <div class="col-md-12 col-sm-12 ketslider">
                          <div data-aos="fade-up">
                              <h1 class="wow animate__animated animate__zoomInUp" data-wow-duration="2s">Tirta Yatra 2023</h1>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="carousel-item tulisan-slider">
              <div class="container">
                  <div class="row justify-content-center text-center">
                      <div class="col-md-12 col-sm-12 ketslider">
                          <h1 class="wow animate__animated animate__zoomInUp" data-wow-duration="2s">Ogoh - Ogoh 2023</h1>
                      </div>
                  </div>
              </div>
          </div>
          <div class="carousel-item tulisan-slider">
              <div class="container">
                  <div class="row justify-content-center text-center">
                      <div class="col-md-12 col-sm-12 ketslider">
                          <h1 class="wow animate__animated animate__zoomInUp" data-wow-duration="2s">Dharma Bhakti 2023</h1>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="carousel-indicators" style="display: flex; z-index: 1">
      <span class="active" onclick="jumpToSlide(1)"></span>
      <span onclick="jumpToSlide(2)"></span>
      <span onclick="jumpToSlide(3)"></span>
  </div>
</div>

<!-- highlight -->
<section id="highlight">
  <div class="container-fluid highlight">
      <div class="row justify-content-center">
          <div class="isi col-lg-7">
              <h1>Kerohanian Hindu Smansa</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur eaque nemo veritatis aliquam
                  temporibus eius natus voluptatum molestias hic, amet ex, mollitia tempore maiores quas nulla. Harum,
                  possimus cumque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere hic, rem amet ducimus,
                  ipsum debitis aperiam deserunt voluptates aliquid voluptas vero excepturi. Saepe molestiae facere, explicabo
                  quae ad quibusdam debitis?</p>
          </div>
          <div class="col-lg-5 logospan">
              <div class="logo-lingkaran">
                  <img src="{{ asset('frontend/gambar/logohd.png') }}" width="265px" alt="" class="gmbr-logo" />
                  <ul class="lingkaran"></ul>
              </div>
              <div class="box">
                  <img src="{{ asset('frontend/gambar/shape.png') }}" alt="">
              </div>
          </div>
      </div>
  </div>
</section>


<!-- shotcut -->
<section>
  <div class="container shortcut">
      <div class="row shortcut1 d-flex justify-content-center" data-aos="fade-up">
          <div class="card-wrap col-md-4" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-offset="1300"
              data-aos-duration="2000" data-aos-delay="100" data-aos-once="true">
              <div class="tilt-box-wrap">
                  <div class="tilt-box">
                      <div class="card kartu-shortcut">
                          <i class="fa fa-bullseye icon-shortcut" aria-hidden="true"></i>
                          <div class="card-body">
                              <h5 class="card-title text-center">VISI MISI</h5>
                              <a href="index.html" class="btn btn-hover kartu-shortcut1">Selengkapnya</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card-wrap col-md-4" data-aos="flip-left" data-aos-anchor="#example-anchor" data-aos-offset="1300"
              data-aos-duration="2000" data-aos-delay="100" data-aos-once="true">
              <div class="tilt-box-wrap">
                  <div class="tilt-box">
                      <div class="card kartu-shortcut">
                          <i class="fa fa-tasks icon-shortcut" aria-hidden="true"></i>
                          <div class="card-body">
                              <h5 class="card-title text-center">PROGRAM KERJA</h5>
                              <a href="#" class="btn btn-hover kartu-shortcut1">Selengkapnya</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card-wrap col-md-4 " data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="1300"
              data-aos-duration="2000" data-aos-delay="100" data-aos-once="true">
              <div class="tilt-box-wrap">
                  <div class="tilt-box">
                      <div class="card kartu-shortcut">
                          <i class="fa fa-users icon-shortcut" aria-hidden="true"></i>
                          <div class="card-body">
                              <h5 class="card-title text-center">PROFIL</h5>
                              <a href="#" class="btn btn-hover kartu-shortcut1">Selengkapnya</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- kepengurusan -->
<!-- pastikan ukuran foto 1061px x 689  -->
<section id="slider" class="pt-5">
  <div class="container-fluid kepengurusan-wrap">
      <div class="container kepengurusan">
          <h1 class="text-center"><b>KEPENGURUSAN</b></h1>
          <div class="slider">
              <div class="owl-carousel">
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>I Gusti Putu Arya Zaki Yoga Pratama</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
                  <div class="slider-card">
                      <div class="d-flex justify-content-center align-items-center mb-4">
                          <img src="{{ asset('frontend/gambar/pengurus/profile.png') }}" alt="">
                      </div>
                      <h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
                      <p class="text-center">Jabatan</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- akhir kepengurusan -->

<!-- galery -->
<div class="container galeri-wrap">
  <div class="teks-galeri text-center">
      <h1>PROGRAM KERJA</h1>
  </div>
  <div class="row galeri-item">
      <div class="owl-carousel owl-theme owl-dots">
          <div class="card-galeri" style="display: flex; justify-content: center; align-items: center;">
              <div class="image-box">
                  <img src="{{ asset('frontend/gambar/proker/dummy.png') }}">
              </div>
              <div class="content">
                  <h2>Judul</h2>
                  <p>Keterangan</p>
              </div>
          </div>
          <div class="card-galeri">
              <div class="image-box">
                  <img src="{{ asset('frontend/gambar/proker/dummy.png') }}">
              </div>
              <div class="content">
                  <h2>Judul</h2>
                  <p>Keterangan</p>
              </div>
          </div>
          <div class="card-galeri">
              <div class="image-box">
                  <img src="{{ asset('frontend/gambar/proker/dummy.png') }}">
              </div>
              <div class=" content">
                  <h2>Judul</h2>
                  <p>Keterangan</p>
              </div>
          </div>
          <div class="card-galeri">
              <div class="image-box">
                  <img src="{{ asset('frontend/gambar/proker/dummy.png') }}">
              </div>
              <div class="content">
                  <h2>Judul</h2>
                  <p>Keterangan</p>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- akhir gallery -->
    
@endsection