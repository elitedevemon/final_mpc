<div>
  <div class="app-content main-content">
    <div class="side-app">
      <!-- Row -->
      <div class="row pt-3">
        @foreach ($forum_post as $post)
          <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card overflow-hidden">
              <div class="item7-card-img">
                <a href="{{ route('view.selected.post', ['slug'=> $post->slug, 'language'=>app()->getLocale()]) }}">
                <img src="{{ asset('images/post_images') }}/{{ $post->cover_image }}" alt="img" class="cover-image w-100" height="150px"></a>
              </div>
              <div class="card-body">
                <div class="item7-card-desc d-flex mb-5">
                  <a href="{{ route('view.selected.post', ['slug'=> $post->slug, 'language'=>app()->getLocale()]) }}" class="d-flex"><i class="fe fe-calender fs-16 me-1 p-3 bg-secondary-transparent brround text-secondary font-weight-bold border-secondary"></i><span class="mt-3 ms-1 text-muted font-weight-semibold"> {{ date('M-d-Y', strtotime($post->created_at)) }}</span></a>
                  <div class="ms-auto">
                    <a class="me-0 d-flex" href="{{ route('view.selected.post', ['slug'=> $post->slug, 'language'=>app()->getLocale()]) }}"><i class="fe fe-message-square fs-16 me-1 p-3 bg-warning-transparent brround text-warning font-weight-bold border-warning"></i><span class="mt-3 ms-1 text-muted font-weight-semibold">12 Comments</span></a>
                  </div>
                </div>
                <a href="{{ route('view.selected.post', ['slug'=> $post->slug, 'language'=>app()->getLocale()]) }}" class="mt-4"><h5 class="font-weight-semibold text-primary">{{ Str::words($post->title, 7) }}</h5></a>
                <p>{{ Str::words($post->short_desc, 18) }}</p>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center mt-auto">
                  <div class="avatar brround avatar-md me-3" style="background-image: url({{ asset('superadmin/assets/images/users/16.jpg') }})"></div>
                  <div>
                    <a href="profile-1.html" class="font-weight-semibold">{{ $superadmin_info->name }}</a>
                    <small class="d-block text-muted">{{ $post->created_at->diffForHumans() }}</small>
                  </div>
                  <div class="ms-auto text-muted mt-2">
                    @php
                      #Like related query
                      $checklike = App\Models\Backend\ForumLike::where('username', Auth::user()->username)->where('slug', $post->slug)->where('action', 'like')->first();
                      $total_like = App\Models\Backend\ForumLike::where('slug', $post->slug)->where('action', 'like')->get();

                      #Dislike related query
                      $checkdislike = App\Models\Backend\ForumLike::where('username', Auth::user()->username)->where('slug', $post->slug)->where('action', 'dislike')->first();
                      $total_dislike = App\Models\Backend\ForumLike::where('slug', $post->slug)->where('action', 'dislike')->get();
                    @endphp
                    <a href="javascript:void(0);" class="icon ms-3" title="Like" wire:click="like('{{ $post->slug }}')"><i class="fe fe-thumbs-up p-2 fs-20 text-icon text-{{ $checklike ?'primary':'success' }} bg-{{ $checklike ?'primary':'success' }}-transparent br-7"><small class="text-{{ $checklike ?'primary':'success' }}">{{ count($total_like) }}</small></i></a>
                    <a href="javascript:void(0);" class="icon ms-3" title="Dislike" wire:click="dislike('{{ $post->slug }}')"><i class="fe fe-thumbs-down p-2 fs-20 text-icon text-{{ $checkdislike?'danger':'success' }} bg-{{ $checkdislike?'danger':'success' }}-transparent br-7"><small class="text-{{ $checkdislike?'danger':'success' }}">{{ count($total_dislike) }}</small></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        <div class="text-center pb-3 pb-md-0 {{ count($forum_post)<$paginate_page?'d-none':'' }}">
          <button class="btn btn-primary w-25" wire:click="LoadMore" wire:loading.attr="disabled">
            <span wire:loading.class="d-none" wire:target="LoadMore">Load More</span>
            <span wire:loading wire:target="LoadMore">Loading...</span>
          </button>
        </div>
      </div>
      <!--End Row-->
  
  
    </div>
  </div>
</div>
