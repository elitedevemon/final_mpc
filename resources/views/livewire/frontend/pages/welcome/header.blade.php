<div>
  <header>
    <div class="container my-2" style="margin-bottom: 0px !important; padding-bottom: 0px !important;">
      <!--Marquee system-->
        <div style="background: rgb(219, 213, 213); margin-bottom: 5px;">
            @php
                $text = DB::table('marquees')->where('id', '1')->first()
            @endphp
            <marquee behavior="scroll" direction="rtl" style="color: rgb(235, 11, 11); margin-top: 5px;">@php echo $text->text @endphp</marquee>
        </div>
      <!--End Marquee-->
        <div class="row">
          <!--Logo Area-->
            <div class="col-12 col-md-2 text-center text-md-start"><a href="/"><img style="width: 80px" src="{{ url('logo/MPC.png') }}" alt="Murad Private Center"></a></div>
          <!--End Logo-->
            <div class="col-12 col-md-7 row pt-2 pt-md-2">
              @php
                  $contacts = DB::table('contacts')->where('id', '1')->get()
              @endphp
                @foreach ($contacts as $contact)
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-2 pt-3 text-end">
                        <i class="fa fa-paper-plane" aria-hidden="true" style="height: 25px; width: 25px; color:rgb(235, 141, 53)"></i>
                      </div>
                      <div class="col-10">
                        <h5 class="fw-bold">Email</h5>
                        <p class="text-muted">
                            @if (empty($contact))
                            @else
                                {{ $contact->email }}
                            @endif
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-2 pt-3 text-end">
                        <i class="fa fa-phone-alt" aria-hidden="true" style="height: 22px; width: 22px; color:rgb(235, 141, 53)"></i>
                      </div>
                      <div class="col-10">
                        <h5 class="fw-bold">Call</h5>
                        <p class="text-muted d-inline text-truncate">
                            @if (empty($contact))
  
                            @else
                                {{ $contact->phone }}
                            @endif
                        </p>
                      </div>
                    </div>
                  </div>
                @endforeach
            </div>
            <div class="col-12 col-md-3 text-center text-md-end pt-md-2">
              @auth('web')
                @if(Auth::user()->role == 'Student')
                  <div class="pt-2">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        My Account
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('home', app()->getLocale()) }}">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Notification &nbsp; <span class="badge bg-primary">1</span></a></li>
                        <li><a class="dropdown-item" href="#">Messages &nbsp; <span class="badge bg-danger">1</span></a></li>
                        <li><a class="dropdown-item text-primary" href="{{ route('logout', app()->getLocale()) }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                          <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
                            @csrf
                          </form>
                        </li>
                      </ul>
                    </div>
                  </div>
                @else
                  <div class="pt-2">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        My Account
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('teacher.home', app()->getLocale()) }}">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Notification &nbsp; <span class="badge bg-primary">1</span></a></li>
                        <li><a class="dropdown-item" href="#">Messages &nbsp; <span class="badge bg-danger">1</span></a></li>
                        <li><a class="dropdown-item text-primary" href="{{ route('logout', app()->getLocale()) }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                          <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
                            @csrf
                          </form>
                        </li>
                      </ul>
                    </div>
                  </div>
                @endif
              @endauth
              @auth('admin')
                <div class="pt-2">
                  <div class="pt-2">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin Panel
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Notification &nbsp; <span class="badge bg-primary">1</span></a></li>
                        <li><a class="dropdown-item" href="#">Messages &nbsp; <span class="badge bg-danger">1</span></a></li>
                        <li><a class="dropdown-item text-primary" href="{{ route('logout', app()->getLocale()) }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                          <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
                            @csrf
                          </form>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              @endauth
              @guest
                <div class="pt-2">
                  {{-- <a href="{{ route('login', app()->getLocale()) }}" class="btn btn-primary">Login</a> --}}
                  {{-- <a href="{{ route('register', app()->getLocale()) }}" class="btn btn-danger">Register</a> --}}
                  <button class="btn btn-primary" wire:click='loginPage' wire:loading.attr='disabled'>Login <i class="fa fa-spinner fa-spin" wire:loading wire:target='loginPage'></i></button>
                  <button class="btn btn-success" wire:click='registerPage' wire:loading.attr='disabled'>Register <i class="fa fa-spinner fa-spin" wire:loading wire:target='registerPage'></i></button>
                </div>
              @endguest
            </div>
        </div>
        <!--Navbar area-->
          <div style="margin-bottom: 0px !important; padding-bottom:0px !important;">
              <nav class="navbar navbar-expand-lg mt-2 bg-light navbar-light text-center" style="z-index: 10;" style="margin-bottom: 0px !important; padding-bottom:0px !important">
                  <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link {{ Route::is('welcome')?'active':'' }}" aria-current="page" href="{{ route('welcome', app()->getLocale()) }}">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link {{ Route::is('about')?'active':'' }}" href="{{ route('about', app()->getLocale()) }}">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link {{ Route::is('services')?'active':'' }}" href="{{ route('services', app()->getLocale()) }}">Services</a>
                        </li>
                        {{-- <li class="nav-item">
                          <a class="nav-link" href="{{ route('blog', app()->getLocale()) }}">Blog</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('videos')?'active':'' }}" href="{{ route('videos', app()->getLocale()) }}">Videos</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link {{ Route::is('contact')?'active':'' }}" href="{{ route('contact', app()->getLocale()) }}">Contact</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link {{ Route::is('community')?'active':'' }}" href="{{ route('community', app()->getLocale()) }}">Community</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link {{ Route::is('privacy.policy')?'active':'' }}" href="{{ route('privacy.policy', app()->getLocale()) }}">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link {{ Route::is('terms.of.use')?'active':'' }}" href="{{ route('terms.of.use', app()->getLocale()) }}">Terms of Use</a>
                        </li>
  
                        {{-- <!--Google translator-->
                        <li class="nav-item">
                            <a class="nav-link">
                                <div class="translate" id="google_translate_element"></div>
                                <script type="text/javascript">
                                    function googleTranslateElementInit() {  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');}
                                </script>
                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                            </a>
                        </li>
                        <!--End google translator--> --}}
  
                      </ul>
                      <form class="d-flex" type="get" action="/search/query">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <input value="Search" class="btn btn-outline-success" type="submit">
                      </form>
                    </div>
                  </div>
              </nav>
          </div>
        <!--End Navbar-->
    </div>
  </header>
</div>
