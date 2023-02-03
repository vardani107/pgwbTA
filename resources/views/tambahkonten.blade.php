@extends('layoutv2.body')
@section('content')

<div class="container" style="padding-top: 100px">
<div class="p-5">
    <div class="row   ">
    <div class="col-12 ">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $item)
                  <li>{{ $item }}</li>
              @endforeach
          </ul>
      </div>
  @endif
        <h2 class="fw-bold text-white text-center">Update Data</h2>
        <form action="{{ route('admin.update', ['admin' => $update->id])}}" method="POST">
          @csrf
          @method('put')
      <div class="form-group mb-3">
        <label for="ekstrakulikuler" class="form-label text-white">Nama Ekstrakulikuler</label>
        <select name="ekstrakulikuler_id" class="form-control form-select" aria-label="Default select example" id="ekstrakulikuler_id" required>
          <option selected value="">Pilih Ekstrakulikuler</option>
          @foreach ($daftar_ekskul as $item)
              <option value="{{( $item->id)}}">{{ $item->judul}}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-4">
        <label for="deskripsi" class="form-label  text-white">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$update->deskripsi}}" placeholder="Masukkan deskripsi ekstrakulikuler">
      </div>

      <div class="row mb-4">
        <p class=" text-white fw-bold" >Jadwal Ekstrakulikuler</p>
        <div class="col"> 
            <label for="hari" class="form-label  text-white">Hari :</label>
          <input type="text" class="form-control" id="hari" name="hari" placeholder="First name" aria-label="First name" value="{{( $update->hari)}}">
        </div>
        <div class="col">
            <label for="formGroupExampleInput2" class="form-label  text-white">Jam:</label>
            <input type="text" class="form-control" id="jam" name="jam" placeholder="First name" aria-label="First name" value="{{( $update->jam)}}">
        </div>
      </div>
      
      <div class="form-group">
        <label for="foto">Pilih Foto</label><br>
        <img src="{{ asset('/template/img/'. $update->foto) }}" width="300" class="img-thumbnail">
        <input type="file" class="form-control-file" id="foto" name='foto'>
    </div>

      <div class="mt-5">
        <input type="submit" class="btn btn-outline-danger" value="Upload">
        <a href="{{ route('admin.index')}}" class="btn btn-outline-danger">Batal</a>
      </div>

        </form>
    </div>
    </div>
 </div>
</div>