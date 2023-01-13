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
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sari Roti</td>
                                <td>30</td>
                                <td>
                                    <a href="" class="btn btn-warning" >Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Kinderjoy</td>
                                <td>50</td>
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
    </div>
</div>
@endsection