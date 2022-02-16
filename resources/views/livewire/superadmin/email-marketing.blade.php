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
                        <h4 class="mb-sm-0 font-size-18">Email Marketing</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                                <li class="breadcrumb-item active">Contact Information</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!--Start content here-->
            <div class="row">
              <div class="col-12 col-md-3">
                <div class="form-check">
                  <input type="radio" {{ $topic == 'gearlaunch'?'checked':'' }} name="marketing_topic" id="gearlaunch" class="form-check-input" wire:click="setTopic('gearlaunch')">
                  <label for="gearlaunch" class="form-check-label">Gearlaunch</label>
                </div>
              </div>
              <div class="col-12 col-md-3">
                <div class="form-check">
                  <input type="radio" {{ $topic == 'youtube'?'checked':'' }} name="marketing_topic" id="youtube" class="form-check-input" wire:click="setTopic('youtube')">
                  <label for="youtube" class="form-check-label">YouTube</label>
                </div>
              </div>
              <div class="col-12 col-md-2">
                <div class="form-check">
                  <input type="radio" {{ $topic == 'fiverr'?'checked':'' }} name="marketing_topic" id="fiverr" class="form-check-input" wire:click="setTopic('fiverr')">
                  <label for="fiverr" class="form-check-label">Fiverr</label>
                </div>
              </div>
              <div class="col-12 col-md-2">
                <div class="form-check">
                  <input type="radio" {{ $topic == 'website'?'checked':'' }} name="marketing_topic" id="website" class="form-check-input" wire:click="setTopic('website')">
                  <label for="website" class="form-check-label">Website</label>
                </div>
              </div>
              <div class="col-12 col-md-2">
                <div class="form-check">
                  <input type="radio" {{ $topic == 'info'?'checked':'' }} name="marketing_topic" id="info" class="form-check-input" wire:click="setTopic('info')">
                  <label for="info" class="form-check-label">Info</label>
                </div>
              </div>
            </div>
            <h5 class="text-center" wire:loading wire:target='topic'>Loading.. <i class="fas fa-spinner fa-spin"></i></h5>
            @if ($topic == 'gearlaunch')
              @livewire('superadmin.email-marketing.gearlaunch')
            @elseif($topic == 'youtube')
              @livewire('superadmin.email-marketing.youtube')
            @elseif($topic == 'fiverr')
              @livewire('superadmin.email-marketing.fiverr')
            @elseif($topic == 'website')
              @livewire('superadmin.email-marketing.website')
            @elseif($topic == 'info')
              @livewire('superadmin.email-marketing.info')
            @endif
            <!--end content here-->
        </div>
    </div>
  </div>
</div>
