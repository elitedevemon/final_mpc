<div>
  <div class="app-content main-content">
    <div class="side-app">
  
                  
  
      <!--Page header-->
      <div class="page-header">
        <div class="page-leftheader">
          <h4 class="page-title mb-0 text-primary">Edit Profile</h4>
        </div>
      </div>
      <!--End Page header-->
  
      <!-- Row -->
      <div class="row">
        <div class="col-xl-3 col-lg-4">
          <div class="card box-widget widget-user">
            <div class="widget-user-image mx-auto mt-5">
              <label for="profile_image" style="cursor: pointer;">
                @if ($profile_image)
                  <img alt="User Avatar" class="rounded-circle" src="{{ $profile_image->temporaryUrl() }}">
                @else
                  <img alt="User Avatar" class="rounded-circle" src="{{ asset('images/profile_images') }}/{{ Auth::user()->profile_image }}">
                @endif
              </label>
              <input type="file" wire:model="profile_image" accept="image/*" style="display: none" id="profile_image">
            </div>
            <div class="card-body text-center pt-2">
              <div class="pro-user">
                <h3 class="pro-user-username  mb-1 fs-22">{{ Auth::user()->name }}</h3>
                <h6 class="pro-user-desc text-muted">{{ auth()->user()->role }}</h6>
                <div class="text-center">
                  <button class="btn btn-primary" wire:loading.attr="disabled" wire:loading wire:target="profile_image">Loading...</button>
                </div>
                <button class="btn btn-success {{ $profile_image?'':'d-none' }}" wire:click="saveProfileImage" wire:loading.attr="disabled">
                  <span wire:loading.class="d-none" wire:target="saveProfileImage">Save</span>
                  <span wire:loading wire:target="saveProfileImage">Saving..</span>
                </button>
                <button class="btn btn-danger {{ $profile_image?'':'d-none' }}" wire:click="cancelProfileImage">Cancel</button>
                <a href="{{ route('show.profile.page', app()->getLocale()) }}" class="btn btn-primary mt-3">View Profile</a>
              </div>
            </div>
            <div class="card-footer p-0">
              <div class="row">
                <div class="col-6 border-end text-center">
                  <div class="description-block p-4">
                    <h5 class="description-header mb-1 font-weight-bold  number-font">689k</h5>
                    <span class="text-muted">Followers</span>
                  </div>
                </div>
                <div class="col-6">
                  <div class="description-block text-center p-4">
                    <h5 class="description-header mb-1 font-weight-bold  number-font">3,765</h5>
                    <span class="text-muted">Following</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header ">
              <div class="card-title">Edit Password</div>
            </div>
            <div class="card-body">
              <div class="text-center mb-5">
                <div class="widget-user-image">
                  <img alt="User Avatar" class="rounded-circle  me-3" src="{{ asset('images/profile_images') }}/{{ Auth::user()->profile_image }}">
                </div>
              </div>
              {{-- <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
              </div> --}}
              <div class="form-group">
                <label class="form-label">Current Password</label>
                <div class="input-group">
                  <input type="{{ $showPass?'text':'password' }}" aria-describedby="current_password" class="form-control" wire:model="current_password">
                  <button class="input-group-text btn btn-primary" id="current_password"><i class="fa fa-{{ $showPass?'eye-slash':'eye' }}" wire:click="$toggle('showPass')"></i></button>
                </div>
                @error('current_password')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label class="form-label">New Password</label>
                <div class="input-group">
                  <input type="{{ $showPass?'text':'password' }}" aria-describedby="new_password" class="form-control" wire:model="new_password">
                  <button class="input-group-text btn btn-primary" id="new_password"><i class="fa fa-{{ $showPass?'eye-slash':'eye' }}" wire:click="$toggle('showPass')"></i></button>
                </div>
                @error('new_password')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label class="form-label">Confirm Password</label>
                <div class="input-group">
                  <input type="{{ $showPass?'text':'password' }}" aria-describedby="confirm_password" class="form-control" wire:model="confirm_password">
                  <button class="input-group-text btn btn-primary" id="confirm_password"><i class="fa fa-{{ $showPass?'eye-slash':'eye' }}" wire:click="$toggle('showPass')"></i></button>
                </div>
                @error('confirm_password')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
            </div>
            <div class="card-footer text-end">
              <button class="btn btn-success" wire:click="UpdatePassword" wire:loading.attr="disabled">
                <span wire:loading.class="d-none" wire:target="UpdatePassword">Update</span>
                <span wire:loading wire:target="UpdatePassword">Processing</span>
              </button>
              <button type="reset" class="btn btn-danger" wire:click="Cancel" wire:loading.attr="disabled">
                <span wire:loading.class="d-none" wire:target="Cancel">Cancel</span>
                <span wire:loading wire:target="Cancel">Canceling</span>
              </button>
            </div>
            @if (Session::has('password_updated'))
              <small class="text-success px-2">{{ session()->get('password_updated') }}</small>
            @endif
          </div>
        </div>
        <div class="col-xl-9 col-lg-8">
          <div class="card">
            <div class="card-header ">
              <div class="card-title">Edit Profile</div>
            </div>
            <div class="card-body">
              <div class="card-title font-weight-bold">Basic info:</div>
              <div class="row">
                <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Name" value="{{ $name }}" wire:model="name">
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" disabled class="form-control" placeholder="Username" value="{{ $username }}" wire:model="username">
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" placeholder="Email" value="{{ $email }}" wire:model="email">
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label">Phone Number</label>
                    <input type="number" class="form-control" placeholder="Number" value="{{ $phone }}" wire:model="phone">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" placeholder="Home Address" value="{{ $address }}" wire:model="address">
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-group">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" placeholder="City" value="{{ $city }}" wire:model="city">
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label class="form-label">Postal Code</label>
                    <input type="number" class="form-control" placeholder="ZIP Code" value="{{ $post_code }}" wire:model="post_code">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="form-label">Country</label>
                    <input type="text" placeholder="Country" value="{{ $country }}" wire:model="country" class="form-control">
                  </div>
                </div>
              </div>
              <div class="card-title font-weight-bold mt-5">External Links:</div>
              <div class="row">
                <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label">Facebook</label>
                    <input type="text" class="form-control" placeholder="https://www.facebook.com/" value="{{ $facebook }}" wire:model="facebook">
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label">Google+</label>
                    <input type="text" class="form-control" placeholder="https://www.google.com/" value="{{ $google_plus }}" wire:model="google_plus">
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label">Twitter</label>
                    <input type="text" class="form-control" placeholder="https://twitter.com/" value="{{ $twitter }}" wire:model="twitter">
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label">Pinterest</label>
                    <input type="text" class="form-control" placeholder="https://in.pinterest.com/" value="{{ $pinterest }}" wire:model="pinterest">
                  </div>
                </div>
              </div>
              <div class="card-title font-weight-bold mt-5">About:</div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-label">About Me</label>
                    <textarea rows="5" class="form-control" placeholder="Enter About your description" wire:model="about">{{ $about }}</textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-end">
              @if (Session::has('basic_info_update'))
                <small class="text-success pe-4">{{ session()->get('basic_info_update') }}</small>
              @endif
              <button class="btn btn-success" wire:click="ChangeBasicInfo" wire:loading.attr="disabled">
                <span wire:loading.class="d-none" wire:target="ChangeBasicInfo">Update</span>
                <span wire:loading wire:target="ChangeBasicInfo">Updating</span>
              </button>
              {{-- <a href="javascript:void(0);" class="btn btn-danger">Cancel</a> --}}
            </div>
          </div>
        </div>
      </div>
      <!-- End Row-->
  
  
    </div>
  </div>
</div>
