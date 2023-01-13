@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            {{-- card daftar produk --}}
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Daftar Produk</div>
                        <div class="col text-end">
                            <a href="" class="btn btn-outline-primary">Tambah Produk</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                   <table class="table table-borderless text-center">
                        <thead>
                            <th>Category</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Makanan</td>
                                <td>Roti Sobek</td>
                                <td>100</td>
                                <td>
                                    <a href="" class="btn btn-warning" >Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Minuman</td>
                                <td>Minuman Sedingin Kamu</td>
                                <td>100</td>
                                <td>
                                    <a href="" class="btn btn-warning" >Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                   </table>
                </div>
            </div>
        </div>

        {{-- card keranjang --}}
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    Keranjang
                </div>
                <div class="card-body">
                    <div class="form-group">
                      <label for=""></label>
                      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" href="{{route('Category.store')}}">Simpan</button>
                    <button class="btn btn-outline-danger">Clear</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection