<div>
  <div class="app-content main-content">
    <div class="side-app">
      <!-- Row -->
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <textarea class="form-control br-br-0 br-bl-0" placeholder="Type your question here...." rows="5" wire:model="question"></textarea>
              <div class="profile-share border border-light2 border-top-0">
                {{-- <a href="javascript:void(0);" class="me-2" title="" data-bs-toggle="tooltip" data-placement="top" data-original-title="Audio"><i class="fe fe-mic fs-20"></i></a>
                <a href="javascript:void(0);" class="me-2" title="" data-bs-toggle="tooltip" data-placement="top" data-original-title="Video"><i class="fe fe-video fs-20"></i></a>
                <a href="javascript:void(0);" class="me-2" title="" data-bs-toggle="tooltip" data-placement="top" data-original-title="Picture"><i class="fe fe-image fs-20"></i></a> --}}
                <a href="javascript:void(0);" class="me-2" title="" data-bs-toggle="tooltip" data-placement="top" data-original-title="Picture" wire:click="erase">
                  <i class="fa fa-eraser" wire:loading.class="d-none" wire:target="erase"></i>
                  <div class="spinner-border spinner-border-sm text-info" role="status" wire:loading wire:target="erase">
                    <span class="sr-only">Loading...</span>
                  </div>
                </a>
                @if (Session::has('question_posted'))
                  <small class="text-success">{{ session()->get('question_posted') }}</small>
                @endif
                @error('question')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
                <button class="btn btn-outline-success mt-1 pull-right" wire:click="PostQuestion" wire:loading.attr="disabled"><i class="fa fa-share ms-1"></i>
                  <span wire:loading.class="d-none" wire:target="PostQuestion"> Share</span>
                  <span wire:loading wire:target="PostQuestion"> Processing</span>
                </button>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header ">
              <div class="card-title">Questions</div>
            </div>
            @foreach ($all_questions as $question)
              <div class="card-body pb-0 mb-0">
                <div class="d-flex">
                  <div class="media mt-0">
                    <div class="media-user me-2">
                      <div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{ asset('superadmin/assets//images/users/2.jpg') }}"></div>
                    </div>
                    <div class="media-body">
                      @php
                        $questioner_user = App\Models\User::where('username', $question->username)->first();
                      @endphp
                      <h6 class="mb-0 mt-1 font-weight-bold">{{ $questioner_user->name }}</h6>
                      <small class="text-primary">{{ $question->created_at->diffForHumans() }}</small>
                    </div>
                  </div>
                </div>
                <div class="mt-4">
                  <p class="mb-2">{{ $question->question }}</p>
                </div>
                @php
                  #Like related queries
                  $check_like = App\Models\Backend\FaqsLike::where('username', Auth::user()->username)->where('faq_id', $question->id)->where('action', 'like')->first();
                  $total_like = App\Models\Backend\FaqsLike::where('faq_id', $question->id)->where('action', 'like')->get();

                  #Dislike related queries
                  $check_dislike = App\Models\Backend\FaqsLike::where('username', Auth::user()->username)->where('faq_id', $question->id)->where('action', 'dislike')->first();
                  $total_dislike = App\Models\Backend\FaqsLike::where('faq_id', $question->id)->where('action', 'dislike')->get();
                @endphp
                <div class="media mg-t-15 profile-footer">
                  <div class=" me-2 mt-1">
                    <div class="avatar-list avatar-list-stacked">
                      {{-- <span class="avatar brround" style="background-image: url({{ asset('superadmin/assets//images/users/12.jpg') }})"></span>
                      <span class="avatar brround" style="background-image: url({{ asset('superadmin/assets//images/users/2.jpg') }})"></span>
                      <span class="avatar brround" style="background-image: url({{ asset('superadmin/assets//images/users/9.jpg') }})"></span>
                      <span class="avatar brround" style="background-image: url({{ asset('superadmin/assets//images/users/2.jpg') }})"></span>
                      <span class="avatar brround" style="background-image: url({{ asset('superadmin/assets//images/users/4.jpg') }})"></span> --}}
                      <span class="avatar brround bg-primary text-light {{ count($total_like)>0?'':'d-none' }}">+{{ count($total_like) }}</span>
                      <span class="avatar brround ms-3 bg-danger text-light {{ count($total_dislike)>0?'':'d-none' }}">+{{ count($total_dislike) }}</span>
                      <span class="avatar brround ms-3 bg-success text-light">+29</span>
                    </div>
                  </div>
                  {{-- <div class="media-body">
                    <h6 class="mb-0 mt-4 ms-2">28 people like your photo</h6>
                  </div> --}}
                  <div class="ms-auto">
                    <a class="new {{ $check_like?'bg-primary text-light':'' }}" href="JavaScript:void(0);"><i class="fe fe-thumbs-up" title="Like" wire:click="like('{{ $question->id }}')"></i></a>
                    <a class="new {{ $check_dislike?' bg-danger text-light':'' }}" href="JavaScript:void(0);"><i class="fe fe-thumbs-down" title="Dislike" wire:click="dislike('{{ $question->id }}')"></i></a>
                    <a class="new bg-success text-light" href="JavaScript:void(0);"><i class="fe fe-message-square"></i></a>
                    {{-- <a class="new" href="JavaScript:void(0);"><i class="fe fe-share-2"></i></a> --}}
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          <div class="text-center {{ count($all_questions)<$pagination_page?'d-none':'' }}">
            <button class="btn btn-primary w-25" wire:click="LoadMore" wire:loading.attr="disabled">
              <span wire:loading.class="d-none" wire:target="LoadMore">Load More</span>
              <span wire:loading wire:target="LoadMore">Loading...</span>
            </button>
          </div>
        </div>
      </div>
      <!-- End Row -->
  
  
    </div>
  </div>
</div>
