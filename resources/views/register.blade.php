@extends('layoutv2.body')
@section('content')

    <div class="h-100 row d-flex justify-content-center">
        <div class="col-md-9">
            <div class="card border-0 shadow-lg p-0 m-0 mb-5 bg-body rounded-3">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('images/futsal1.jpg')}}" alt="futsal" class="w-100 h-100 m-0 -p-0">
                        </div>
                        <div class="col m-0 p-0">
                            <div class="container p-4">
                                <a href="">
                                    a
                                </a>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">HALO SMEASMANIA!!</h1>
                                </div>
            
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $item)
                                                <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
            
                                <form action="{{ route('register.store') }}" class="user" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control " id="name" placeholder="Masukkan nama"
                                            name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control " id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Masukkan username" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control " id="exampleInputPassword" placeholder="Password"
                                            name="password">
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <input type="submit" class="btn btn-primary btn-block" value="REGISTER">
                                        </div>
                                        <div class="col">
                                            <a href="" class="btn">Sudah punya akun ? LOGIN SEKARANG</a>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    </div>

@endsection











{{-- <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EKSTRAKULIKULER SMKN 1 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sbadmin/template/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/e4a753eb05.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">HALO SMEASMANIA!!</h1>
                                    </div>

                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $item)
                                            <li>{{$item}}</li>
                                            @endforeach
                                        </ul>
                                    </div> 
                                    @endif

                                    <form action="{{ route('register.store')}}" class="user" method="post">
                                        @csrf

                                        <div class="form-group">
                                            <input type="text" class="form-control "
                                                id="name" 
                                                placeholder="Masukkan nama" name="name">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control "
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan username" name="email">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control "
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>

                                            <input type="submit" class="btn btn-primary btn-block" value="register">
                                        <hr>
                                        
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="template/vendor/jquery/jquery.min.js"></script>
    <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="template/js/sb-admin-2.min.js"></script>

</body>

</html> --}}
