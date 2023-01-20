@extends('layoutv2.body')
@section('content')
    {{-- tombol back --}}
    <div class="row">
        <div class="col-5">
            <a href="/adminalip" class="btn btn-outline-secondary">
                <i class="fas fa-angle-left"></i> Kembali
            </a>
        </div>
        <div class="col">
            <h3>Edit Siswa</h3>
        </div>
    </div>

    <div class="row d-flex justify-content-center mt-3">
        <div class="col-md-6">
            {{-- tambah siswa --}}
            <div class="card border-0 shadow-lg p-3 mb-5 bg-body rounded-3 mt-3">
                <div class="card-body">
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
                        <button type="submit" class="btn btn-warning btn-block">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
