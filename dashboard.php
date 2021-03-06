<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="cardmedia.css">
  <link rel="stylesheet" href="testimonialcard.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


  <style>
    .h2 {
      min-height: 20vh;
    }

    .h3 {
      min-height: 30vh;
    }

    .h4 {
      min-height: 40vh;
    }

    .h5 {
      min-height: 50vh;
    }

    .h6 {
      min-height: 60vh;
    }

    .h7 {
      min-height: 70vh;
    }

    .h8 {
      min-height: 80vh;
    }

    .h9 {
      min-height: 90vh;
    }

    .nav-trans {
      background-color: transparent !important;
      padding: 25px;
    }

    .navbar-fixed-top.scrolled {
      background-color: rgba(0, 0, 0, 0.5) !important;
      padding: 10px;
      transition: background-color 200ms linear;
    }

    .active {
      background-color: transparent;
      border-bottom: 2px solid white;
    }

    .active a {
      background-color: transparent !important;
    }

    .nav li a:hover {
      background-color: transparent !important;
      text-shadow: 0px 0px 10px rgb(7, 92, 250);
      transition: text-shadow 0.5s linear;
    }

    .footer-menu li {
      margin-bottom: 10px;
      list-style-type: none;
    }

    .footer-menu li a:hover {
      border-bottom: 1px solid white;
    }

    .footer-menu li a {
      color: white;
      text-decoration: none;
    }

    .social-icon:hover{
      border: none;
      opacity: 0.5;
      transition: 0.5s linear;
    }

    .social-icon{
      margin-right: 5px;
    }
  </style>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="skin-blue layout-top-nav">
  <header class="main-header">
    <nav class="navbar navbar-fixed-top nav-trans">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand">
            STTS
          </a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapseMenu"><i
              class="fa fa-bars"></i></button>
        </div>

        <div class="collapse navbar-collapse" id="collapseMenu">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Agenda <i class="caret"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">News</a></li>
                <li><a href="#">Events</a></li>
              </ul>
            </li>
            <li class="active"><a href="#">Berita</a></li>
            <li><a href="#">Testimoni</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aktivitas Mahasiswa <i class="caret"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="hima.html">Himpunan Mahasiswa (Hima)</a></li>
                <li><a href="#">Unit Kegiatan Mahasiswa (UKM)</a></li>
                <li><a href="ukk.html">Unit Kegiatan Kerohanian (UKK)</a></li>
                <li><a href="bem.html">Badan Eksekutif Mahasiswa (BEM)</a></li>
              </ul>
            </li>
            <li><a href="#">Akademik</a></li>
            <li><a href="#">Dosen</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bahasa <i class="caret"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Bahasa Indonesia</a></li>
                <li><a href="#">English</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="wrapper">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item">
          <img src="bg1.png" alt="First slide">
        </div>
        <div class="item">
          <img src="bg2.png" alt="Second slide">
        </div>
        <div class="item active">
          <img src="bg3.png" alt="Third slide">
        </div>
      </div>
    </div>

    <div class="row" style="background-color: white;">
      <div class="container">
        <div class="text-center">
          <h1>Agenda</h1>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="card-media">
            <div class="card-media-object-container">
              <div class="card-media-object" style="background-image: url('bg1.png')"></div>
              <span class="card-media-object-tag subtle">HOT</span>
            </div>
            <div class="card-media-body">
              <div class="card-media-body-top">
                <span class="subtle"><i class="fa fa-calendar"></i> Jumat, 29 Nov 2019</span>
              </div>
              <span class="card-media-body-heading">
                Retret KMK 2019
              </span>
              <div class="card-media-body-supporting-bottom">
                <span class="card-media-body-supporting-bottom-text subtle">Mezzanine, San Francisco, CA</span>
              </div>
              <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                <span class="card-media-body-supporting-bottom-text subtle">#Retret #Kmk</span>
                <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">View
                  Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="card-media">
            <div class="card-media-object-container">
              <div class="card-media-object" style="background-image: url('bg2.png')"></div>
              <span class="card-media-object-tag subtle">HOT</span>
            </div>
            <div class="card-media-body">
              <div class="card-media-body-top">
                <span class="subtle"><i class="fa fa-calendar"></i> Senin, 18 Nov 2019</span>
              </div>
              <span class="card-media-body-heading">
                ITRC
              </span>
              <div class="card-media-body-supporting-bottom">
                <span class="card-media-body-supporting-bottom-text subtle">Auditorium STTS</span>
              </div>
              <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                <span class="card-media-body-supporting-bottom-text subtle">#robotik #lomba</span>
                <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">View
                  Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="card-media">
            <div class="card-media-object-container">
              <div class="card-media-object" style="background-image: url('bg3.png')"></div>
              <span class="card-media-object-tag subtle">HOT</span>
            </div>
            <div class="card-media-body">
              <div class="card-media-body-top">
                <span class="subtle"><i class="fa fa-calendar"></i> Sabtu, 2 Nov 2019</span>
              </div>
              <span class="card-media-body-heading">
                Workshop Short Movie HIMA SIB
              </span>
              <div class="card-media-body-supporting-bottom">
                <span class="card-media-body-supporting-bottom-text subtle">Gedung E lt.4</span>
              </div>
              <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                <span class="card-media-body-supporting-bottom-text subtle">#workshop #shortmovie</span>
                <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">View
                  Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="card-media">
            <div class="card-media-object-container">
              <div class="card-media-object" style="background-image: url('bg1.png')"></div>
              <span class="card-media-object-tag subtle">HOT</span>
            </div>
            <div class="card-media-body">
              <div class="card-media-body-top">
                <span class="subtle"><i class="fa fa-calendar"></i> Jumat, 25 Okt 2019</span>
              </div>
              <span class="card-media-body-heading">
                VISUAREKAN 2019
              </span>
              <div class="card-media-body-supporting-bottom">
                <span class="card-media-body-supporting-bottom-text subtle">Auditorium STTS</span>
              </div>
              <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                <span class="card-media-body-supporting-bottom-text subtle">#visua #rekan</span>
                <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">View
                  Details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <h3><a href="#" class="btn btn-info btn-lg">View All</a></h3>
        </div>
      </div>
    </div>

    <div class="row bg-light-blue">
      <div id="carousel-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="item">
            <img src="jur1.png" alt="First slide">
            <div class="carousel-caption">
              <h3>Teknik Informatika</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda deserunt dolor mollitia! Rerum
                magni molestiae error aliquid, iusto modi temporibus culpa facere ad delectus, tempore doloribus natus,
                earum voluptates quidem!</p>
              <a href="#" class="btn btn-rounded btn-info">See More</a>
            </div>
          </div>
          <div class="item">
            <img src="jur2.png" alt="Second slide">
            <div class="carousel-caption">
              <h3>Desain Komunikasi Visual</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda deserunt dolor mollitia! Rerum
                magni molestiae error aliquid, iusto modi temporibus culpa facere ad delectus, tempore doloribus natus,
                earum voluptates quidem!</p>
              <a href="#" class="btn btn-rounded btn-info">See More</a>
            </div>
          </div>
          <div class="item active">
            <img src="jur3.png" alt="Third slide">
            <div class="carousel-caption">
              <h3>Sistem Informasi Bisnis</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda deserunt dolor mollitia! Rerum
                magni molestiae error aliquid, iusto modi temporibus culpa facere ad delectus, tempore doloribus natus,
                earum voluptates quidem!</p>
              <a href="#" class="btn btn-rounded btn-info">See More</a>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-generic" data-slide="prev">
          <span class="fa fa-angle-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-generic" data-slide="next">
          <span class="fa fa-angle-right"></span>
        </a>
      </div>
    </div>

    <div class="row h8" style="background-color: white">
      <div class="container">
        <div class="text-center">
          <h1>Testimoni</h1>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="testimonial">
            <div class="testimonial-body">
              <p>Menurut saya, setelah berkuliah selama 3,5 tahun di STTS sangatlah berkesan
                meskipun memang kadang saya kurang merasa tertantang dengan tugas-tugas yang diberikan.
                Yang paling saya ingat di tiap semester ketika sudah melewati UTS, jam tidur saya berkurang
                karena proyek yang banyak sekali.
              </p>
              <i class="fa fa-quote-right"></i>
            </div>
            <div class="testimonial-footer">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="user" />
              <h3>Monica Chandra</h3>
              <h4>Google.com</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="testimonial">
            <div class="testimonial-body">
              <p>STRESS AKU!!!</p>
              <i class="fa fa-quote-right"></i>
            </div>
            <div class="testimonial-footer">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="user" />
              <h3>Rommy Christensen</h3>
              <h4>Tokopedia</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-sm-12">
          <div class="testimonial">
            <div class="testimonial-body">
              <p>
                Yang sangat berkesan adalah bukan pelajarannya, tetapi pengalaman dengan teman-teman.
                Mengerjakan tugas praktikum yang sulit dan banyak sampai menginap di kos teman. Sudah biasa
                untuk tidak tidur demi mengerjakan tugas-tugas praktikum. STTS membuat hidup saya lebih berwarna!
              </p>
              <i class="fa fa-quote-right"></i>
            </div>
            <div class="testimonial-footer">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="user" />
              <h3>Dewangga Galih</h3>
              <h4>Bukalapak</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row bg-light-blue" style="padding: 10px;">
      <div class="container">
        <div class="text-center">
          <a href="#" class="btn btn-success btn-lg">Join Us</a>
        </div>
      </div>
    </div>

    <div class="row h5" style="background-color: black; color: white; margin: 0px">
      <div class="container">
        <div class="col-md-4">
          <h2>Layanan Mahasiswa</h2>
          <ul class="footer-menu">
            <li><a href="#">Sistem Informasi Mahasiswa (SIM)</a></li>
            <li><a href="#">Perpustakaan Nasional (PNRI)</a></li>
            <li><a href="#">Perpustakaan</a></li>
          </ul>
          <h2>Jurusan</h2>
          <ul class="footer-menu">
            <li><a href="#">Strata 1 - Teknik Informatika</a></li>
            <li><a href="#">Strata 1 - Teknik Industri</a></li>
            <li><a href="#">Strata 1 - Teknik Elektro</a></li>
            <li><a href="#">Strata 1 - Desain Komunikasi Visual</a></li>
            <li><a href="#">Strata 1 - Desain Produk</a></li>
            <li><a href="#">Strata 1 - Sistem Informasi Bisnis</a></li>
            <li><a href="#">D3 - Manajemen Informatika</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h2>Lembaga</h2>
          <ul class="footer-menu">
            <li><a href="#">Lembaga Penelitian & Pengabdian Masyarakat (LPPM)</a></li>
            <li><a href="#">Lembaga Jaminan Mutu (LJM)</a></li>
            <li><a href="#">P2KPN</a></li>
            <li><a href="#">BEM</a></li>
          </ul>
          <h2>Pusat Studi</h2>
          <ul class="footer-menu">
            <li><a href="#">Google Android</a></li>
            <li><a href="#">Linguistik Komputasi</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h2>Lain lain</h2>
          <ul class="footer-menu">
            <li><a href="#">Seminar Nasional IdeaTech</a></li>
            <li><a href="#">Abstrak TA/Tesis</a></li>
            <li><a href="#">Direktori Dosen</a></li>
            <li><a href="#">Daftar Buku Terbaru</a></li>
            <li><a href="#">E-Class</a></li>
            <li><a href="" class="social-icon"><span class="fa fa-instagram fa-2x"></span></a> <a href="" class="social-icon"><span class="fa fa-facebook fa-2x"></span></a></li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="text-center">
        Copyright &copy; 2019 & Made With Love
      </div>
    </div>
  </div>

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

  <script>
    $(document).ready(function () {
      $(document).scroll(function () {
        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $("#carousel-example-generic").height() - 25);
      });
    });
  </script>
</body>

</html>
