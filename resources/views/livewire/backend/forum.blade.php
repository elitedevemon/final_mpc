<div>
  <div class="app-content main-content">
    <div class="side-app">
      <!-- Row -->
      <div class="row pt-3">
        @foreach ($forum_post as $post)
          <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card overflow-hidden">
              <div class="item7-card-img">
                <a href="javascript:void(0);">
                <img src="{{ asset('images/post_images') }}/{{ $post->cover_image }}" alt="img" class="cover-image w-100"></a>
              </div>
              <div class="card-body">
                <div class="item7-card-desc d-flex mb-5">
                  <a href="javascript:void(0);" class="d-flex"><i class="fe fe-calender fs-16 me-1 p-3 bg-secondary-transparent brround text-secondary font-weight-bold border-secondary"></i><span class="mt-3 ms-1 text-muted font-weight-semibold"> {{ date('M-d-Y', strtotime($post->created_at)) }}</span></a>
                  <div class="ms-auto">
                    <a class="me-0 d-flex" href="javascript:void(0);"><i class="fe fe-message-square fs-16 me-1 p-3 bg-warning-transparent brround text-warning font-weight-bold border-warning"></i><span class="mt-3 ms-1 text-muted font-weight-semibold">12 Comments</span></a>
                  </div>
                </div>
                <a href="javascript:void(0);" class="mt-4"><h5 class="font-weight-semibold text-primary">{{ $post->title }}</h5></a>
                <p>{{ Str::words($post->text, 10) }}</p>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center mt-auto">
                  <div class="avatar brround avatar-md me-3" style="background-image: url({{ asset('superadmin/assets/images/users/16.jpg') }})"></div>
                  <div>
                    <a href="profile-1.html" class="font-weight-semibold">{{ $superadmin_info->name }}</a>
                    <small class="d-block text-muted">{{ $post->created_at->diffForHumans() }}</small>
                  </div>
                  <div class="ms-auto text-muted mt-2">
                    <a href="javascript:void(0);" class="text-danger icon d-none d-md-inline-block ms-3"><i class="fe fe-heart p-2 fs-20 text-icon text-danger bg-danger-transparent br-7"></i></a>
                    <a href="javascript:void(0);" class="icon d-none d-md-inline-block ms-3"><i class="fe fe-thumbs-up p-2 fs-20 text-icon text-success bg-success-transparent br-7"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        {{ $forum_post->links() }}
      </div>
      <!--End Row-->
  
  
    </div>
  </div>
</div>
