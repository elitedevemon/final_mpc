<div>
  <div class="page">
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col mx-auto">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-xl-4 col-md-7 col-sm-12 col-xs-12 ">
                            <div class="text-center mb-5 mt-0">
                                <img src="{{ asset('logo/MPC.png') }}" width="70px" height="70px" alt="Azea logo">
                            </div>
                            <div class="card-group mb-0">
                                <div class="card bg-primary text-white border-0 br-7 p-2">
                                    <div class="card-body mb-0">
                                        <div class="text-center mb-5">
                                            <h1 class="mb-2">Reset Password</h1>
                                            <a href="javascript:void(0);" class="text-white">Create New Password</a>
                                        </div>
                                    <form>
                                        @error('newPassword')
                                          <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        @if(Session::has('success'))
                                          <small class="text-success">{{ session()->get('success') }}</small>
                                        @endif
                                        <div class="input-group mb-4">
                                            <div class="input-group" id="Password-toggle1">
                                                    <a href="#" class="input-group-text">
                                                    <i class="fe fe-eye" aria-hidden="true"></i>
                                                    </a>
                                                <input class="form-control" type="password" placeholder="New Password" name="password" wire:model='newPassword'>
                                            </div>
                                        </div>
                                        @error('confirmPassword')
                                          <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <div class="input-group mb-4">
                                            <div class="input-group" id="Password-toggle2">
                                                    <a href="#" class="input-group-text">
                                                    <i class="fe fe-eye" aria-hidden="true"></i>
                                                    </a>
                                                <input class="form-control" type="password" placeholder="Re enter Password" name="confirm_password" wire:model="confirmPassword">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" />
                                                <span class="custom-control-label text-white-50">Agree Terms and Condition</span>
                                            </label>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-white btn-block text-primary d-grid px-4 font-weight-bold" wire:click="ResetPassword" wire:loading.attr='disabled'>
                                              <span wire:loading.class='d-none' wire:target='ResetPassword'>Reset</span>
                                              <span wire:loading wire:target='ResetPassword'>Resseting...</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-center pt-4">
                                        <div class="font-weight-normal fs-14 text-white-50">
                                          Welcome {{ $user->name }}.! By clicking 'Reset' button you will be able to reset your password. Thank you.
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
