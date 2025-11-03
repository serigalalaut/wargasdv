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
                <li class="nav-item">
                  <a class="nav-link" href="/aspirasi-warga">Aspirasi Warga</a>
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
        <h2>Rekap Pembayaran IPL Warga<span> San Dramaga Village</span> 2025</h2>
      </div>
      
      <div class="row">
        
        
        <div class="col-sm-6 col-md-12">
          <div class="box ">
            <div class="img-box">
              <img src="{{ asset('assets/images/iuran.png') }}" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Iuran Pengelolaan Lingkungan Bulan {{ date('F Y', strtotime(env('period'))) }}
              </h5>
              <br>
              <p>
              <h2><strong>Rp. {{ number_format($total, 0, ',', '.') }}</strong></h2>
              <br>
              Pembayaran Terkonfirmasi :<strong> {{$total_warga}} </strong> Warga <br>
              Pembayaran Belum Terkonfirmasi :<strong> {{$total_warga_belum}} </strong> Warga <br>
             
            </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-12" style="margin-top:15px">
        <h5>Rekap Pembayaran IPL</h5>
        <p style="font-size: 10px;"><i>jika menggunakan hp, scroll ke samping untuk melihat data selengkapnya</i></p>
            <div style="overflow-x:auto;">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th rowspan="2">Nomor Rumah</th>
                        <th colspan="8">Bulan</th>
                        
                    </tr>
                   <tr>
                    <th>Juni</th>
                    <th>Juli</th>
                    <th>Agustus</th>
                    <th>September</th>
                    <th>Oktober</th>
                    <th>November</th>
                    <th>Desember</th>
                   </tr>
                   </thead>
                    @php
                        $blok = '';
                    @endphp
                    @foreach ($list as $item)
                        @if($blok != $item->blok)
                            <tr style="background-color: #f0f0f0; text-align: left; font-weight: bold;">
                                <td colspan="8" >Blok {{ $item->blok }}</td>
                            </tr>
                            @php
                                $blok = $item->blok;
                            @endphp
                        @endif
                        <tr>
                            <td>{{ $item->home_no }} @if ($item->is_security == true) <i class="fa fa-info"><b> Keamanan Saja</b></i> @endif </td>
                            <td>{{ $item->Juni }}</td>
                            <td>{{ $item->Juli }}</td>
                            <td>{{ $item->Agustus }}</td>
                            <td>{{ $item->September }}</td>
                            <td>{{ $item->Oktober }}</td>
                            <td>{{ $item->November }}</td>
                            <td>{{ $item->Desember }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
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

  <style>
    .payment-list{
        width: 100%;
        font-size: large;
        height: 50px;
        text-align: left;
        margin-bottom: -6px;
        font-weight: 600;
        padding-left: 20px;
        border-color: #f0f0f0;
        border-bottom: none;
        border-right: none;
    }

    .payment-list:hover{
        border: none;
    }

    .payment-content{
        padding-left: 20px;
        margin: 20px 20px 20px 0px;
    }
    .payment-content a {
        display: inline-block;
        padding: 10px 35px;
        background-color: #fecf39;
        color: #ffffff;
        border-radius: 0px;
        -webkit-transition: all .3s;
        transition: all .3s;
        border: 1px solid #fecf39;
        margin-top: 15px;
        width: 100%;
        text-align: center;
        font-weight: 600;
    }
 
  </style>
  <script>
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(function() {
            alert('Nomor rekening berhasil disalin: ' + text);
        }, function(err) {
            console.error('Gagal menyalin teks: ', err);
        });
    }

    function copyToClipboardTelp(text) {
        navigator.clipboard.writeText(text).then(function() {
            alert('Nomor telepon berhasil disalin: ' + text);
        }, function(err) {
            console.error('Gagal menyalin teks: ', err);
        });
    }
</script>
@endsection
