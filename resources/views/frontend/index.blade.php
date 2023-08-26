<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Landing Page</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('frontend/navbar/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/index/index.css">') }}
	<link rel="stylesheet" href="{{ asset('frontend/galeri/galeri.css') }}">
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<!-- CSS WOW.js -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<!-- owl carousel -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/owlcarousel/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/owlcarousel/css/styles.css') }}">

	<!-- googgle font -->
	<div>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<!-- font  highlight -->
		<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Kaushan+Script&display=swap"
			rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
		<!-- font shortcut -->
		<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
		<!-- font kepengurusan -->
		<link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Dai+Banna+SIL:wght@300&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	</div>

</head>

<body style="background-color:  rgb(238, 238, 215);">
	<!-- navbar -->
	<nav class="navbar container-fluid navbar-expand-md navbar-light " style="position: fixed;">
		<div class="container-fluid item">
			<!-- Logo navbar -->
			<div class="logo">
				<a class="navbar-brand img-fluid" href="#"><img src="gambar/logo.png" alt="logo" width="145px"></a>
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

	<!-- carousel -->
	<div class="carousel container-fluid" style="position: relative;">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<!-- Gambar-gambar slider -->
				<img src="gambar/slider1.jpg" alt="Gambar 1" class="active" />
				<img src="gambar/slider2.jpg" alt="Gambar 2" />
				<img src="gambar/slider3.jpg" alt="Gambar 3" />

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
						<img src="gambar/logohd.png" width="265px" alt="" class="gmbr-logo" />
						<ul class="lingkaran"></ul>
					</div>
					<div class="box">
						<img src="gambar/shape.png" alt="">
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
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>I Gusti Putu Arya Zaki Yoga Pratama</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
							</div>
							<h6 class="mb-0 text-center"><b>Nama Lengkap</b></h6>
							<p class="text-center">Jabatan</p>
						</div>
						<div class="slider-card">
							<div class="d-flex justify-content-center align-items-center mb-4">
								<img src="gambar/pengurus/profile.png" alt="">
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
						<img src="gambar/proker/dummy.png">
					</div>
					<div class="content">
						<h2>Judul</h2>
						<p>Keterangan</p>
					</div>
				</div>
				<div class="card-galeri">
					<div class="image-box">
						<img src="gambar/proker/dummy.png">
					</div>
					<div class="content">
						<h2>Judul</h2>
						<p>Keterangan</p>
					</div>
				</div>
				<div class="card-galeri">
					<div class="image-box">
						<img src="gambar/proker/dummy.png">
					</div>
					<div class=" content">
						<h2>Judul</h2>
						<p>Keterangan</p>
					</div>
				</div>
				<div class="card-galeri">
					<div class="image-box">
						<img src="gambar/proker/dummy.png">
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

	<!-- jarak -->
	<div>

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>







	<!-- bootstrap -->
	<div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
			integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
		</script>
		<script src="index/index.js"></script>
		<script src="navbar/navbar.js"></script>

		<!-- JavaScript WOW.js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>

		<!-- owl carousel -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
		<script src="owlcarousel/js/owl.carousel.min.js"></script>
		<script src="owlcarousel/js/script.js"></script>
	</div>
</body>

</html>