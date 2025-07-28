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
        <h2>Portal Pembayaran IPL Warga<span> San Dramaga Village</span></h2>
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
              Rekap Pembayaran IPL 2025: <a href="/rekap-ipl">Klik Untuk Melihat</a>
            </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6" style="margin-top: 10px;">
            <div class="card">
                <div class="card-header" style="background-color: #fecf39; color: white; font-weight: 600;font-size: 20px;">
                    Iuran Pengelolaan Lingkungan
                  </div>
                  <div class="card-body">
                    <h3 style="font-weight: bold; color: #fecf39; padding:0px 0px 13px 0px">Detail Pembayaran</h3>
                    <div class="payment-details">
                        
                        <table>
                                <td style="padding:10px 0px 0px 0px;">Pembayaran Kebersihan</td>
                                <td style="padding:10px 0px 0px 0px;">:</td>
                                <td></td>
                                <td style="padding:10px 0px 0px 10px;">Rp. <strong>30.000</strong></td>
                            </tr>
                            <tr>
                                <td style="padding:10px 0px 0px 0px;">Pembayaran Keamanan</td>
                                <td style="padding:10px 0px 0px 0px;">:</td>
                                <td></td>
                                <td style="padding:10px 0px 0px 10px;">Rp. <strong>75.000</strong></td>
                            </tr>
                            <tr>
                                <td style="padding:10px 0px 0px 0px;">Penerangan Jalan Umum</td>
                                <td style="padding:10px 0px 0px 0px;">:</td>
                                <td></td>
                                <td style="padding:10px 0px 0px 10px;">Rp. <strong>10.000</strong></td>
                            </tr>
                            <tr>
                                <td style="padding:10px 0px 20px 0px;">Kas Warga</td>
                                <td style="padding:10px 0px 20px 0px;">:</td>
                                <td></td>
                                <td style="padding:10px 0px 20px 10px;">Rp. <strong>10.000</strong></td>
                            </tr>
                            <tr style="border-top: 1px solid #000; padding-top: 10px;padding-bottom: 20px;">
                                
                            </tr>
                            <tr>
                                <td style="padding:20px 0px 0px 0px;"><strong>Total Iuran</strong></td>
                                <td style="padding:20px 0px 0px 0px;">:</td>
                                <td></td>
                                <td style="padding:20px 0px 0px 10px;">Rp. <strong>125.000</strong></td>
                            </tr>
                        </table>
                    </div>
                  </div>
            </div>


        </div>
        
        
        <div class="col-sm-6 col-md-6" style="margin-top: 10px;">
            <div class="card">
                <div class="card-header" style="background-color: #fecf39; color: white; font-weight: 600;font-size: 20px;">
                    Pilih Metode Pembayaran
                  </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <!--<div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            
                            <button class="accordion-button collapsed payment-list" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #fff;">
                            <img src="{{ asset('assets/images/logo_dana.png') }}" alt="" width="50" height="15" style="margin-right: 10px;"> Qris DANA
                            </button>
                            
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse payment-content" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <h3 style="font-weight: bold; color: #fecf39;">Tata Cara Pembayaran</h3>
                                <br>
                                <h6 style="font-weight: bold;">QRIS DANA</h6>
                                <p>Scan QR di Aplikasi Dana</p>
                                <p><img src="{{ asset('assets/images/dana.jpeg') }}" alt="" width="100%"></p>
                                <br>
                                <p><strong>Disclaimer</strong> : Pembayaran IPL bisa beberapa bulan sekaligus</p>

                                <p>
                                    <div class="detail-box">            
                                        <a href="https://admin.wargasdv.com/payment-confirmation?type=dana">
                                            Konfirmasi Pembayaran
                                        </a>
                                    </div>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed payment-list" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: #fff;">
                            <img src="{{ asset('assets/images/logo_gopay.png') }}" alt="" width="50" height="22" style="margin-right: 10px;"> Qris Gopay
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse payment-content" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        <h3 style="font-weight: bold; color: #fecf39;">Tata Cara Pembayaran</h3>
                                <br>
                                <h6 style="font-weight: bold;">QRIS Gopay</h6>
                                <p>Scan QR di AplikasiGopay</p>
                                <p><img src="{{ asset('assets/images/gopay.jpeg') }}" alt="" width="100%"></p>
                                <br>
                                <p><strong>Disclaimer</strong> : Pembayaran IPL bisa beberapa bulan sekaligus</p>
                                <p>
                                    <div class="detail-box">            
                                        <a href="https://admin.wargasdv.com/payment-confirmation?type=gopay">
                                            Konfirmasi Pembayaran
                                        </a>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>-->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed payment-list" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="background-color: #fff;">
                            <img src="{{ asset('assets/images/jago.jpg') }}" alt="" width="50" height="15" style="margin-right: 10px;"> Transfer Bank Jago
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse payment-content" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    <b>Nama Rekening</b> : {{$namerek}}
                                </p>
                                <p>
                                    <b>Nomor Rekening</b> : {{$norek}} <i class="fa fa-copy" aria-hidden="true" onclick="copyToClipboard('{{$norek}}')" style="cursor: pointer;"></i>
                                    
                                </p>
                                <p>
                                    Harap ketikan  <strong>BLOK & NO RUMAH</strong> di Form <strong>Konfirmasi Pembayaran</strong>
                                </p>
                                <br>
                                <p><strong>Disclaimer</strong> : Pembayaran IPL bisa beberapa bulan sekaligus</p>
                                <p>
                                    <div class="detail-box">            
                                        <a href="https://admin.wargasdv.com/payment-confirmation?type=jago">
                                            Konfirmasi Pembayaran
                                        </a>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed payment-list" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive" style="background-color: #fff;">
                            <img src="{{ asset('assets/images/code.jpg') }}" alt="" width="50" height="15" style="margin-right: 10px;"> Bayar Cash
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse payment-content" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            <div class="accordion-body">
                           
                            <p><strong>Disclaimer</strong> : Pembayaran IPL bisa beberapa bulan sekaligus</p>
                                <p>
                                    <div class="detail-box">            
                                        <a href="https://wa.me/6281385548571">
                                            Hubungi Admin
                                        </a>
                                    </div>
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFivee">
                        <button class="accordion-button collapsed payment-list" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFivee" aria-expanded="false" aria-controls="flush-collapseFivee" style="background-color: #fff;">
                        <img width="50" height="15" style="margin-right: 10px;"> 
                    </h2>
                    <div id="flush-collapseFivee" class="accordion-collapse collapse payment-content" aria-labelledby="flush-headingFivee" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <br>
        
        <div class="col-sm-6 col-md-12" style="margin-top:15px">
        <h5>Status Pembayaran</h5>
        <p style="font-size: 10px;"><i>jika menggunakan hp, scroll ke samping untuk melihat data selengkapnya</i></p>
            <div style="overflow-x:auto;">
                <table class="table table-bordered">
                    <tr>
                        <th>Nomor Rumah</th>
                        <th>Nominal</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                    </tr>
                    @php
                        $blok = '';
                    @endphp
                    @foreach ($list as $item)
                        @if($blok != $item->blok)
                            <tr style="background-color: #f0f0f0; text-align: left; font-weight: bold;">
                                <td colspan="4" >Blok {{ $item->blok }}</td>
                            </tr>
                            @php
                                $blok = $item->blok;
                            @endphp
                        @endif
                        <tr>
                            <td>{{ $item->home_no == 'B1-02' ? $item->home_no . " (Keamanan + kas warga)": $item->home_no}}</td>
                            <td>Rp. {{ number_format($item->nominal, 0, ',', '.') }}</td>
                            <td>{{ $item->status == 'Lunas' ? "Terkonfirmasi": "Belum Terkonfirmasi" }}</td>
                            <td>
                              @if($item->is_deposit == 2) <p>Kosong</p>  
                              @elseif($item->is_deposit == 3) <b>Deposit</b> 
                              @elseif($item->is_deposit == 0) <b>@if($item->is_addon == 1) + {{ $item->note }} @endif</b>
                              @endif
                            </td>
                              
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
