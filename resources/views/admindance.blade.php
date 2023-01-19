@extends('layout.admin')
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

@endsection