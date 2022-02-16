<div>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form wire:submit.prevent='checkAndSendEmail'>
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address" wire:model.defer='email'>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-2">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" wire:loading.attr='checkAndSendEmail' wire:target='checkAndSendEmail'>
                                    {{ __('Reset Password') }} <i class="fa fa-spinner fa-spin" wire:loading wire:target='checkAndSendEmail'></i>
                                </button>
                            </div>
                        </div>
                        @if(Session::has('sent'))
                          <div class="col-md-6 offset-md-4">
                              <small class="text-success">{{ session()->get('sent') }}</small>
                          </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
