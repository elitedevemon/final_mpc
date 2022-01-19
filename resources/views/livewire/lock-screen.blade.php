<div class="page">
  <div class="page-content">
    <div class="container">
      <div class="row">
        <div class="col mx-auto">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
              <div class="text-center mb-6">
                <img src="{{ asset('logo/MPC.png') }}" class="header-brand-img desktop-lgo" alt="Azea logo">
                <h2 class="d-none d-md-block" style="font-size: 30px; font-weight: bold; color: white; margin-top:8px; margin-bottom: -15px !important;">MPC Method</h2>
                <h2 class="d-md-none" style="font-size: 30px; font-weight: bold; color: white; margin-top:8px; margin-bottom: -15px !important;">MPC Method</h2>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row mt-xl-5">
                    <div class="col-10 d-block mx-auto">
                      <div class="text-center mb-4 ">
                          <span class="avatar avatar-xxl  brround" style="background-image: url({{ Auth::user()->profile_image }})"></span>
                      </div>
                      <span class="m-4 d-none d-lg-block text-center">
                          <span class="fs-20"><strong>{{ Auth::user()->name }}</strong></span>
                      </span>
                      <div class="input-group mb-4">
                        
                          @error('wrong_pass')
                            <div class="error text-danger">{{ $message }}</div>
                          @enderror
                          @error('password')
                            <div class="error text-danger">{{ $message }}</div>
                          @enderror
                          <div class="input-group" id="Password-toggle">
                              <a href="#" class="input-group-text">
                              <i class="fe fe-eye" aria-hidden="true"></i>
                              </a>
                              <input class="form-control" wire:model="password" type="password" placeholder="Confirm Password">
                          </div>
                      </div>
                      <button class="btn btn-primary w-100" wire:click="unlock" wire:loading.attr="disabled">
                        <i class="fe fe-lock"></i>
                        <span wire:loading.class="d-none" wire:target="unlock"> Unlock</span>
                        <span wire:loading wire:target="unlock"> Processing...</span>
                      </button>
                      <button class="btn btn-danger mt-1 w-100" wire:click="logout()" wire:loading.attr="disabled"><i class="fe fe-lock"></i> Log Out
                        <div wire:loading wire:target="logout" style="font-size: 10px; height: 15px; width: 15px; margin-left: 15px; color: #15d9c7!important; " class="spinner-border" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
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

