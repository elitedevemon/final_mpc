<div>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

  <div class="page-content">
      <div class="container-fluid">

          <!-- start page title -->
          <div class="row">
              <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                      <h4 class="mb-sm-0 font-size-18">Update Contact Information</h4>

                      <div class="page-title-right">
                          <ol class="breadcrumb m-0">
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Update</a></li>
                              <li class="breadcrumb-item active">Contact Information</li>
                          </ol>
                      </div>

                  </div>
              </div>
          </div>
          <!-- end page title -->
          <!--Start content here-->
          @if (Session::has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
          @endif
          <div class="row">
            <div class="col-md-6">
              <input type="text" placeholder="Email" wire:model="email" value="{{ $email }}" class="form-control">
            </div>
            <div class="col-md-6">
              <input type="text" placeholder="Phone" wire:model="phone" value="{{ $phone }}" class="form-control">
            </div>
            <div class="col-md-6 mt-2">
              <textarea placeholder="Address" wire:model="address" rows="3" class="form-control">{{ $address }}</textarea>
            </div>
            <div class="col-md-6 mt-2">
              <input type="text" placeholder="Facebook" wire:model="facebook" value="{{ $facebook }}" class="form-control">
            </div>
            <div class="col-md-6 mt-2">
              <input type="text" placeholder="Twitter" wire:model="twitter" value="{{ $twitter }}" class="form-control">
            </div>
            <div class="col-md-6 mt-2">
              <input type="text" placeholder="Instagram" wire:model="instagram" value="{{ $instagram }}" class="form-control">
            </div>
            <div class="col-md-6 mt-2">
              <input type="text" placeholder="Linked-In" wire:model="linkedin" value="{{ $linkedin }}" class="form-control">
            </div>
            <div class="col-md-6 mt-2">
              <input type="text" placeholder="Pinterest" wire:model="pinterest" value="{{ $pinterest }}" class="form-control">
            </div>
            <div class="col-md-6 mt-2">
              <input type="text" placeholder="Skype" wire:model="skype" value="{{ $skype }}" class="form-control">
            </div>
            <div class="col-md-6 mt-2">
              <input type="text" placeholder="Whatsapp" wire:model="whatsapp" value="{{ $whatsapp }}" class="form-control">
            </div>
            <div class="col-md-6 mt-2">
              <input type="text" placeholder="Murad Private Center Youtube" wire:model="yt_mpc" value="{{ $yt_mpc }}" class="form-control">
            </div>
            <div class="col-md-6 mt-2">
              <input type="text" placeholder="MH Teaching Method" wire:model="yt_mh" value="{{ $yt_mh }}" class="form-control">
            </div>
          </div>
          <button class="btn btn-success mt-2" wire:click="update" wire:target="update" wire:loading.attr="disabled">
            <span wire:loading.class="d-none" wire:target="update">Update</span>
            <span wire:loading wire:target="update">Updating</span>
          </button>
          <!--End content here-->
      </div>
      <!-- container-fluid -->
  </div>
  <!-- End Page-content -->


  <footer class="footer">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-6">
                  <script>document.write(new Date().getFullYear())</script> © Minia.
              </div>
              <div class="col-sm-6">
                  <div class="text-sm-end d-none d-sm-block">
                      Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                  </div>
              </div>
          </div>
      </div>
  </footer>
</div>
<!-- end main content-->
</div>
