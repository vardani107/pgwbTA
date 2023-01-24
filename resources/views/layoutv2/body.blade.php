<!DOCTYPE html>
<html lang="en">

<head>
    @include('layoutv2.css')
</head>

<body data-spy="scroll" class="bg-dark" data-target=".fixed-top">

    {{-- navbar --}}
        @include('layoutv2.navbar')


        <div class="container " style="margin-top: 100px">
            <div class="content mt-3">
                @yield('content')
            </div>
        </div>


</body>

    @include('layoutv2.script')

</html>
