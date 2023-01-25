<!DOCTYPE html>
<html lang="en">

<head>
    @include('layoutv2.css')
</head>

<body data-spy="scroll" data-target=".fixed-top" style="background-color: #1c1c21">

        <div class="container " style="margin-top: 100px">
            <div class="content mt-3">
                @yield('content')
            </div>
        </div>

</body>

    @include('layoutv2.script')

</html>
