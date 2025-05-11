@extends('layout')

@section('content')
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container"> 
          <a class="navbar-brand " href="index.html"> <img src="{{ asset('assets/images/logo_sdv.jpeg') }}" alt="logo" width="100" height="50"></a>
          <div class="contact_nav">
            <a href="">
              
              <span>
                
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Saran dan Masukan
              </span>
            </a>
            
          </div>
          
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand navbar_brand_mobile" href="index.html"> <img src="{{ asset('assets/images/logo_sdv.jpeg') }}" alt="logo" width="100" height="50"> </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/payment">Pembayaran IPL</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Laporan Keuangan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kontak Darurat</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
                
            </div>
          </div>
          
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>Layanan <span>Warga</span></h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="{{ asset('assets/images/home.png') }}" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Pendaftaran Warga Baru
              </h5>
              <p>
                
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="{{ asset('assets/images/iuran.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Pembayaran Iuran
              </h5>
              <p>
                
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="{{ asset('assets/images/phone.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Kontak Darurat
              </h5>
              <p>
                
              </p>
            </div>
          </div>
        </div>
        
      </div>
      <div class="btn-box">
        
      </div>
    </div>
  </section>

  <!-- end service section -->

<!-- about section -->

<section class="about_section layout_padding">
  <div class="container  ">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>Gabung Grup <span>Whatsapp</span></h2>
          </div>
          <p>
            kenal kami lebih dekat di whatsapp grup warga San Dramaga Village
dengan 100 Anggota Warga
          </p>
          <a href="">
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
            Gabung Grup
          </a>
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="{{ asset('assets/images/group.jpg') }}" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->
  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding2">
      <div class="container">
        <div class="info_logo">
          <a class="navbar-brand" href="index.html"> San Dramaga Village Residence </a>
        </div>
        <div class="info_main">
          <div class="row">
            
            <div class="col-md-3 col-lg-5">
              <h5>
                Alamat
              </h5>
              <p>
                Jl. Cibeureum Tanjakan No.6, RT.17/RW.5, Sinar Sari, Kec. Dramaga, Kab. Bogor, Prov. Jawa Barat, Indonesia
              </p>
            </div>
            
            <div class="col-md-3 col-lg-3">
              <div class="info_link-box">
                <h5>
                  Kontak Darurat
                </h5>
                <ul>
                  <li class=" active">
                    <a href="#" class="link-box">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span>
                        Call +01 1234567890
                      </span>
                    </a>
                  </li>
                  <li class="">
                    <a href="#" class="link-box">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span>
                        Call +01 1234567890
                      </span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-lg-3">
              <div class="info_link-box">
                <h5 style="color: #252525;">
                  Kontak Darurat
                </h5>
                <ul>
                  <li class=" active">
                    <a href="#" class="link-box">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span>
                        Call +01 1234567890
                      </span>
                    </a>
                  </li>
                  <li class="">
                    <a href="#" class="link-box">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span>
                        Call +01 1234567890
                      </span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

@endsection
