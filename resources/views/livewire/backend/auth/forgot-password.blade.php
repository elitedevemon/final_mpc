<div>
  <div class="page">
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col mx-auto">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-xl-4">
                            <div class="text-center mb-6">
                                <img src="{{ asset('logo/MPC.png') }}" height="70px" width="70px" alt="Azea logo">
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center mb-3">
                                        <h1 class="mb-2">Forget Password</h1>
                                        <a class="">Create A New Password</a>
                                    </div>
                                    <div class="mt-5">
                                        @error('wrongEmail')
                                          <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        @error('email')
                                          <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        @if(Session::has('sent'))
                                          <small class="text-success">{{ session()->get('sent') }}</small>
                                        @endif
                                        <div class="input-group mb-4">
                                                <div class="input-group-text">
                                                    <i class="fe fe-mail"></i>
                                                </div>
                                            <input type="text" class="form-control" placeholder="Email" wire:model="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" wire:model="allowRecoveryMail" class="custom-control-input" />
                                                <span class="custom-control-label">Send Recovery Mail</span>
                                            </label>
                                        </div>
                                        <div class="form-group text-center mb-3">
                                            <button {{ $allowRecoveryMail?'':'disabled' }} class="btn btn-primary btn-lg w-100 br-7" wire:click='ResetPassword' wire:loading.attr='disabled'>
                                              <span wire:loading.class='d-none' wire:target='ResetPassword'>Send</span>
                                              <span wire:loading wire:target='ResetPassword'>Sending..</span>
                                            </button>
                                        </div>
                                        <div class="form-group fs-12 text-center">
                                            Hello {{ $user->name }}. By clicking send button you will receive an email to your mail address with a password reset link. There you will be able to reset your password. Thank you.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="text-center register-icons">
                                <div class="small text-white mb-4">Login using with</div>
                                <button class="btn bg-white-50  text-white-50 font-weight-semibold w-12 google me-2" type="button"><i class="fa fa-google"></i></button>
                                <button class="btn bg-white-50  text-white-50 font-weight-semibold  w-12 facebook me-2" type="button"><i class="fa fa-facebook-f"></i></button>
                                <button class="btn bg-white-50  text-white-50 font-weight-semibold w-12 twitter me-2" type="button"><i class="fa fa-twitter"></i></button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
