<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Description Meta Tag-->
  <meta name="description" content="The purpose of this study was to develop a website for Murad Private Center in order to solve its above mentioned challenges. In addition, the study explored the perspectives of MPC high officials about the content of this website and discussed the possible suggestions to finance such a website in the long run..">
  <!--End description meta tag-->
  <meta name="author" content="Mahfuz Ahmed Murad">
  <link rel="shortcut icon" href="{{ asset('logo/MPC.png') }}">
  <title>{{ $title }}</title>
  {{ $styles }}
  @stack('css')
  @livewireStyles()
</head>
<body>

  <!-- GLOBAL-LOADER -->
  <div id="global-loader">
    <img src="{{ asset('superadmin/assets/images/svgs/loader.svg') }}" alt="loader">
  </div>
  <!-- End GLOBAL-LOADER -->

  {{ $slot }}

  {{ $sessionTimeOut }}
  {{ $scripts }}
  @stack('js')
  @livewireScripts()
</body>
</html>