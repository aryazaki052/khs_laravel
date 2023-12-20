<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kerohanian Hindu Smansa</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('frontend/navbar/navbar.css') }}">
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
                    <p style="text-align: justify; line-height:35px; font-size:18px;">
                        Kerohanian Hindu SMANSA (KHS) merupakan bagian dari OSIS yang menyediakan wadah bagi siswa dan siswi Hindu di SMAN Negeri 1 Mataram, Lombok. Fokus utama KHS adalah meningkatkan kerohanian dan spiritualitas siswa yang menganut agama Hindu. Ini bukan hanya sekadar wadah ibadah, tetapi juga platform untuk mengeksplorasi dan memperdalam pemahaman terhadap ajaran dan nilai-nilai Hindu.
                        <br>
                        Singkatan KHS sendiri adalah representasi dari semangat dan komitmen untuk membentuk komunitas yang kuat dan harmonis di tengah keragaman agama Hindu. Tujuannya jelas: memberikan dukungan spiritual dan sosial kepada siswa yang menganut agama Hindu, serta membuka peluang bagi mereka yang memiliki minat khusus dalam aspek keagamaan seperti Dharma Wacana, Kidung, dan berbagai kegiatan lainnya.
                        <br>
                        Program-program KHS, seperti Dharma Santi, Ogoh-Ogoh, Sivaratri, dan Dharma Tula, telah menjadi landasan utama dalam menciptakan momen berharga yang memperkaya pengalaman spiritual siswa. Selain itu, KHS juga menjadi wadah bagi siswa yang ingin mengasah dan mengekspresikan bakat mereka dalam ranah keagamaan Hindu.
                        <br>
                        KHS memperlihatkan keanggotaannya akan pentingnya perayaan kehidupan sehari-hari melalui upacara-upacara dan ritual yang menghidupkan kembali tradisi Hindu. Tempat ini memungkinkan para siswa untuk mengeksplorasi nilai-nilai dan ajaran kuno dengan cara yang sesuai dengan zaman modern. 
                        <br>
                        Sebagai bagian dari komunitas Hindu, KHS merangkul keberagaman dan inklusi. Mereka memahami bahwa keberagaman adalah aset yang memperkaya pengalaman spiritual dan kemanusiaan. Maka dari itu, mereka menerima setiap individu dengan semangat saling pengertian dan hormat.
                        <br>
                        Melalui diskusi, seminar, dan kegiatan sosial, KHS membantu siswa untuk mengaplikasikan ajaran Hindu dalam kehidupan sehari-hari. Mereka berusaha untuk memperkaya hubungan interpersonal, memberikan solusi bagi tantangan spiritual, dan menyebarkan kedamaian serta harmoni dalam komunitas.
                        <br>
                        Dengan semangatnya yang penuh kehangatan, KHS membuka pintu bagi siapa pun yang ingin menjalani perjalanan spiritual yang mendalam. Mereka mendorong pengembangan diri siswa melalui meditasi, yoga, dan berbagai praktik spiritual lainnya, membantu menciptakan keseimbangan dan kedamaian batin.
                        <br>
                        Kerohanian Hindu SMANSA di Maaram, Lombok, adalah tempat di mana nilai-nilai spiritual, keberagaman, dan kehangatan bertemu dalam kesatuan yang menginspirasi. Ini bukan hanya tempat ibadah; ini adalah rumah bagi pengembangan diri, pertumbuhan spiritual, dan penemuan nilai-nilai yang mengangkat. Ayo sambut kedamaian dan cahaya spiritual bersama-sama di KHS!</p>
                    <!-- Tampilkan konten profil pengguna di sini -->
                </div>
                <div class="col-md-3">
                    <!-- Kolom kedua (Berita) -->
                        <div class=" justify-content-center berita d-flex flex-column align-items-center">
                            @foreach ($artikel-> take(6)  as $berita)
                    <div class="berita1" style="margin-bottom: 10px;">
                        <div class="card img-hover-zoom " style="width: 18rem; border-radius: 20px 20px 20px 20px;">
                            <div class="">
                                <img src="{{ asset('uploads/' . $berita->gambar_artikel) }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body link-berita text-center">
                                <a href="{{ route('frontend.berita.detail', ['id' => $berita->id]) }}" class="btn "> <p class="card-title text-center">{{ $berita->judul }}</p></a>
                            </div>
                        </div>
                    </div>        
                @endforeach
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