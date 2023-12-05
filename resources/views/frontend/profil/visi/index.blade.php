<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kerohanian Hindu Smansa</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('frontend/navbar/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/profil/tentang/visi.css') }}">
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
                <h1>VISI - KHS</h1>
            </div>  
        </div>
        {{-- end gambar atas --}}
    
        {{--content tentang  --}}
        <div class="container content">
            <div class="row">
                <div class="col-md-9">
                    <!-- Kolom pertama (Profil) -->
                    <div class="tentang">
                        <h1 style="text-align:center; justify; line-height:35px; font-size:30px;">
                            VISI KEROHANIAN HINDU SMANSA
                        </h1>
                        <p style="text-align: center; margin-top:20px; line-height:30px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id qui amet aliquid voluptas delectus doloremque tempore tenetur soluta laboriosam accusamus excepturi minus incidunt esse consectetur, in corrupti rem magni libero!
                        Laborum pariatur minima officia mollitia sequi culpa laboriosam numquam et, cumque qui voluptatum facilis unde similique, debitis obcaecati, consequatur autem tenetur repudiandae repellat. Ipsam consequatur, dignissimos porro ratione quasi perferendis.
                        Nisi odio earum autem ad eveniet cupiditate cum quia sed facilis dolores. Ratione, rem sit, perspiciatis voluptate harum vero totam dolorem quo sunt fugit consectetur nesciunt. Et maiores ducimus sit!
                        Enim et explicabo nam fugit voluptate omnis velit eos modi assumenda consectetur, nulla accusamus ut eum voluptas at esse corporis culpa reiciendis, provident sint perferendis aperiam excepturi eius ducimus. Alias!
                        Recusandae, aspernatur error repudiandae quas libero dignissimos sunt voluptas rerum repellendus consequuntur soluta esse ducimus doloremque nobis iusto sit praesentium dolore iste quisquam ex? Eos nemo vel nisi odio omnis.</p>
                    </div>
                    <div class="tentang" style="margin-top: 50px">
                        <h1 style="text-align:center; justify; line-height:35px; font-size:30px;">
                            MISI KEROHANIAN HINDU SMANSA
                        </h1>
                        <p style="text-align: center; margin-top:20px; line-height:30px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id qui amet aliquid voluptas delectus doloremque tempore tenetur soluta laboriosam accusamus excepturi minus incidunt esse consectetur, in corrupti rem magni libero!
                            Laborum pariatur minima officia mollitia sequi culpa laboriosam numquam et, cumque qui voluptatum facilis unde similique, debitis obcaecati, consequatur autem tenetur repudiandae repellat. Ipsam consequatur, dignissimos porro ratione quasi perferendis.
                            Nisi odio earum autem ad eveniet cupiditate cum quia sed facilis dolores. Ratione, rem sit, perspiciatis voluptate harum vero totam dolorem quo sunt fugit consectetur nesciunt. Et maiores ducimus sit!
                            Enim et explicabo nam fugit voluptate omnis velit eos modi assumenda consectetur, nulla accusamus ut eum voluptas at esse corporis culpa reiciendis, provident sint perferendis aperiam excepturi eius ducimus. Alias!
                            Recusandae, aspernatur error repudiandae quas libero dignissimos sunt voluptas rerum repellendus consequuntur soluta esse ducimus doloremque nobis iusto sit praesentium dolore iste quisquam ex? Eos nemo vel nisi odio omnis.</p>
                    </div>
                    <!-- Tampilkan konten profil pengguna di sini -->
                </div>
                <div class="col-md-3">
                    <!-- Kolom kedua (Berita) -->
                        <div class=" justify-content-center berita d-flex flex-column align-items-center">
                            @foreach ($artikel-> take(6)  as $berita)
                    <div class=" kotak-berita" style="margin-bottom: 10px;">
                        <div class="card img-hover-zoom" style="width: 18rem;">
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