<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title') - {{config('app.name')}}</title>
  <link rel="icon" type="image/jpeg" href="{{asset('images/logo.jpg')}}">

  <!-- Fonts -->
  @include('components/fonts')

  <!-- Styles / Scripts -->
  @vite(['resources/css/app.scss', 'resources/js/app.js'])
  <script src="{{asset('js/flowbite.min.js')}}"></script>
</head>
<body class="antialiased page-{{$view_name}}">

@include('components/header')
@yield('content')
@include('components/footer')

</body>
</html>
