<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kerohanian Hindu Smansa</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('frontend/navbar/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/berita/detail.css') }}">
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
        {{-- font navbar --}}
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
	</div>

</head>

<body style="background-color:  rgb(238, 238, 215);">
    <div class="wrapper">
        <!-- navbar -->
        @include('frontend.navbar')
        {{-- navbar end --}}

        {{-- gambar atas --}}
        <div class="gambar-atas">
          <div class="container">
              <div class="ro">
                <div class="col-md-1 col-sm-2 col-xs-2 tanggal">
                  <h1>{{ date('d', strtotime($artikel->created_at)) }}</h1>
                  <h3>{{ date('M', strtotime($artikel->created_at)) }}</h3>
                </div>
                <div class="judul_tentang col-md-11 col-sm-10 col-xs-10">
                    <h1>{{ $artikel->judul }}</h1>
                </div>  
            </div>
          </div>
        </div>
        <div class="container gambar">
          <div class="gambar-berita">
            <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" width="1000px">
            <h4 style="text-align: center">"{{ $artikel->judul }}"</h4>
            @if ($artikel->kategori_id == 2) <!-- Cek apakah kategori adalah Pengumuman -->
            <a href="{{ asset('uploads/' . $artikel->file_dokumen) }}" target="_blank">Silahkan Klik Untuk Mendownload File Pengumuman</a>
            @else
            
             @endif
            <p class="deskripsi" style="text-align: left;">{!! $artikel->body !!}</p>

          </div>
        </div>

       
        {{-- end gambar atas --}}
    





    
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
    </div>







	<!-- bootstrap -->
	<div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
			integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
		</script>
		<script src="{{ asset('frontend/index/index.js') }}"></script>
		<script src="{{ asset('frontend/navbar/navbar.js') }}"></script>

		<!-- JavaScript WOW.js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>

		<!-- owl carousel -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
		<script src="{{ asset('frontend/owlcarousel/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('frontend/owlcarousel/js/script.js') }}"></script>
	</div>
</body>

</html>