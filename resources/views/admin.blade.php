@extends('layout.admin')
@section('title','mastersiswa')
@section('content')




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
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="" class="btn btn-warning" >Edit</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        
        </tbody>
         
    </table>
 </div>

@endsection