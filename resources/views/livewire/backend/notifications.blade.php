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
                  @php
                    $name = App\Models\User::where('username', $faqs->username)->first();
                  @endphp
                  <div class="avatar  brround avatar-md me-3" style="background-image: url({{ $name->profile_image }})"></div>
                  <div>
                    <a href="profile-1.html" class="font-weight-semibold">{{ $name->name }}</a>
                    <small class="d-block text-muted">{{ $faqs->created_at->diffForHumans() }}</small>
                  </div>
                </div>
                <h4><a href="javascript:void(0);">Posted Question</a></h4>
                <div class="text-muted ">{{ Str::words($faqs->question, 10) }}</div>
                <div><a href="{{ route('view.selected.faq', ['faq_id'=>$faqs->id, 'language'=> app()->getLocale()]) }}" class=" mt-3 btn btn-sm btn-primary">Read more</a></div>
              </div>
            </div>
          </div>
        @endforeach
        @foreach ($friend_request_notification as $request)
        <div class="col-lg-6">
          <div class="card card-aside">
            <div class="card-body  flex-column">
              <div class="d-flex align-items-center mb-5">
                @php
                  $user = App\Models\User::where('username', $request->sender_username)->first();
                @endphp
                <div class="avatar  brround avatar-md me-3" style="background-image: url({{ $user->profile_image }})"></div>
                <div>
                  <a href="profile-1.html" class="font-weight-semibold">{{ $user->name }}</a>
                  <small class="d-block text-muted">{{ $request->created_at->diffForHumans() }}</small>
                </div>
              </div>
              <h4><a href="javascript:void(0);">Sent Friend Request</a></h4>
              <div><a href="{{ route('show.selected.profile', ['language'=>app()->getLocale(), 'username'=>$user->username]) }}" class=" mt-3 btn btn-sm btn-primary">View Profile</a></div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- End row-->
    </div>
  </div>
</div>
