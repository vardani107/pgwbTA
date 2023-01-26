@extends('layoutv2.body')
@section('content')

<div class="container" style="padding-top: 100px">
<div class="p-5">
    <div class="row   ">
    <div class="col-12 ">
        <h2 class="fw-bold text-white text-center">Update Data</h2>
        <form action="">
 
      <div class="form-group mb-3">
        <label for="formGroupExampleInput" class="form-label text-white">Nama Ekstrakulikuler</label>
        <input type="text"  class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
      </div>
      <div class="mb-4">
        <label for="formGroupExampleInput2" class="form-label  text-white">Deskripsi</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan deskripsi ekstrakulikuler">
      </div>

      <div class="row mb-4">
        <p class=" text-white fw-bold" >Jadwal Ekstrakulikuler</p>
        <div class="col"> 
            <label for="formGroupExampleInput2" class="form-label  text-white">Hari :</label>
          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            <label for="formGroupExampleInput2" class="form-label  text-white">Jam:</label>
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
      </div>

      <div class="mb-3">
        <label for="formFileMultiple" class="form-label text-white">Pilih foto</label>
        <input class="form-control" type="file" id="formFileMultiple" multiple>
      </div>
      
      <div class="mt-5">
        <input type="submit" class="btn btn-outline-danger" value="Upload">
      </div>

        </form>
    </div>
    </div>
 </div>
</div>