@extends('layoutv2.bodypolos')
@section('content')
    <div class="container">
        <h1>futsal</h1>
        <form action="logout" method="POST">
            @csrf
            <input type="submit" value="Log Out" class="btn btn-danger">
        </form>
    </div>
@endsection