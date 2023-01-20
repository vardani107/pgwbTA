<!DOCTYPE html>
<html lang="en">

<head>
    @include('layoutv2.css')
</head>

<body data-spy="scroll" data-target=".fixed-top">

    {{-- navbar --}}
        @include('layoutv2.navbar')


        <div class="container mt-5">
            <div class="content mt-3">
                @yield('content')
            </div>
        </div>


</body>

    @include('layoutv2.script')

</html>
