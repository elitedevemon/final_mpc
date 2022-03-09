{{-- @extends('layouts.master')
@section('title', 'Register | MPC')
@section('styles')
  @livewireStyles()
@endsection
@section('main-content')
  @livewire('backend.auth.register')
@endsection
@section('scripts')
  @livewireScripts()
@endsection --}}
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Azea – Laravel Admin & Dashboard Template" name="description">
		<meta content="Spruko Private Limited" name="author">
		<meta name="keywords" content="laravel ui admin template, laravel admin template, laravel dashboard template,laravel ui template, laravel ui, livewire, laravel, laravel admin panel, laravel admin panel template, laravel blade, laravel bootstrap5, bootstrap admin template, admin, dashboard, admin template">

		<!-- Title -->
		<title></title>

    <!--CSS -->
		

    @livewireStyles()
    <!--custom style-->
    @stack('css')

	</head>

	<body class="h-100vh error-bg">

	
        <div class="bg-white register-3">


	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{ asset('superadmin/assets/images/svgs/loader.svg') }}" alt="loader">
		</div>
		<!-- End GLOBAL-LOADER -->

            
        <div class="page">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col mx-auto">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-xl-5 col-md-7 col-sm-12 col-xs-12 ">
                                    <div class="text-center mb-5 mt-0">
                                      <a href="{{ route('welcome', app()->getLocale()) }}">
                                        <img src="https://drive.google.com/uc?id=1H7kPBkQsmvA2mXGGeYBEf95UvuHse2Kg&export=media" class="" alt="MPC Method Logo" width="80" height="80">
                                      </a>
                                    </div>
                                    @livewire('backend.auth.register')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Javascript-->
		
    @stack('js')
    @livewireScripts()
	</div>

	</body>

</html>