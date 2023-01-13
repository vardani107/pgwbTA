@extends('layout.admin')
@section('title','mastersiswa')
@section('content')


<div class="row px-5 pb-5">
    <p class="text-dark fw-bold p-4 h3 mb-5 text-center">EKSTRAKULIKULER DANCE</p>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase px-2 mb-1">
                        Jumlah Siswa</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto p-2">
                    <i class="fas fa-child fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4 ">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase px-2 mb-1">
                        Jumlah Siswa</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto p-2">
                    <i class="fas fa-child fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<p class="fw-bold mt-5 text-center  text-dark h5">DAFTAR NAMA SISWA</p>
<div class="card-body p-5">
    
    <table class="table table-bordered text-center table table-striped text-dark fw-bold">
         <thead>
            <th>No</th>
             <th>Nama Siswa</th>
             <th>Kelas</th>
             <th>Action</th>
         </thead>
         <tbody>
             <tr>
                <td>1</td>
                 <td>Sari Roti</td>
                 <td>30</td>
                 <td>
                     <a href="" class="btn btn-warning" >Edit</a>
                     <a href="" class="btn btn-danger">Hapus</a>
                 </td>
             </tr>
             <tr>
                <td>1</td>
                <td>Hihang Hoheng</td>
                <td>30</td>
                <td>
                    <a href="" class="btn btn-warning" >Edit</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                </td>
             </tr>
         </tbody>
    </table>
 </div>

@endsection