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
        <h2>Laporan Pengeluaran <span> San Dramaga Village</span></h2>
      </div>
      <br><br>
      
      <div class="row">
      
        <div class="col-md-6">
          <input type="month" class="form-control" id="locfilter" placeholder="Cari Data" style="margin-bottom: 10px;" value="{{ date('Y-m') }}">
          <a href="/pengeluaran?period=" class="btn btn-primary" onclick="this.href='/pengeluaran?period=' + document.getElementById('locfilter').value" style="width: 100%; background-color: #fecf39; border: none;">Cari Data</a>
        </div>
        
      </div>
      <br>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Nominal</th>
            <th>Bukti Pembayaran</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pengeluaran as $item)
            <tr>
              <td>{{ date('d F Y', strtotime($item->created_at)) }}</td>
              <td>{{ $item->title }}</td>
              <td>Rp. {{ number_format($item->nominal, 0, ',', '.') }}</td>
              <td><a href="https://admin.wargasdv.com/storage/{{ $item->media_file }}" target="_blank">Lihat Bukti</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
        
      </div>
      <div class="btn-box">
        
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
                    <div class="link-box">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span>
                        Damkar Ciomas 02517589113 <i class="fa fa-copy" aria-hidden="true" onclick="copyToClipboard('02517589113')" style="cursor: pointer;"></i>
                      </span>
                    </div>
                  </li>
                  <li class="">
                    <div class="link-box">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span>
                      Polsek Dramaga 02518624107 <i class="fa fa-copy" aria-hidden="true" onclick="copyToClipboard('02518624107')" style="cursor: pointer;"></i>
                      </span>
                    </div>
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

  <style>
    .payment-list{
        width: 100%;
        font-size: large;
        height: 50px;
        text-align: left;
        border: none;
        margin-bottom: -6px;
        font-weight: 600;
        padding-left: 20px;
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
            alert('Nomor telepon berhasil disalin: ' + text);
        }, function(err) {
            console.error('Gagal menyalin teks: ', err);
        });
    }
</script>
@endsection
