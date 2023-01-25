<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Landing page template built with HTML and Bootstrap 4 for presenting training courses, classes, workshops and for convincing visitors to register using the form.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Ekstrakulikuler SMKN 1 Surabaya</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/e4a753eb05.js" crossorigin="anonymous"></script>
    <!-- Favicon  -->
    <link rel="icon" href="images/logosmk 1.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top p-2">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image " href="http://www.smkn1-sby.sch.id/"><img src="images/logosmk 1.png"
                alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="register">REGISTER <span class="sr-only">(current)</span></a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="#description">DETAILS</a>
                </li> --}}

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#date" id="navbarDropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">CONTACT</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="article-details.html"><span class="item-text"><i
                                    class='fa fa-whatsapp'></i> Custumer Service</span></a>

                    </div>
                </li>
                <!-- end of dropdown menu -->

            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fw-bold fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>EKSTRAKULIKULER SMKN 1 SURABAYA</h1>
                        <p class="p-large">SMK Negeri 1 Surabaya memiliki lebih dari 30 ekstrakulikuler. Pada wesite
                            ini kalian dapat menemukan informasi terkait ekstrakulikuler yang ingin tersebut, ingin tau
                            lebih banyak? Yuk lihat profil Ekstrakulikuler SMK Negeri 1 Surabaya.</p>
                        {{-- <a class="btn-solid-lg page-scroll" href="{{route('register.index')}}">REGISTER</a> --}}
                        {{-- <a class="btn-outline-lg page-scroll" href="{{route('login')}}">LOGIN</a> --}}

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->

        <!-- Image Slider -->
        <div class="outer-container mb-5">
            <div class="slider-container ">
                <div class="swiper-container image-slider-1">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/sekolah2.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/sekolah1.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/sekolah3.jpg" alt="alternative">
                        </div>
                        <!-- end of slide -->

                    </div> <!-- end of swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- end of add arrows -->

                </div> <!-- end of swiper-container -->
            </div> <!-- end of slider-container -->
        </div> <!-- end of outer-container -->
        <!-- end of image slider -->

    </header> <!-- end of header -->
    <!-- end of header -->



    </div> <!-- end of col -->
    </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of registration -->

    <!-- lg-halo -->
    <div id="contentainer marketing justify-content-center" style="padding-top: 0">
        <div class="row ">

            <img src="images/halo.png" alt="" width="100%">
        </div>
        <!-- end halo -->


        <!-- visi misi -->
        <div class="container lg-12 text-center " style="padding-top: 0">
            <div class="row ">
                <div class="col-lg-4 ">
                    <img src="images/lgmisi.png" class="rounded mx-auto d-block" alt="Generic placeholder image "
                        width="180" height="180">
                    <h5 class="text-dark text-center" style="font-family:cursive">MISI</h5>
                    <p class="m-0  text-center text-secondary">Mengembangkan potensi, bakat, dan minat peserta didik
                        secara optimal, serta tumbuhnya kemandirian dan kebahagiaan peserta didik yang berguna untuk
                        diri sendiri, keluarga dan masyarakat.</p><br>

                </div>

                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="images/lgvisi.png" class="rounded mx-auto d-block" alt="Generic placeholder image"
                        width="180" height="180">
                    <h5 class="text-dark text-center" style="font-family:cursive">VISI</h5>
                    <p class="m-0 text-center text-secondary"> Menyalurkan dan mengembangkan potensi dan bakat peserta
                        didik agar menjadi manusia yang berkreativitas tinggi dan penuh dengan karya</p><br><br><br>

                </div>

                <!-- /.col-lg-4 -->
                <div class="col-lg-4 justify-content-center">
                    <img src="images/lgtujuan.png" class="rounded mx-auto d-block" alt="Generic placeholder image"
                        width="180" height="180">
                    <h5 class="text-dark text-center" style="font-family:cursive">TUJUAN</h5>
                    <p class="m-0 text-center text-secondary"> Menyalurkan dan mengembangkan potensi dan bakat peserta
                        didik agar menjadi manusia yang berkreativitas tinggi dan penuh dengan karya</p><br><br><br>

                </div><!-- /.col-lg-4 -->
            </div>
        </div>

    </div>
    <!-- end of visai misi -->

    <!-- Students -->
    <div class="container">
    <div class="basic-3">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/fotodance1.jpg" class="d-block w-100" alt="...">
                               
                            </div>
                            <div class="carousel-item">
                                <img src="images/dance2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/fotodance1.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> <!-- end of col -->
                
                <div class="col-lg-6">
                    <div class="text-container">
                        @foreach ($data_update as $item)
                            <div class="card border-0">
                                <div class="card-body ">
                                    <h2 class="fw-bold">{{$item->judul}}</h2>
                                    <p class="card-text">{{$item->deskripsi}}</p>
                                    <h6 class="fw-bold">Jadwal Ekstrakulikuler</h6>
                                    <p class="card-text">Hari : {{$item->hari}}</p>
                                    <p class="card-text">Jam : {{$item->jam}}</p>
                                </div>
                            </div>
                        @endforeach
                        
                      
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    </div>
    <!-- end of students -->

    {{-- FUTSAL --}}
    <!-- Students -->
    <div class="basic-3">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2 class="fw-bold">Futsal</h2>
                        <p>Mengembangkan kepribadian, bakat, dan kemampuan di bidang olahraga Futsal </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/futsal1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden "> Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of students -->

    {{-- PMR --}}
    <!-- Students -->
    <div class="basic-3">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <div id="carouselExampleCaptions" class="carousel slide">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/pmr1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/pmr2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/pmr1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2 class="fw-bold">Palang Merah Indonesia</h2>
                        <p>Melaksanakan kegiatan kemanusiaan di bidang kesehatan dan siaga bencana, mempromosikan
                            prinsip-prinsip dasar Gerakan Palang merah Indonesia, dan mengembangkan kapasitas organisasi
                            PMI. </p>

                            <p> Jadwal Pelaksanaan <br>
                                Hari : <br>
                                Jam  :
                            </p>
                       
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of students -->














    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-col first">
                        <h5>Tentang Web Ekskul</h5>
                        <p class="p-small">Kami memudahkan para siswa dan siswi yang ingin mendaftarkan diri ke ekskul
                            sekolah secara online. Kami juga memberikan sedikit gambaran dan informasi tentang
                            ekstrakulikuler yang diinginkan.</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">

                </div> <!-- end of col -->
                <div class=" col-md-3 ">
                    <div class="footer-col fourth">
                        <h5>Social Media</h5>
                        <p class="p-small">For news & updates follow us</p>
                        <a href="#your-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#your-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2023 <a href="http://www.smkn1-sby.sch.id/">Web Sekolah</a> - All
                        rights reserved</p>
                    <p class="p-small">Distributed By: <a href="https://www.instagram.com/xprilinxx/"
                            target="_blank">Inna </a> &<a href="https://www.instagram.com/venusvardani/"
                            target="_blank"> varda</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>
