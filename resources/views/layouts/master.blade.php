<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>دانه | @yield('title')</title>

    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('css/fonts/fonts.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  </head>
  <body>




      @yield('content')




      @yield('footer')


    <script src="{{URL::asset('js/jquery-3.3.1.slim.min.js')}}" ></script>
    <script src="{{URL::asset('js/popper.min.js')}}"  ></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}" ></script>
  </body>
</html>
