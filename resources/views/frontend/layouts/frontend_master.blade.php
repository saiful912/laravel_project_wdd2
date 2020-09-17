
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel E-Commerce Project WDD2</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('frontend/css/shop-homepage.css')}}" rel="stylesheet">

</head>

<body>
@include('frontend.partials.header')


@yield('main')


@include('frontend.partials.footer')
{{--<!-- Bootstrap core JavaScript -->--}}
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
