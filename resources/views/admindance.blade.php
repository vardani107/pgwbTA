@extends('layoutv2.body')
@section('content')
    {{-- edit hero --}}
    <div class="row">
        <div class="card border-0 shadow-lg p-3 mb-5 bg-body rounded-3 ">
            <div class="col">
                <h4 class="fw-bold">Edit Hero</h4>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="carouselExampleCaptions" class="carousel slide">

                            <div class="carousel-inner">
                                <div class="carousel-item active" style="height: 300px">
                                    <img src="images/pmr1.jpg" class="d-block w-100" alt="...">
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
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="text-container">
                            <label for="">Nama Ekstra</label>
                            <h2 class="fw-bold">Palang Merah Indonesia</h2>

                            <label class="mt-2" for="">Deskripsi Ekstra</label>
                            <p>Melaksanakan kegiatan kemanusiaan di bidang kesehatan dan siaga bencana, mempromosikan
                                prinsip-prinsip dasar Gerakan Palang merah Indonesia, dan mengembangkan kapasitas organisasi
                                PMI. </p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->

                </div> <!-- end of row -->
            </div>
            <div class="row">
                <div class="col text-end">
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="{{url('/viewadmin')}}" class="btn btn-outline-primary" >Lihat Hasil</a>
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
                        @foreach ($daftar_siswa as $item)
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
                       @endforeach
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
                                <button type="button" class="btn btn-secondary btn-block" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card border-0 shadow-lg p-3 mb-5 bg-body rounded-3 ">
            <div class="col">
                <h4 class="fw-bold">Edit Hero</h4>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="carouselExampleCaptions" class="carousel slide">

                            <div class="carousel-inner">
                                <div class="carousel-item active" style="height: 300px">
                                    <img src="images/pmr1.jpg" class="d-block w-100" alt="...">
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
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="text-container">
                            <label for="">Nama Ekstra</label>
                            <h2 class="fw-bold">Palang Merah Indonesia</h2>

                            <label class="mt-2" for="">Deskripsi Ekstra</label>
                            <p>Melaksanakan kegiatan kemanusiaan di bidang kesehatan dan siaga bencana, mempromosikan
                                prinsip-prinsip dasar Gerakan Palang merah Indonesia, dan mengembangkan kapasitas organisasi
                                PMI. </p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->

                </div> <!-- end of row -->
            </div>
            <div class="row">
                <div class="col text-end">
                    <a href="" class="btn btn-warning">Edit</a>
                    <a href="{{url('/viewadmin')}}" class="btn btn-outline-primary" >Lihat Hasil</a>
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
                        @foreach ($daftar_siswa as $item)
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
                       @endforeach
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
                                <button type="button" class="btn btn-secondary btn-block" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="p-5">
        <div class="row   ">
        <div class="col-12 ">
            <h2 class="fw-bold text-center">Update Data</h2>
            <form action="">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nama Ekstrakulikuler</label>
            <input type="text"  class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
          </div>
          <div class="mb-5">
            <label for="formGroupExampleInput2" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan deskripsi ekstrakulikuler">
          </div>
          <div class="row ">
            <p>Jadwal Ekstrakulikuler</p>
            <div class="col"> 
                <label for="formGroupExampleInput2" class="form-label">Hari :</label>
              <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <label for="formGroupExampleInput2" class="form-label">Jam:</label>
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
          </div>
          <div class="mt-5">
            <input type="submit" class="btn btn-outline-danger" value="Upload">
          </div>
    
            </form>
        </div>
        </div>
     </div> --}}
    

    {{-- @if (Auth::user()->role == 'admin')
        
    @elseif

    @elseif

    @elseif

    @elseif

    @elseif

    @elseif


        
    @endif --}}

    
@endsection









{{-- @extends('layout.admin')
@section('title','mastersiswa')
@section('content')



<div class="container">
 <h2 class="fw-bold text-center">Daftar Nama Siswa</h2>
<div class="card-body p-5">
   
    <table class=" table table-bordered text-center table table-striped text-dark fw-bold">
         <thead>
            <th>No</th>
             <th>Nama Siswa</th>
             <th>Kelas</th>
             <th>Action</th>
         </thead>
         <tbody>
             @foreach ($daftar_siswa as $item)
             <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->kelas_id}}</td>
                <td>
                    <a href="" class="btn btn-warning" >Edit</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
         
    </table> 
 </div>
</div>
 <div class="p-5">
    <div class="row   ">
    <div class="col-12 ">
        <h2 class="fw-bold text-center">Update Data</h2>
        <form action="">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nama Ekstrakulikuler</label>
        <input type="text"  class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
      </div>
      <div class="mb-5">
        <label for="formGroupExampleInput2" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan deskripsi ekstrakulikuler">
      </div>
      <div class="row ">
        <p>Jadwal Ekstrakulikuler</p>
        <div class="col"> 
            <label for="formGroupExampleInput2" class="form-label">Hari :</label>
          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            <label for="formGroupExampleInput2" class="form-label">Jam:</label>
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
      </div>
      <div class="mt-5">
        <input type="submit" class="btn btn-outline-danger" value="Upload">
      </div>

        </form>
    </div>
    </div>
 </div>

@endsection --}}