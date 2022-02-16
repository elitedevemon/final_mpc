<div>
  <div class="app-content main-content">
    <div class="side-app">
      <!-- Row -->
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-body"
              x-data="{ isUploading: false, progress: 5 }"
              x-on:livewire-upload-start="isUploading = true"
              x-on:livewire-upload-finish="isUploading = true"
              x-on:livewire-upload-error="isUploading = false"
              x-on:livewire-upload-progress="progress = $event.detail.progress"
            >
              <textarea class="form-control br-br-0 br-bl-0" placeholder="Type your question here...." rows="5" wire:model.defer="question"></textarea>
              <div class="profile-share border border-light2 border-top-0">
                {{-- <a href="javascript:void(0);" class="me-2" title="" data-bs-toggle="tooltip" data-placement="top" data-original-title="Audio"><i class="fe fe-mic fs-20"></i></a>
                <a href="javascript:void(0);" class="me-2" title="" data-bs-toggle="tooltip" data-placement="top" data-original-title="Video"><i class="fe fe-video fs-20"></i></a> --}}
                <label for="faq_image" style="cursor: pointer">
                  <a class="me-2" title="" data-bs-toggle="tooltip" data-placement="top" data-original-title="Picture">
                    <i class="fe fe-image fs-20"></i>
                  </a>
                </label>
                <input type="file" multiple accept="image/*" wire:model="faq_image" style="display: none" id="faq_image">
                <a href="javascript:void(0);" class="me-2" title="" data-bs-toggle="tooltip" data-placement="top" data-original-title="Picture" wire:click="erase">
                  <i class="fa fa-eraser" wire:loading.class="d-none" wire:target="erase"></i>
                  <div class="spinner-border spinner-border-sm text-info" role="status" wire:loading wire:target="erase">
                    <span class="sr-only">Loading...</span>
                  </div>
                </a>
                <button class="btn btn-outline-success mt-1 pull-right" @click="isUploading=false" wire:click="PostQuestion" wire:target='faq_image' wire:loading.attr="disabled"><i class="fa fa-share ms-1"></i>
                  <span wire:loading.class="d-none" wire:target="PostQuestion"> Share</span>
                  <span wire:loading wire:target="PostQuestion"> Processing</span>
                </button>
              </div>

              <div class="row" x-show="isUploading">
                <div class="col-11">
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width: ${progress}%`" x-text="`${progress}%`"></div>
                  </div>
                </div>
                <div class="col-1" @click="isUploading = false" wire:click="cancelPhoto">
                  <span class="text-danger" style="cursor: pointer">X</span>
                </div>
              </div>
              
              @if (Session::has('question_posted'))
                <small class="text-success">{{ session()->get('question_posted') }}</small>
              @endif
              @error('question')
                <small class="text-danger">{{ $message }}</small>
              @enderror
              @error('faq_image_more')
                <small class="text-danger">{{ $message }}</small>
              @enderror
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
                    @php
                      $questioner_user = App\Models\User::where('username', $question->username)->first();
                    @endphp
                    <div class="media-user me-2">
                      <a href="{{ route('show.selected.profile', ['language'=> app()->getLocale(), 'username'=>$questioner_user->username]) }}" class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{ $questioner_user->profile_image }}"></a>
                    </div>
                    <div class="media-body">
                      <a href="{{ route('show.selected.profile', ['language'=> app()->getLocale(), 'username'=>$questioner_user->username]) }}">
                        <h6 class="mb-0 mt-1 font-weight-bold">{{ $questioner_user->name }}</h6>
                      </a>
                      <small class="text-primary">{{ $question->created_at->diffForHumans() }}</small>
                    </div>
                  </div>
                </div>
                <div class="mt-4">
                  <a href="{{ route('view.selected.faq', ['faq_id'=>$question->id, 'language'=> app()->getLocale()]) }}">
                    <p class="mb-2">{{ $question->question }}</p>
                  </a>
                  <!--Faq image related PHP code-->
                    @php
                      $images = App\Models\Backend\FaqImages::where('faq_id', $question->id)->get()
                    @endphp
                  <!--End PHP code-->
                  @if(count($images)==1)
                    <div class="row">
                      <div class="col-4"></div>
                      <div class="col-4 pb-1">
                        @foreach ($images as $image)
                          <img src="{{ $image->image_url }}" alt="Question related photo" class="w-100">
                        @endforeach
                      </div>
                      <div class="col-4"></div>
                    </div>
                  @elseif(count($images)==2)
                    <div class="row">
                      @foreach ($images as $image)
                        <div class="col-6 col-md-6 p-0 pb-1">
                          <img src="{{ $image->image_url }}" alt="Question related photo" class="w-100">
                        </div>
                      @endforeach
                    </div>
                  @elseif(count($images)===3)
                    <div class="row">
                      @foreach ($images as $image)
                        <div class="col-4 col-md-4 p-0 pb-1">
                          <img src="{{ $image->image_url }}" height="200px" alt="Question related photo" class="w-100">
                        </div>
                      @endforeach
                    </div>
                  @endif
                </div>
                @php
                  #Like related queries
                  $check_like = App\Models\Backend\FaqsLike::where('username', Auth::user()->username)->where('faq_id', $question->id)->where('action', 'like')->first();
                  $total_like = App\Models\Backend\FaqsLike::where('faq_id', $question->id)->where('action', 'like')->get();

                  #Dislike related queries
                  $check_dislike = App\Models\Backend\FaqsLike::where('username', Auth::user()->username)->where('faq_id', $question->id)->where('action', 'dislike')->first();
                  $total_dislike = App\Models\Backend\FaqsLike::where('faq_id', $question->id)->where('action', 'dislike')->get();

                  #Faq comment related queries
                  $total_comment = App\Models\Backend\FaqComment::where('faq_id', $question->id)->get(); 
                  $check_comment = App\Models\Backend\FaqComment::where('username', Auth::user()->username)->where('faq_id', $question->id)->first();
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
                      <span class="avatar brround ms-3 bg-success text-light {{ count($total_comment)>0?'':'d-none' }}">+{{ count($total_comment) }}</span>
                    </div>
                  </div>
                  {{-- <div class="media-body">
                    <h6 class="mb-0 mt-4 ms-2">28 people like your photo</h6>
                  </div> --}}
                  <div class="ms-auto">
                    <a class="new {{ $check_like?'bg-primary text-light':'' }}" href="JavaScript:void(0);" wire:click="like('{{ $question->id }}')"><i class="fe fe-thumbs-up" title="Like"></i></a>
                    <a class="new {{ $check_dislike?' bg-danger text-light':'' }}" href="JavaScript:void(0);" wire:click="dislike('{{ $question->id }}')"><i class="fe fe-thumbs-down" title="Dislike"></i></a>
                    <a class="new {{ $check_comment?'bg-success text-light':'' }}" href="{{ route('view.selected.faq', ['faq_id'=>$question->id, 'language'=> app()->getLocale()]) }}"><i class="fe fe-message-square"></i></a>
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
