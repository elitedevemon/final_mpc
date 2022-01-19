<div>
  <div class="app-content main-content">
    <div class="side-app">
  
      <!-- Row -->
      <div class="row mt-4">
        <div class="col-xl-3 col-lg-12 col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="box-widget widget-user text-center">
                <div class="widget-user-image mx-auto">
                  <img alt="User Avatar" class="rounded-circle" src="{{ Auth::user()->profile_image }}">
                </div>
                <div class="mt-4 ms-sm-5 ms-0">
                  <h4 class="pro-user-username  mb-2 font-weight-bold">{{ Auth::user()->name }}</h4>
                  <div>
                    <span class="badge fs-13 bg-primary-transparent text-primary border-primary  me-2">{{ Auth::user()->role }}</span>
                    <span class="badge fs-13 bg-success-transparent text-success border-success">{{ Auth::user()->level }}</span>
                  </div>
                  <div class="wideget-user-icons mb-2 mt-2">
                    <a href="{{ Auth::user()->facebook }}"  target="_blank" class="{{ Auth::user()->facebook?'':'d-none' }} bg-primary text-white mt-0"><i class="fa fa-facebook"></i></a>
                    <a href="{{ Auth::user()->twitter }}"  target="_blank" class="{{ Auth::user()->twitter?'':'d-none' }} bg-info text-white"><i class="fa fa-twitter"></i></a>
                    <a href="{{ Auth::user()->google_plus }}"  target="_blank" class="{{ Auth::user()->google_plus?'':'d-none' }} bg-google text-white"><i class="fa fa-google"></i></a>
                    {{-- <a href="javascript:void(0);" class="bg-dribbble text-white"><i class="fa fa-dribbble"></i></a> --}}
                  </div>
                  <a href="{{ route('show.settings.page', app()->getLocale()) }}" class="btn btn-success mt-3"><i class="fa fa-pencil"></i> Edit Profile</a>
                  {{-- <a href="javascript:void(0);" class="btn btn-primary mt-3"><i class="fa fa-pencil"></i> Follow</a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header ">
              <div class="card-title">Education</div>
              <div class="ms-auto">
                
                <button type="button" class="btn btn-danger px-2 py-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="main-profile-contact-list">
                <div class="media me-5 mt-0">
                  <div class="media-icon bg-info-transparent text-info me-4">
                    <i class="fa fa-briefcase"></i>
                  </div>
                  <div class="media-body">
                    <h5 class="font-weight-bold mb-1">Works at:</h5>
                    <div class="">
                      <span class="fw-bold">{{ $userEduDetails->work_place }}</span><br>
                      <span>{{ date('Y', strtotime($userEduDetails->start_working)) }} - {{ date('Y', strtotime($userEduDetails->end_working)) }}</span>
                      <p class="{{ $userEduDetails->past_work?'':'d-none' }}">Past Work: {{ $userEduDetails->past_work }}</p>
                    </div>
                  </div>
                </div>
                <div class="media me-5">
                  <div class="media-icon bg-success-transparent text-success me-4">
                    <i class="fa fa-graduation-cap"></i>
                  </div>
                  <div class="media-body">
                    <h5 class="font-weight-bold mb-1">Studied at:</h5>
                    <div class="">
                      <span class="fw-bold">{{ $userEduDetails->educational_institute }}</span><br>
                      <span>{{ date('Y', strtotime($userEduDetails->start_reading)) }} - {{ date('Y', strtotime($userEduDetails->end_reading)) }}</span>
                      <p class="{{ $userEduDetails->graduate_institute?'':'d-none' }}">Graduation: {{ $userEduDetails->graduate_institute }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--Education detaild edit modal-->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Update Education Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h4 class="fw-bold">Works at:</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <label for="work_place">Work place</label>
                        <input type="text" id="work_place" placeholder="Where are you working now?" class="form-control" wire:model='workPlace'>
                      </div>
                      <div class="col-md-6">
                        <label for="working_from">Working since</label>
                        <div class="row">
                          <div class="col-6">
                            <input type="date" name="" placeholder="Start working" id="working_from" class="form-control" wire:model='startWorking'>
                          </div>
                          <div class="col-6">
                            <input type="date" name="" placeholder="End working" id="working_from" class="form-control" wire:model='endWorking'>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="past_work">Past work</label>
                        <input type="text" name="" placeholder="Where you work before?" id="past_work" class="form-control" wire:model='pastWork'>
                      </div>
                    </div>
                    <h4 class="mt-3 fw-bold">Studied at:</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <label for="educational_institute">Educational Institute</label>
                        <input type="text" id="educational_institute" placeholder="Where are you studying now?" class="form-control" wire:model='educationalInstitute'>
                      </div>
                      <div class="col-md-6">
                        <label for="working_from">Graduated</label>
                        <div class="row">
                          <div class="col-6">
                            <input type="date" name="" placeholder="" id="graduate_from" class="form-control" wire:model='startReading'>
                          </div>
                          <div class="col-6">
                            <input type="date" name="" placeholder="End working" id="graduate_from" class="form-control" wire:model='endReading'>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="graduate_place">Graduate from</label>
                        <input type="text" name="" placeholder="Institute name.." id="graduate_place" class="form-control" wire:model='graduateInstitute'>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" wire:click='saveEduInfo'>Save</button>
                  </div>
                </div>
              </div>
            </div>
            <!--End modal-->

          </div>
          <div class="card">
            <div class="card-header ">
              <div class="card-title">Contact</div>
            </div>
            <div class="card-body">
              <div class="main-profile-contact-list">
                <div class="media me-4 mt-0 mb-3">
                  <div class="media-icon bg-danger-transparent text-danger me-3 mt-1">
                    <i class="fa fa-phone"></i>
                  </div>
                  <div class="media-body">
                    <small class="text-muted">Mobile</small>
                    <div class="font-weight-normal1">
                      {{ Auth::user()->phone }}
                    </div>
                  </div>
                </div>
                <div class="media me-4 mb-3">
                  <div class="media-icon bg-warning-transparent text-warning me-3 mt-1">
                    <i class="fa fa-slack"></i>
                  </div>
                  <div class="media-body">
                    <small class="text-muted">Email</small>
                    <div class="font-weight-normal1">
                      {{ Auth::user()->email }}
                    </div>
                  </div>
                </div>
                <div class="media">
                  <div class="media-icon bg-primary-transparent text-primary me-3 mt-1">
                    <i class="fa fa-map"></i>
                  </div>
                  <div class="media-body">
                    <small class="text-muted">Current Address</small>
                    <div class="font-weight-normal1">
                      {{ Auth::user()->address }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header ">
              <div class="card-title">Posted FAQ's</div>
            </div>
            @foreach ($all_questions as $question)
              <div class="card-body pb-0 mb-0">
                <div class="d-flex">
                  <div class="media mt-0">
                    @php
                      $questioner_user = App\Models\User::where('username', $question->username)->first();
                    @endphp
                    <div class="media-user me-2">
                      <div class=""><img alt="" class="rounded-circle avatar avatar-md" src="{{ $questioner_user->profile_image }}"></div>
                    </div>
                    <div class="media-body">
                      <h6 class="mb-0 mt-1 font-weight-bold">{{ $questioner_user->name }}</h6>
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
