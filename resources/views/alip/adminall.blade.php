@extends('layoutv2.body')
@section('content')

<div class="row d-flex justify-content-center">
    <div class="col-md-6 text-center">
        <h1>Silakan Pilih Ekstra</h1>
    </div>
</div>

<div class="container">
    <div class="row mt-5 d-flex flex-warp">
        <div class="col-4">
            <div class="card border-0 shadow-lg p-3 mb-5 bg-body rounded-3 d-flex flex-wrap">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col">
                            <img src="images/pmr1.jpg" alt="" style="width:100px; margin: 0%;">
                        </div>
                        <div class="col-4">
                            <h4>Futsal</h4>
                        </div>
                        <div class="col text-end">
                            <a href="" style="text-decoration: none">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card border-0 shadow-lg p-3 mb-5 bg-body rounded-3 d-flex flex-wrap">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col">
                            <img src="images/pmr1.jpg" alt="" style="width:100px; margin: 0%;">
                        </div>
                        <div class="col-4">
                            <h4>Basket</h4>
                        </div>
                        <div class="col text-end">
                            <a href="" style="text-decoration: none">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card border-0 shadow-lg p-3 mb-5 bg-body rounded-3 d-flex flex-wrap">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col">
                            <img src="images/pmr1.jpg" alt="" style="width:100px; margin: 0%;">
                        </div>
                        <div class="col-4">
                            <h4>Dance</h4>
                        </div>
                        <div class="col text-end">
                            <a href="" style="text-decoration: none">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card border-0 shadow-lg p-3 mb-5 bg-body rounded-3 d-flex flex-wrap m-0 p-0">
                <div class="card-body m-0 p-0">
                    <div class="row d-flex align-items-center m-0 p-0">
                        <div class="col m-0 p-0">
                            <img src="images/pmr1.jpg" alt="" class="card-img-top">
                        </div>
                        <div class="col-4">
                            <h4>PMR</h4>
                        </div>
                        <div class="col text-end">
                            <a href="{{url('adminalip')}}" style="text-decoration: none">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card-img-top {
    width: 100%;
    height: 110%;
    margin: 0%;
    object-fit: cover;
}
</style>

@endsection
