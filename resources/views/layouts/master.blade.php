<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>کیوسک | @yield('title')</title>

    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{URL::asset('css/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/css/main-ui.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script>
        // rename myToken as you like
        window.Laravel =  {!! 
          json_encode([
            'csrfToken' => csrf_token(),
            'signedIn' => Auth::check(),
            'user' => auth()->user(),
            'baseUrl' => json_encode(url('/'))
        ]) !!}; 
           
        
        </script>
    @yield('header-assets')

  </head>
  <body>



    <div id="app">
      <flash-component message="{{ session('flash') }}"></flash-component>
    </div>
    @yield('content')





      @yield('footer')


    <script src="{{asset('js/jquery.min.js')}}" ></script>
    <script src="{{asset('js/popper.min.js')}}"  ></script>
    <script src="{{asset('js/bootstrap.min.js')}}" ></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('footer-assets')

  </body>
</html>
