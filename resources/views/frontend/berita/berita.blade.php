<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kerohanian Hindu Smansa</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('frontend/navbar/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/berita/berita.css') }}">
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
        <div class="">
            <div class="gambar-atas"></div>
            <div class="judul_tentang">
                <h1>Berita Terkini</h1>
            </div>  
        </div>
        {{-- end gambar atas --}}
        {{-- @foreach ($artikel->take(4) as $berita)
        <div class="col-lg-3 col-md-3 kotak-berita">
            <div class="card img-hover-zoom" style="width: 18rem;">
                <div class="">
                    <img src="{{ asset('uploads/' . $berita->gambar_artikel) }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body link-berita text-center">
                    <h5 class="card-title">{{ $berita->judul }}</h5>
                    <p class="card-text truncated-text">
                        {{ $berita->body }}
                    </p>
                    <a href="{{ route('berita.show', ['id' => $berita->id]) }}" class="btn ">Selengkapnya</a>
                </div>
            </div>
        </div>        
    @endforeach --}}
        <div class="container">
          @foreach ($artikel as $berita)
          <div class="row" style="margin-top: 20px">
            <div class="col-4">
              <img src="{{ asset('uploads/' . $berita->gambar_artikel) }}" alt="" width="350px">
            </div>
            <div class="col-8">
             <h4>{{ $berita->judul }}</h4>
             <p>{{ $berita->created_at->format('d F Y') }}</p>
             <p class="truncated-text">{{ $berita->body }}</p>
             <button type="button" class="btn btn-warning">
                <a href="{{ route('frontend.berita.detail', ['id' => $berita->id]) }}" style="text-decoration:none; color:black;">Selengkapnya</a>
             </button>
            </div>
          </div>
          @endforeach
        </div>
        





    
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