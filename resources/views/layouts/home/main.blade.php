<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.materia.min.css')}}">
<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/custom-icons.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/style.blue.css')}}">
<link rel="stylesheet" href="{{asset('/assets/css/custom.css')}}">
<link rel="stylesheet" href="{{asset('/css/custom.css')}}">
<link rel="shortcut icon" href="{{asset('/img/logos/ndebi-tech-favi-blue.png')}}" type="image/x-icon">
    <title>Ndebi tech</title>
</head>
<body class="">


        @include('layouts.home.navbar')

        @include('home.modals.modal')

            @yield('content')




    @include('layouts.home.footer')


    <!-- JavaScript files-->
    {{-- <script src="{{asset('/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('/assets/js/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/assets/js/owl.carousel2.thumbs.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/assets/js/front.js')}}"></script>


</body>
</html>
