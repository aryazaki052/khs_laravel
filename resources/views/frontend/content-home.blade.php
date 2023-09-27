@extends('frontend-home.frontend-home')
@section('content')
 <!-- carousel -->
 <div class="carousel container-fluid" style="position: relative;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Gambar-gambar slider -->
            @foreach($slides as $index => $slide)
                <img src="{{ asset('uploads/' . $slide->gambar_slide) }}" alt="Slide {{ $index + 1 }}" class="{{ $index === 0 ? 'active' : '' }}" />

                <!-- Keterangan untuk setiap gambar -->
                <div class="carousel-item tulisan-slider">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-12 col-sm-12 ketslider">
                                <h1 class="wow animate__animated animate__zoomInUp" data-wow-duration="2s">{{ $slide->judul_slide }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="carousel-indicators" style="display: flex; z-index: 1">
        @foreach($slides as $index => $slide)
            <span class="{{ $index === 0 ? 'active' : '' }}" onclick="jumpToSlide({{ $index + 1 }})"></span>
        @endforeach
    </div>
</div>
{{-- akhir carousel --}}


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
{{-- akhir highlight --}}

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
{{-- akhir shortcut --}}

<!-- galery -->
<section id="slider" class="pt-5">
    <div class="container-fluid kepengurusan-wrap">
        <div class="container galeri-wrap">
          <div class="teks-galeri text-center">
              <h1>PROGRAM KERJA</h1>
          </div>
          <div class="row galeri-item">
              <div class="owl-carousel owl-theme owl-dots">
                @foreach ($proker as $prokers)
                <div class="card-galeri" style="display: flex; justify-content: center; align-items: center;">
                    <div class="image-box">
                        <img src="{{ asset('uploads/' . $prokers->gambar_proker) }}">
                    </div>
                    <div class="content">
                        <h2>{{ $prokers->nama_proker }}</h2>
                        <p>{{ $prokers->keterangan_proker }}</p>
                    </div>
                </div>
                @endforeach
              </div>
          </div>
        </div>
    </div>
</section>
<!-- akhir gallery -->


<br><br><br>

<!-- kepengurusan -->
<!-- pastikan ukuran foto 1061px x 689  -->
<div class="container kepengurusan">
    <h1 class="text-center"><b>KEPENGURUSAN</b></h1>
    <div class="slider">
        <div class="owl-carousel">
            @foreach ($pengurus as $pengurusItem)
            <div class="slider-card">
              <div class="d-flex justify-content-center align-items-center mb-4">
                  <img src="{{ asset('uploads/' . $pengurusItem->gambar_pengurus) }}" alt="">
              </div>
              <h6 class="mb-0 text-center"><b>{{ $pengurusItem->nama_pengurus }}</b></h6>
              <p class="text-center">{{ $pengurusItem->jabatan }}</p>
          </div>
          @endforeach
      </div>
  </div>
</div>
<!-- akhir kepengurusan -->


{{-- berita --}}
<!-- berita terkini -->
	<div class="container" style="margin-top: 40px;">
		<div class="" style="align-items: center;">
			<div class="berita_terkini" style=" margin-right: 0; padding-right: 0px;">
				<h1>Berita Terkini</h1>
				<span class="border_berita"></span>
			</div>
			<div>
				<h6><a href="">Semua Berita</a></h6>
			</div>
		</div>
		<div class="row justify-content-center berita">
            @foreach ($artikel->take(4) as $berita)
    <div class="col-lg-3 col-md-3 kotak-berita">
        <div class="card img-hover-zoom" style="width: 18rem;">
            <div class="">
                <img src="{{ asset('uploads/' . $berita->gambar_artikel) }}" class="card-img-top" alt="...">
            </div>
            <div class="card-body link-berita">
                <h5 class="card-title">{{ $berita->judul }}</h5>
                <p class="card-text truncated-text">
                    {{ $berita->body }}
                </p>
                <a href="{{ route('berita.show', ['id' => $berita->id]) }}" class="btn">Selengkapnya</a>
            </div>
        </div>
    </div>        
@endforeach

        
		</div>
	</div>
    
@endsection