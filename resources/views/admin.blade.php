@extends('layoutv2.body')
@section('content')

    @if (Auth::User()->role == 'futsal')
        {{-- edit hero --}}
        <div class="row">
            <div class="card border-0 shadow-lg p-3 mb-5 bg-body rounded-3">
                <div class="col">
                    <h4 class="fw-bold">Edit Hero</h4>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="carouselExampleCaptions" class="carousel slide">

                                <div class="carousel-inner">
                                    <div class="carousel-item active" style="height: 300px">
                                        <img src="images/futsal1.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item" style="height: 300px">
                                        <img src="images/pmr2.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">

                                        </div>
                                    </div>
                                    <div class="carousel-item" style="height: 300px">
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
                                <label for="">Nama Ekstra</label>
                                <h2 class="fw-bold">Futsal</h2>

                                <label class="mt-2" for="">Deskripsi Ekstra</label>
                                <p>Melaksanakan kegiatan kemanusiaan di bidang kesehatan dan siaga bencana, mempromosikan
                                    prinsip-prinsip dasar Gerakan Palang merah Indonesia, dan mengembangkan kapasitas
                                    organisasi
                                    PMI. </p>
                            </div> <!-- end of text-container -->
                        </div> <!-- end of col -->

                    </div> <!-- end of row -->
                </div>
                <div class="row">
                    <div class="col text-end">
                        <a href="" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- card jumlah siswa --}}
        <div class="row">
            <div class="col">
                <div class="card border-0 shadow p-3 mb-5 bg-body rounded-3">
                    <div class="col">
                        <h4 class="fw-bold">Jumlah Siswa</h4>
                    </div>
                    <div class="col">
                        <h5>15</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow p-3 mb-5 bg-body rounded-3">
                    <div class="col">
                        <h4 class="fw-bold">Nama Pembimbing</h4>
                    </div>
                    <div class="col">
                        <h5>aowkoak</h5>
                    </div>
                </div>
            </div>
        </div>

        {{-- daftar siswa --}}
        <div class="row">
            <div class="card border-0 shadow-lg p-3 mb-5 bg-body rounded-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h3>Daftar Siswa</h3>
                        </div>
                        <div class="col text-end">
                            {{-- <a href="{{ route('admindance.create') }}" class="btn btn-outline-success">
                            <i class="fas fa-plus"></i>
                        </a> --}}
                            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <table class="table table table-striped table-borderless table-hover mt-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama siswa</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($daftar_siswa as $item)
                        <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$item->nama}}</td>
                           <td>{{$item->kelas_id}}</td>
                           <td>
                            <a href="{{ route('admindance.create') }}" class="btn btn-outline-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{ route('admindance.hapus', $item -> id) }}" class="btn btn-outline-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                           </td>
                       </tr>
                       @endforeach --}}
                            {{-- <tr>
                            <td>1</td>
                            <td>Alip</td>
                            <td>12 RPL 2</td>
                            <td>
                                <a href="{{ route('admindance.create') }}" class="btn btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr> --}}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        {{-- modal tambah siswa --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body m-3">
                        <form>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form1Example1">Nama Siswa</label>
                                <input type="email" id="form1Example1" class="form-control" />
                            </div>

                            {{-- No HP --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form1Example1">No Hp</label>
                                <input type="email" id="form1Example1" class="form-control" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form1Example2">Kelas</label>
                                <input type="text" id="form1Example2" class="form-control" />
                            </div>

                            <!-- Submit button -->
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-warning btn-block">Daftar</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-secondary btn-block"
                                        data-bs-dismiss="modal">Batal</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    @elseif (Auth::User()->role == 'dance')
        <div class="row">
            <div class="card border-0 p-4 mb-5 text-light" style="background-color: #2f3037">
                <div class="col">
                    <h4 class="fw-bold">Edit Hero Dance</h4>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="carouselExampleCaptions" class="carousel slide">

                                <div class="carousel-inner style=" height=" 400px">
                                    <div class="carousel-item active">
                                        <img src="images/fotodance1.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                        </div>
                                    </div>
                                    <div class="carousel-item" style="height: 300px">
                                        <img src="images/fotodance2.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">

                                        </div>
                                    </div>
                                    <div class="carousel-item" style="height: 400px">
                                        <img src="images/dance2.jpg" class="d-block w-100" alt="...">
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
                                <label for="">Nama Ekstra</label>
                                <h2 class="fw-bold">Dance</h2>

                                <label class="mt-2" for="">Deskripsi Ekstra</label>
                                <p class="text-light">Melaksanakan kegiatan kemanusiaan di bidang kesehatan dan siaga
                                    bencana, mempromosikan
                                    prinsip-prinsip dasar Gerakan Palang merah Indonesia, dan mengembangkan kapasitas
                                    organisasi
                                    PMI. </p>
                            </div> <!-- end of text-container -->
                        </div> <!-- end of col -->

                    </div> <!-- end of row -->
                </div>
                <div class="row">
                    <div class="col text-end">
                        <a href="/edit" class="btn btn-warning">Edit</a>

                        <a href="{{ route('admin.preview') }}" class="btn text-light">Preview</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- card jumlah siswa --}}
        <div class="row">
            <div class="col">
                <div class="card border-0 shadow p-3 mb-5 rounded-3 text-light" style="background-color: #2f3037">
                    <div class="col">
                        <h4 class="fw-bold">Jumlah Siswa</h4>
                    </div>
                    <div class="col">
                        {{-- @foreach ($daftar_siswa as $item)
                        {{-- <h5> {{ $item->}}</h5> --}}
                        {{-- @endforeach --}}

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 p-3 mb-5 rounded-3 text-light"style="background-color: #2f3037">
                    <div class="col">
                        <h4 class="fw-bold">Nama Pembimbing</h4>
                    </div>
                    <div class="col">
                        <h5>aowkoak</h5>
                    </div>
                </div>
            </div>
        </div>

        {{-- daftar siswa --}}
        <div class="row">
            <div class="card border-0 shadow-lg p-3 mb-5 rounded-3 text-light" style="background-color: #2f3037">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h3>Daftar Siswa</h3>
                        </div>
                        <div class="col text-end">
                            {{-- <a href="{{ route('admindance.create') }}" class="btn btn-outline-success">
                                <i class="fas fa-plus"></i>
                            </a> --}}
                            <button class="btn btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <table class="table table-dark table-borderless table-hover mt-4  text-light">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama siswa</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftar_siswa as $item)
                                {{-- @foreach ($kelas as $item) --}}


                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kelas->kelas }}</td>
                                    <td>
                                        <a href="" class="btn btn-outline-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-outline-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @elseif(Auth::User()->role == 'pmr')
        <div class="row">
            <div class="card border-0 p-4 mb-5 text-light" style="background-color: #2f3037">
                <div class="row mb-4">
                    <div class="col">
                        <h4 class="fw-bold">Edit Hero PMR</h4>
                    </div>
                    <div class="col text-end">
                        @if ($update->isEmpty())
                            <a href="/admin/create/" class="btn btn-success">+</a>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                @if ($update->isEmpty())
                                    <h4>Data Kosong</h4>
                                @endif
                            </div>
                            <div id="carouselExampleCaptions" class="carousel slide">
                                <div class="carousel-inner style=" height=" 400px">
                                    <div class="carousel-item active">
                                        @foreach ($update as $item)
                                            <img src="{{ asset('images/' . $item->foto) }}" class="d-block w-100">
                                            <div class="carousel-caption d-none d-md-block">
                                                {{ $item->judul }}
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                        @endforeach
                                    </div>
                                    {{-- <div class="carousel-item" style="height: 300px">
                                        <img src="{{ asset('images/' . $item->foto) }}" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">

                                        </div>
                                    </div> --}}
                                    {{-- <div class="carousel-item" style="height: 400px">
                                        <img src="images/dance2.jpg" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">

                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button> --}}
                            </div>
                        </div> <!-- end of col -->
                        <div class="col-lg-6">
                            {{-- <div class="text-container"> --}}
                            @foreach ($update as $item)
                                <div class="container">
                                    <div class="content text-white">
                                        <h6 class="fw-bold">Judul Ekskul</h6>
                                        <p>{{ $item->ekstrakulikuler_id }}</p>

                                        <h6 class="fw-bold">Deskripsi Ekskul</h6>
                                            <p>{{ $item->deskripsi }}</p>

                                        <h6 class="fw-bold">Jadwal Ekstrakulikuler</h6>
                                            <p>Hari : {{ $item->hari }}</p>
                                            <p>Jam : {{ $item->jam }}</p>
                                    </div>
                                </div>
                                {{-- </div> <!-- end of text-container --> --}}
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div>
                <div class="row">
                    <div class="col text-end">
                        <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('admin.preview') }}" class="btn text-light">Preview</a>
                        <a href="{{ route('admin.hapuspmr', $item->id) }}" class="btn text-danger">
                            <i class="fa fa-trash"></i>
                        </a>
    @endforeach
    </div>
    </div>
    </div>
    </div>

    {{-- card jumlah siswa --}}
    <div class="row">
        <div class="col">
            <div class="card border-0 shadow p-3 mb-5 rounded-3 text-light" style="background-color: #2f3037">
                <div class="col">
                    <h4 class="fw-bold">Jumlah Siswa</h4>
                </div>
                <div class="col">
                    {{-- @if ($update)
                         <h5> {{ $item->}}</h5>
                     @endif --}}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 p-3 mb-5 rounded-3 text-light"style="background-color: #2f3037">
                <div class="col">
                    <h4 class="fw-bold">Nama Pembimbing</h4>
                </div>
                <div class="col">
                    <h5>aowkoak</h5>
                </div>
            </div>
        </div>
    </div>

    {{-- daftar siswa --}}
    <div class="row">
        <div class="card border-0 shadow-lg p-3 mb-5 rounded-3 text-light" style="background-color: #2f3037">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h3>Daftar Siswa</h3>
                    </div>
                    <div class="col text-end">
                        {{-- <a href="{{ route('admindance.create') }}" class="btn btn-outline-success">
                            <i class="fas fa-plus"></i>
                        </a> --}}
                        <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <table class="table table-dark table-borderless table-hover mt-4  text-light">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama siswa</th>
                            <th>Kelas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($daftar_siswa as $item) --}}
                        @foreach ($pmr as $i => $item)
                            {{-- @foreach ($kelas as $item) --}}
                            {{-- @if ($item->ekstrakulikuler_id == 2) --}}

                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kelas->kelas }}</td>
                                <td>
                                    <a href="{{ url('editview') }}" class="btn btn-outline-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                                {{-- @endif --}}
                            </tr>
                            {{-- @endforeach --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif

@endsection
