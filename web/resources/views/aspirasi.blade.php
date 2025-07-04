@extends('layout')

@section('content')

<div class="hero_areaa">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid header_top_container"> 
          <a class="navbar-brand " href="/">  <img src="{{ asset('assets/images/logo_sdv.jpeg') }}" alt="logo" width="100" height="50"> </a>
          <div class="contact_nav">
            <a href="">
              
              <span>
                
              </span>
            </a>
            <a href="/aspirasi-warga">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Aspirasi Warga
              </span>
            </a>
            
          </div>
          
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand navbar_brand_mobile" href="/">  <img src="{{ asset('assets/images/logo_sdv.jpeg') }}" alt="logo" width="100" height="50"> </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/ipl">Pembayaran IPL</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/laporan">Laporan</a>
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
    
  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>Portal Aspirasi Warga<span> San Dramaga Village</span></h2>
      </div>
      
      <div class="row">
      <div class="col-sm-6 col-md-12">
        <h3 style="color: green;text-align: center;font-weight: bold">@if(session('success')) {{ session('success') }} @endif</h3>
         <br>
           <form action="/send-aspirasi" method="post">
            @csrf
            <textarea style="height:300px" name="aspirasi" id="aspirasi" class="form-control" placeholder="Masukan aspirasi, keluhan, masukan atau saran Anda" required></textarea>
            <br>
            <button type="submit" class="btn btn-primary" style="background-color: #fecf39; border: none;">Kirim Aspirasi</button>
          </form>
        </div>
    </div>
  </section>

  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding2">
      <div class="container">
        <div class="info_logo">
          <a class="navbar-brand" href="/"> San Dramaga Village </a>
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
            
            <div class="col-md-3 col-lg-5">
              <div class="info_link-box">
                <h5>
                  Kontak Darurat
                </h5>
                <ul>
                  <li class=" active">
                    <a class="link-box">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span>
                        Damkar Ciomas 02517589113 <i class="fa fa-copy" aria-hidden="true" onclick="copyToClipboardTelp('02517589113')" style="cursor: pointer;"></i>
                      </span>
                    </a>
                  </li>
                  <li class="">
                    <a class="link-box">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span>
                      Polsek Dramaga 02518624107 <i class="fa fa-copy" aria-hidden="true" onclick="copyToClipboardTelp('02518624107')" style="cursor: pointer;"></i>
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
    </div>
  </section>

  <!-- end info section -->

@endsection
