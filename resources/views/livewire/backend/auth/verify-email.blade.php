<div>
  <div class="page">
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col mx-auto">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-xl-4 col-md-7 col-sm-12 col-xs-12 ">
                            <div class="text-center mb-5 mt-0">
                                <img src="{{ asset('logo/MPC.png') }}" height="70" width="70" class="" alt="Azea logo">
                            </div>
                            <div class="card-group mb-0">
                                <div class="card bg-primary text-white br-7 p-2">
                                    <div class="card-body mb-0">
                                        <div class="text-center mb-3">
                                            <h1 class="mb-2">Log In</h1>
                                            <a href="javascript:void(0);" class="text-white">Welcome {{ $authDetails->name }}.! Please login with your valid credentials to verify your email address. Thank you.</a>
                                        </div>
                                    <hr class="hrregister3">
                                    {{-- <div class="text-center small mt-3">Sign in with</div>
                                    <div class="btn-list text-center mb-3 mt-2">
                                        <a href="javascript:void(0);" class="btn   m-0 me-2 p-2 mb-2"><i class="fa fa-google"></i> Google</a>
                                        <a href="javascript:void(0);" class="btn  m-0 me-2 p-2 mb-2"><i class="fa fa-twitter"></i> twitter</a>
                                        <a href="javascript:void(0);" class="btn  m-0 p-2 mb-2"><i class="fa fa-facebook"></i> facebook</a>
                                    </div> --}}
                                    {{-- <hr class="divider my-6 text-primary"> --}}
                                    <form>
                                      @error('username')
                                        <small class="text-danger"><li>{{ $message }}</li></small>
                                      @enderror
                                      @error('password')
                                        <small class="text-danger"><li>{{ $message }}</li></small>
                                      @enderror
                                      @error('wrongCredential')
                                        <small class="text-danger"><li>{{ $message }}</li></small>
                                      @enderror
                                        <div class="input-group mb-4">
                                                <div class="input-group-text">
                                                    <i class="fe fe-user"></i>
                                                </div>
                                            <input type="text" class="form-control" placeholder="Username, Email or Phone" wire:model="username">
                                        </div>

                                        <div class="input-group mb-4">
                                            <div class="input-group" id="Password-toggle">
                                                    <a href="#" class="input-group-text">
                                                    <i class="fe fe-eye" aria-hidden="true"></i>
                                                    </a>
                                                <input class="form-control" type="password" placeholder="Password" wire:model="password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                          <div class="row">
                                            <div class="col-6">
                                              <label class="custom-control custom-checkbox">
                                                  <input type="checkbox" class="custom-control-input" />
                                                  <span class="custom-control-label text-white-50">Remember Me</span>
                                              </label>
                                            </div>
                                            <div class="col-6">
                                              <a href="{{ route('show.forgot.password', ['language'=>app()->getLocale(), 'username'=>$auth_username]) }}" class="btn-link text-white float-end">Forget password ?</a>
                                            </div>
                                          </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-white text-primary btn-block d-grid px-4 font-weight-bold" wire:click='login' wire:loading.attr='disabled'>
                                              <span wire:target='login' wire:loading.class='d-none'>Log In</span>
                                              <span wire:target='login' wire:loading>Processing...</span>
                                            </button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
