<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kerohanian Hindu Smansa</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="{{ asset('frontend/navbar/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/kontak/kontak.css') }}">
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


<div class="container">
  <div class="row tengah">
    <div class="col-md-6 col-sm-12 border1">
      <div class="bungkus bungkus1">
        <div class="text-center mt-4 name">
            Find Us At
        </div>
        <div class="p-3 mt-3" >
            <div class="form-field d-flex align-items-center">
              <a href="https://www.instagram.com/khsmansa/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==" class="medsos">
                <i class="fa-brands fa-instagram icon" ></i>
                  <h1>Instagram</h1>
              </a>
            </div>
            <div class="form-field d-flex align-items-center">
              <a href="https://www.facebook.com/groups/113621589383/" class="medsos">
                <i  class="fa-brands fa-facebook icon" ></i>
                  <h1>Facebook</h1>
              </a>
            </div>
            <div class="form-field d-flex align-items-center">
              <a href="https://api.whatsapp.com/send/?phone=6282359365098&text&type=phone_number&app_absent=0" class="medsos">
                <i  class="fa-brands fa-whatsapp icon"></i>
                  <h1>Whatsapp</h1>
              </a>
            </div>
           
        </div>
    </div>
    </div>
    <div class="col-md-6 col-sm-12 border2">
      <div class="bungkus bungkus2">
        <div class="text-center mt-4 name">
            Kotak Saran
        </div>
        <div class="p-3 mt-3" >
          <div class="form-field d-flex align-items-center">
            <form action="{{ route('kontak.store') }}" method="POST"> <!-- Pastikan untuk menyesuaikan dengan route yang sesuai -->
              @csrf <!-- Tambahkan token CSRF untuk Laravel -->
              <textarea name="isi_saran" id="isi_saran" cols="30" rows="10"></textarea>
              <button type="submit" class="submit">Kirim Saran</button> <!-- Tombol untuk mengirim form -->
            </form>
          </div>
          
         
      </div>
        <!-- <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
        </div> -->
    </div>
    </div>

  </div>
</div>
        {{-- kontak --}}
        {{-- <div class="container-sm kontak">
          <div class="row d-flex justify-content-center align-item-center kotak">
            <div class="col-md-6 content">
              <h1>hello world</h1>
              <h1>hello world</h1>
              <h1>hello world</h1>
            </div>
            <div class="col-md-6 content">
              <h1>hello world</h1>
              <h1>hello world</h1>
              <h1>hello world</h1>
            </div>
          </div>
        </div> --}}
        {{-- end contact --}}
    





    
        <!-- jarak -->

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