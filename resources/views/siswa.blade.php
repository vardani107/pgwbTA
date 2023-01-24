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
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
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

                <li class="nav-item dropdown">
                    <a class="nav-link  page-scroll" href="/login" id="navbarDropdown" data-toggle="modal"
                        role="button" data-target="#logoutModal">LOGOUT </a> 
                </li>
            </ul>



            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
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
                        <h2 class="fw-bold">Dance</h2>
                        <p>This course is for anyone passionate about the web and especially fit for those seeking to
                            improve their online presence for company websites and blogs </p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn-solid-reg popup-with-move-anim" data-bs-toggle="modal"
                            data-bs-target="#example_Modal">DAFTAR</button>

                        <!-- Modal -->
                        <div class="modal fade" id="example_Modal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-dark text-white ">
                                        <h5 class="modal-title" id="exampleModalLabel">DAFTAR ESKTRAKULIKULER</h5>
                                        <button type="button" class="btn-close mr-1"
                                            style="background-color: #ffc107" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ route('tabelmaster.store') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control-input" name="nama"
                                                    id="nama" required>
                                                <label class="label-control" for="">Name</label>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control-input" name="no_hp"
                                                    id="no_hp" required>
                                                <label class="label-control" for="no_hp">No Hp</label>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <label for="kelas">Pilih Kelas</label>
                                                <select class="form-control" id="kelas_id" name="kelas_id">
                                                    @foreach ($daftar_kelas as $item)
                                                        <option value="{{ $item->id }}">{{ $item->kelas }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="ekstrakulikuler">Pilih Ekstrakulikuler</label>
                                                <select class="form-control" id="ekstrakulikuler_id"
                                                    name="ekstrakulikuler_id">
                                                    @foreach ($daftar_ekskul as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama_ekskul }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>


                                            <div class="form-group">
                                                <button type="submit"
                                                    class="form-control-submit-button">SUBMIT</button>
                                            </div>
                                            <div class="form-message">
                                                <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
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
                        <!-- Button trigger modal -->
                        <button type="button" class="btn-solid-reg popup-with-move-anim" data-bs-toggle="modal"
                            data-bs-target="#example_Modal">DAFTAR</button>

                        <!-- Modal -->
                        <div class="modal fade" id="example_Modal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-dark text-white ">
                                        <h5 class="modal-title" id="exampleModalLabel">DAFTAR ESKTRAKULIKULER</h5>
                                        <button type="button" class="btn-close mr-1"
                                            style="background-color: #ffc107" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ route('register.store') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control-input" name="name"
                                                    id="name">
                                                <label for="">Name</label>

                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control-input" name="no_hp"
                                                    id="no_hp" required>
                                                <label class="label-control" for="no_hp">No Hp</label>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <select class="form-select" id="kelas" name="kelas"
                                                    aria-label="Default select example">
                                                    <option selected>Pilih Kelas</option>
                                                    <option value="10 AKL 1">10 AKL 1</option>
                                                    <option value="10 AKL 2">10 AKL 2</option>
                                                    <option value="10 AKL 3">10 AKL 3</option>
                                                    <option value="10 AKL 4">10 AKL 4</option>
                                                    <option value="10 AKL 5">10 AKL 5</option>
                                                    <option value="10 BD 1">10 BD 1</option>
                                                    <option value="10 BD <">10 BD 2</option>
                                                    <option value="10 DKV 1">10 DKV 1</option>
                                                    <option value="10 DKV 2">10 DKV 2</option>
                                                    <option value="10 DKV 3">10 DKV 3</option>
                                                    <option value="10 MP 1">10 MP 1</option>
                                                    <option value="10 MP 2">10 MP 2</option>
                                                    <option value="10 MP 3<">10 MP 3</option>
                                                    <option value="10 MP 4">10 MP 4</option>
                                                    <option value="10 MP 5">10 MP 5</option>
                                                    <option value="10 PH 1">10 PH 1</option>
                                                    <option value="10 PH 2">10 PH 2</option>
                                                    <option value="10 PSPT 1">10 PSPT 1</option>
                                                    <option value="10 PSPT 2">10 PSPT 2</option>
                                                    <option value="10 PSPT 3">10 PSPT 3</option>
                                                    <option value="10 RPL 1">10 RPL 1</option>
                                                    <option value="10 RPL 2">10 RPL 2</option>
                                                    <option value="10 TKJ 1">10 TKJ 1</option>
                                                    <option value="10 TKJ 2">10 TKJ 2</option>
                                                    <option value="11 AKL 1">11 AKL 1</option>
                                                    <option value="11 AKL 2">11 AKL 2</option>
                                                    <option value="11 AKL 3">11 AKL 3</option>
                                                    <option value="11 AKL 4">11 AKL 4</option>
                                                    <option value="11 AKL 5">11 AKL 5</option>
                                                    <option value="11 BDP 1">11 BDP 1</option>
                                                    <option value="11 BDP 2">11 BDP 2</option>
                                                    <option value="11 DKV 1">11 DKV 1</option>
                                                    <option value="11 DKV 2">11 DKV 2</option>
                                                    <option value="11 MM 1<">11 MM 1</option>
                                                    <option value="11 MM 2<">11 MM 2</option>
                                                    <option value="11 OTKP 1">11 OTKP 1</option>
                                                    <option value="11 OTKP 2">11 OTKP 2</option>
                                                    <option value="11 OTKP 3">11 OTKP 3</option>
                                                    <option value="11 OTKP 4">11 OTKP 4</option>
                                                    <option value="11 OTKP 5">11 OTKP 5</option>
                                                    <option value="11 PH 1">11 PH 1</option>
                                                    <option value="11 PH 2">11 PH 2</option>
                                                    <option value="11 PSPT 1">11 PSPT 1</option>
                                                    <option value="11 PSPT 2">11 PSPT 2</option>
                                                    <option value="11 RPL 1">11 RPL 1</option>
                                                    <option value="11 RPL 2">11 RPL 2</option>
                                                    <option value="11 TKJ 1">11 TKJ 1</option>
                                                    <option value="11 TKJ 2">11 TKJ 2</option>
                                                    <option value="12 AKL 1">12 AKL 1</option>
                                                    <option value="12 AKL 2">12 AKL 2</option>
                                                    <option value="12 AKL 3">12 AKL 3</option>
                                                    <option value="12 AKL 4">12 AKL 4</option>
                                                    <option value="12 AKL 5">12 AKL 5</option>
                                                    <option value="12 BDP 1">12 BDP 1</option>
                                                    <option value="12 BDP 2">12 BDP 2</option>
                                                    <option value="12 DKV 1">12 DKV 1</option>
                                                    <option value="12 DKV 2">12 DKV 2</option>
                                                    <option value="12 MM 1">12 MM 1</option>
                                                    <option value="12 MM 2">12 MM 2</option>
                                                    <option value="12 OTKP 1">12 OTKP 1</option>
                                                    <option value="12 OTKP 2">12 OTKP 2</option>
                                                    <option value="12 OTKP 3">12 OTKP 3</option>
                                                    <option value="12 OTKP 4">12 OTKP 4</option>
                                                    <option value="12 OTKP 5">12 OTKP 5</option>
                                                    <option value="12 PH 1">12 PH 1</option>
                                                    <option value="12 PH 2">12 PH 2</option>
                                                    <option value="12 PSPT 1">12 PSPT 1</option>
                                                    <option value="12 PSPT 2">12 PSPT 2</option>
                                                    <option value="12 RPL 1">12 RPL 1</option>
                                                    <option value="12 RPL 2">12 RPL 2</option>
                                                    <option value="12 TKJ 1">12 TKJ 1</option>
                                                    <option value="12 TKJ 2">12 TKJ 2</option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <button type="submit"
                                                    class="form-control-submit-button">SUBMIT</button>
                                            </div>
                                            <div class="form-message">
                                                <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            Jam :
                        </p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn-solid-reg popup-with-move-anim" data-bs-toggle="modal"
                            data-bs-target="#example_Modal">DAFTAR</button>

                        <!-- Modal -->
                        <div class="modal fade" id="example_Modal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-dark text-white ">
                                        <h5 class="modal-title" id="exampleModalLabel">DAFTAR ESKTRAKULIKULER</h5>
                                        <button type="button" class="btn-close mr-1"
                                            style="background-color: #ffc107" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ route('register.store') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control-input" name="name"
                                                    id="name">
                                                <label for="">Name</label>

                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control-input" name="no_hp"
                                                    id="no_hp" required>
                                                <label class="label-control" for="no_hp">No Hp</label>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group">
                                                <select class="form-select" id="kelas" name="kelas"
                                                    aria-label="Default select example">
                                                    <option selected>Pilih Kelas</option>
                                                    <option value="10 AKL 1">10 AKL 1</option>
                                                    <option value="10 AKL 2">10 AKL 2</option>
                                                    <option value="10 AKL 3">10 AKL 3</option>
                                                    <option value="10 AKL 4">10 AKL 4</option>
                                                    <option value="10 AKL 5">10 AKL 5</option>
                                                    <option value="10 BD 1">10 BD 1</option>
                                                    <option value="10 BD <">10 BD 2</option>
                                                    <option value="10 DKV 1">10 DKV 1</option>
                                                    <option value="10 DKV 2">10 DKV 2</option>
                                                    <option value="10 DKV 3">10 DKV 3</option>
                                                    <option value="10 MP 1">10 MP 1</option>
                                                    <option value="10 MP 2">10 MP 2</option>
                                                    <option value="10 MP 3<">10 MP 3</option>
                                                    <option value="10 MP 4">10 MP 4</option>
                                                    <option value="10 MP 5">10 MP 5</option>
                                                    <option value="10 PH 1">10 PH 1</option>
                                                    <option value="10 PH 2">10 PH 2</option>
                                                    <option value="10 PSPT 1">10 PSPT 1</option>
                                                    <option value="10 PSPT 2">10 PSPT 2</option>
                                                    <option value="10 PSPT 3">10 PSPT 3</option>
                                                    <option value="10 RPL 1">10 RPL 1</option>
                                                    <option value="10 RPL 2">10 RPL 2</option>
                                                    <option value="10 TKJ 1">10 TKJ 1</option>
                                                    <option value="10 TKJ 2">10 TKJ 2</option>
                                                    <option value="11 AKL 1">11 AKL 1</option>
                                                    <option value="11 AKL 2">11 AKL 2</option>
                                                    <option value="11 AKL 3">11 AKL 3</option>
                                                    <option value="11 AKL 4">11 AKL 4</option>
                                                    <option value="11 AKL 5">11 AKL 5</option>
                                                    <option value="11 BDP 1">11 BDP 1</option>
                                                    <option value="11 BDP 2">11 BDP 2</option>
                                                    <option value="11 DKV 1">11 DKV 1</option>
                                                    <option value="11 DKV 2">11 DKV 2</option>
                                                    <option value="11 MM 1<">11 MM 1</option>
                                                    <option value="11 MM 2<">11 MM 2</option>
                                                    <option value="11 OTKP 1">11 OTKP 1</option>
                                                    <option value="11 OTKP 2">11 OTKP 2</option>
                                                    <option value="11 OTKP 3">11 OTKP 3</option>
                                                    <option value="11 OTKP 4">11 OTKP 4</option>
                                                    <option value="11 OTKP 5">11 OTKP 5</option>
                                                    <option value="11 PH 1">11 PH 1</option>
                                                    <option value="11 PH 2">11 PH 2</option>
                                                    <option value="11 PSPT 1">11 PSPT 1</option>
                                                    <option value="11 PSPT 2">11 PSPT 2</option>
                                                    <option value="11 RPL 1">11 RPL 1</option>
                                                    <option value="11 RPL 2">11 RPL 2</option>
                                                    <option value="11 TKJ 1">11 TKJ 1</option>
                                                    <option value="11 TKJ 2">11 TKJ 2</option>
                                                    <option value="12 AKL 1">12 AKL 1</option>
                                                    <option value="12 AKL 2">12 AKL 2</option>
                                                    <option value="12 AKL 3">12 AKL 3</option>
                                                    <option value="12 AKL 4">12 AKL 4</option>
                                                    <option value="12 AKL 5">12 AKL 5</option>
                                                    <option value="12 BDP 1">12 BDP 1</option>
                                                    <option value="12 BDP 2">12 BDP 2</option>
                                                    <option value="12 DKV 1">12 DKV 1</option>
                                                    <option value="12 DKV 2">12 DKV 2</option>
                                                    <option value="12 MM 1">12 MM 1</option>
                                                    <option value="12 MM 2">12 MM 2</option>
                                                    <option value="12 OTKP 1">12 OTKP 1</option>
                                                    <option value="12 OTKP 2">12 OTKP 2</option>
                                                    <option value="12 OTKP 3">12 OTKP 3</option>
                                                    <option value="12 OTKP 4">12 OTKP 4</option>
                                                    <option value="12 OTKP 5">12 OTKP 5</option>
                                                    <option value="12 PH 1">12 PH 1</option>
                                                    <option value="12 PH 2">12 PH 2</option>
                                                    <option value="12 PSPT 1">12 PSPT 1</option>
                                                    <option value="12 PSPT 2">12 PSPT 2</option>
                                                    <option value="12 RPL 1">12 RPL 1</option>
                                                    <option value="12 RPL 2">12 RPL 2</option>
                                                    <option value="12 TKJ 1">12 TKJ 1</option>
                                                    <option value="12 TKJ 2">12 TKJ 2</option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <button type="submit"
                                                    class="form-control-submit-button">SUBMIT</button>
                                            </div>
                                            <div class="form-message">
                                                <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">yakin deck??</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Anda yakin ingin keluar?</div>
                <div class="modal-footer">
                    <form action="logout" method="post">
                        @csrf
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" value="logout">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
