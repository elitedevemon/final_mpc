<div>
  <div class="app-content main-content">
    <div class="side-app">

      <!--Page header-->
      <div class="page-header">
        <div class="page-leftheader">
          <h4 class="page-title mb-0 text-primary">Notifications</h4>
        </div>
      </div>
      <!--End Page header-->
  
      <!-- Row-->
      <div class="row">
        @foreach ($faqs_notification as $faqs)
          <div class="col-lg-6">
            <div class="card card-aside">
              <div class="card-body  flex-column">
                <div class="d-flex align-items-center mb-5">
                  <div class="avatar  brround avatar-md me-3" style="background-image: url({{ asset('superadmin/assets/images/users/6.jpg') }})"></div>
                  <div>
                    @php
                      $name = App\Models\User::where('username', $faqs->username)->first();
                    @endphp
                    <a href="profile-1.html" class="font-weight-semibold">{{ $name->name }}</a>
                    <small class="d-block text-muted">{{ $faqs->created_at->diffForHumans() }}</small>
                  </div>
                  <div class="ms-auto text-muted">
                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-danger-transparent text-danger border-danger fe fe-heart  fs-16 text-icon"></i></a>
                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-success-transparent border-success text-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
                  </div>
                </div>
                <h4><a href="javascript:void(0);">Posted Question</a></h4>
                <div class="text-muted ">{{ Str::words($faqs->question, 10) }}</div>
                <div><a href="#" class=" mt-3 btn btn-sm btn-primary">Read more</a></div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <!-- End row-->
    </div>
  </div>
</div>
