@extends('user.page.induk')
@section('home','active')
@section('title','SiBatik-Beranda')
@section('sweetalert::alert')
@section('content')
<div class="hero_area">
    <div class="bg-box">
      <img src="images/home.png" alt="">
    </div>
      <!-- slider section -->
      <section class="slider_section">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 col-lg-6">
                    <div class="detail-box">
                      <h1>Store Batik Indonesia</h1>
                      <p>
                        Batik adalah tentang kain cantik warisan leluhur yang sarat makna.
                        memiliki nilai seni yang tinggi dan menjadi bagian dari budaya Indonesia. Wujud hasil cipta karya seni yang adiluhung, diekspresikan pada motif kain, pakaian, sarung dan kain dekoratif lainnya. 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 col-lg-6">
                    <div class="detail-box">
                      <h1>Store Batik Indonesia</h1>
                      <p>
                        Online Store yang bergerak dibidang fashion store Batik Indonesia. Berdiri pada tanggal 8 Desember 2022. Fashion Store yang memiliki tujuan untuk menggerakkan fashion Indonesia dengan membranding Batik dalam hype di dunia.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 col-lg-6">
                    <div class="detail-box">
                      <h1>Penjualan Batik Online</h1>
                      <p>
                      Hadir tahur 2022, dengan latar belakang tugas besar mata kuliah Pemograman Web
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <ol class="carousel-indicators">
              <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
              <li data-target="#customCarousel1" data-slide-to="1"></li>
              <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
      </section>
      <!-- end slider section -->
</div>

@endsection