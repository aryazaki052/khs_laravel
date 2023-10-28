<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kerohanian Hindu Smansa</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('frontend/navbar/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/index/index.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/profil/tentang/tentang.css') }}">
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
                <h1>Tentang KHS</h1>
            </div>  
        </div>
        {{-- end gambar atas --}}
    
        {{--content tentang  --}}
        <div class="container content">
            <div class="row">
                <div class="col-md-9 tentang">
                    <!-- Kolom pertama (Profil) -->
                    <p style="text-align: justify; line-height:35px; font-size:18px;">Universitas Indonesia merupakan gabungan dari Balai Perguruan Tinggi Universitas Indonesia dan Universiteit van Indonesie. Pada awalnya, pendidikan ekonomi masih merupakan jurusan sosial ekonomi pada Fakultas Hukum dan Ilmu Pengetahuan Masyarakat. Namun tidak lama setelah UI didirikan, Departemen Pendidikan dan Kebudayaan memutuskan untuk membuka Fakultas Ekonomi untuk memberi jawaban akan kebutuhan sendiri. Berbeda dengan beberapa fakultas lain seperti Fakultas Kedokteran, Fakultas Teknik atau Fakultas Hukum di lingkungan Universitas Indonesia (UI) yang berasal dari beberapa sekolah tinggi yang sudah didirikan oleh pemerintah Hindia Belanda sejak tahun 1920-an, embrio FEUI baru muncul setelah Proklamasi Kemerdekaan Indonesia. FEUI lahir ketika Republik Indonesia baru berumur lima tahun, sehingga tak heran bila kelahiran FE UI masih dilingkupi nuansa yang kental akan Indonesia yang baru saja merdeka. Untuk menjawab tuntutan yang muncul pada masa awal kemerdekaan dan dirasa perlunya lembaga pendidikan tinggi yang dapat mencetak ahli-ahli perekonomian dan pengelolaan perusahaan untuk membangun Indonesia yang baru lepas dari penjajahan, maka kemudian didirikanlah FE UI.
                    <br> <br> Fakultas Ekonomi Universitas Indonesia (FEUI) didirikan pada tanggal 18 September 1950, ketika Jurusan Sosial Ekonomi Fakultas Hukum Universitas Indonesia (FHUI) memisahkan diri menjadi Fakultas Ekonomi (FEUI). FEUI merupakan lembaga pendidikan tinggi ekonomi yang tertua di Indonesia. Perubahan yang semakin dinamis yang menuntut persaingan baik di tingkat nasional maupun internasional, sehingga menuntut FEUI untuk bergerak dan bersaing di tingkat internasional. Dengan mengemban visi menjadi pusat pembelajaran ekonomi dan bisnis yang unggul di Asia, sejak tanggal 19 Februari 2015 FEUI resmi mengubah namanya menjadi Fakultas Ekonomi dan Bisnis Universitas Indonesia (FEB UI) dan dikukuhkan melalui  Surat Keputusan Rektor Universitas Indonesia Nomor 0382/SK/R/UI/2015.</p>
                    <!-- Tampilkan konten profil pengguna di sini -->
                </div>
                <div class="col-md-3">
                    <!-- Kolom kedua (Berita) -->
                    <h2>Berita</h2>
                        <div class="news-item">
                            <h1>Ini berita</h1>
                        </div>
                </div>
            </div>
        </div>
        

        {{-- end content tentang --}}




    
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