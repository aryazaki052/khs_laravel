// slider image
var carouselIndex = 0;
var images = document.querySelectorAll(".carousel img");
var indicators = document.querySelectorAll(".carousel-indicators span");

carousel();

function carousel() {
  for (var i = 0; i < images.length; i++) {
    images[i].classList.remove("active");
    images[i].style.opacity = 0;
    // Sembunyikan semua konten tulisan-slider
    document.querySelectorAll(".carousel-item")[i].classList.remove("active");
  }
  for (var i = 0; i < indicators.length; i++) {
    indicators[i].classList.remove("active");
  }

  carouselIndex++;
  if (carouselIndex > images.length) {
    carouselIndex = 1;
  }

  images[carouselIndex - 1].classList.add("active");
  images[carouselIndex - 1].style.opacity = 1;
  indicators[carouselIndex - 1].classList.add("active");

  // Tampilkan konten tulisan-slider yang sesuai dengan gambar aktif
  document.querySelectorAll(".carousel-item")[carouselIndex - 1].classList.add("active");

  setTimeout(carousel, 5000); // Ubah gambar setiap 5 detik
}

function jumpToSlide(slideIndex) {
  carouselIndex = slideIndex;
  carousel();
}