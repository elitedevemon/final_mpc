<div>
  <div class="app-content main-content">
    <div class="side-app">
      <div class="main-proifle">
        <div class="row d-lg-none">
          <div class="col-lg-12 col-xl-8">
            <div class="box-widget widget-user">
              <div class="widget-user-image1 d-xl-flex d-block">
                <div class="text-center">
                  <img alt="User Avatar" class="avatar brround p-0" src="{{ $user->profile_image }}">
                  <div class="mt-1 ms-xl-5">
                    <h4 class="pro-user-username mb-3 font-weight-bold">{{ $user->name }} <i class="fa fa-check-circle text-success {{ $user->email_verified_at?'':'d-none' }}"></i></h4>
                  </div>

                  <!--PHP related query-->
                  @php
                    # Exists follow
                    $existsFollow = App\Models\FollowAndUnfollow::where('sender_username', Auth::user()->username)->where('receiver_username', $this->selected_username)->where('action', 'follow')->first();

                    # Exists send friend request
                    $existsSendRequest = App\Models\Backend\FriendRequest::where('sender_username', Auth::user()->username)->where('receiver_username', $user->username)->where('action', 'in-process')->first();

                    # already friend
                    $alreadyFriend = App\Models\Backend\FriendRequest::where('sender_username', Auth::user()->username)->where('receiver_username', $user->username)->where('action', 'success')->orWhere('sender_username', $user->username)->where('receiver_username', Auth::user()->username)->where('action', 'success')->first();

                    # Exists received friend request
                    $existsReceivedRequest = App\Models\Backend\FriendRequest::where('sender_username', $user->username)->where('receiver_username', Auth::user()->username)->where('action', 'in-process')->first();
                  @endphp
                  <!--end PHP query-->

                  <div class="text-xl-right text-left btn-list mt-4 mt-lg-0 {{ Auth::user()->username == $user->username?'d-none':'' }}">
                    <!--All Send friend request buttons-->
                      <button wire:click="addFriend('{{ $user->username }}')" class="btn btn-outline-info {{ $existsSendRequest?'d-none':'' }} {{ $alreadyFriend?'d-none':'' }} {{ $existsReceivedRequest?'d-none':'' }}" wire:loading.attr='disabled'>
                        <span wire:target='addFriend' wire:loading.class='d-none'>Add Friend</span>
                        <span wire:target='addFriend' wire:loading>Processing..</span>
                      </button>
                      <button wire:click="cancelSendRequest('{{ $user->username }}')" class="btn btn-outline-danger {{ $existsSendRequest?'':'d-none' }} {{ $alreadyFriend?'d-none':'' }} {{ $existsReceivedRequest?'d-none':'' }}" wire:loading.attr='disabled'>
                        <span wire:target='cancelSendRequest' wire:loading.class='d-none'>Cancel Request</span>
                        <span wire:target='cancelSendRequest' wire:loading>Processing..</span>
                      </button>
                    <!--End send request buttons-->

                    <!--All received friend request buttons-->
                      <button wire:click="confirmReceivedRequest('{{ $user->username }}')" class="btn btn-outline-success {{ $existsSendRequest?'d-none':'' }} {{ $alreadyFriend?'d-none':'' }} {{ $existsReceivedRequest?'':'d-none' }}" wire:loading.attr='disabled'>
                        <span wire:target='confirmReceivedRequest' wire:loading.class='d-none'>Confirm Request</span>
                        <span wire:target='confirmReceivedRequest' wire:loading>Processing..</span>
                      </button>
                      <button wire:click="cancelReceivedRequest('{{ $user->username }}')" class="btn btn-outline-danger {{ $existsSendRequest?'d-none':'' }} {{ $alreadyFriend?'d-none':'' }} {{ $existsReceivedRequest?'':'d-none' }}" wire:loading.attr='disabled'>
                        <span wire:target='cancelReceivedRequest' wire:loading.class='d-none'>Cancel Request</span>
                        <span wire:target='cancelReceivedRequest' wire:loading>Processing..</span>
                      </button>
                    <!--End received request buttons-->
                    <a href="javascript:void(0);" class="btn btn-outline-primary {{ $alreadyFriend?'':'d-none' }}">Message</a>
                    <button class="btn btn-outline-danger {{ $alreadyFriend?'':'d-none' }}" wire:loading.attr='disabled' wire:click="unfriend('{{ $user->username }}')">
                      <span wire:target='unfriend' wire:loading.class='d-none'>Unfriend</span>
                      <span wire:target='unfriend' wire:loading>Processing..</span>
                    </button>
                    <button class="btn btn-primary {{ $existsFollow?'d-none':'' }}" wire:click="follow('{{ $user->username }}')" wire:loading.attr='disabled'>
                      <span wire:target='follow' wire:loading.class='d-none'>Follow</span>
                      <span wire:target='follow' wire:loading>Processing..</span>
                    </button>
                    <button class="btn btn-outline-secondary {{ $existsFollow?'':'d-none' }}" wire:click="unfollow('{{ $user->username }}')" wire:loading.attr='disabled'>
                      <span wire:target='unfollow' wire:loading.class='d-none'>Unfollow</span>
                      <span wire:target='unfollow' wire:loading>Processing..</span>
                    </button>
                  </div>
                </div>
                <div class="mt-2">
                  <div class="main-profile-contact-list row">
                    {{-- <div class="media col-4 mb-3">
                      <div class="media-icon bg-primary-transparent text-primary me-3 mt-1">
                        <i class="fa fa-comments fs-18"></i>
                      </div>
                      <div class="media-body">
                        <small class="text-muted">Posts</small>
                        <div class="font-weight-bold number-font">
                          245
                        </div>
                      </div>
                    </div> --}}
                    <div class="media col-6 mb-3">
                      <div class="media-icon bg-primary-transparent text-primary me-3 mt-1">
                        <i class="fa fa-users fs-18"></i>
                      </div>
                      <div class="media-body">
                        <small class="text-muted">Followers</small>
                        <div class="font-weight-normal1">
                          {{ count($totalFollowers) }}
                        </div>
                      </div>
                    </div>
                    <div class="media col-6 mb-3">
                      <div class="media-icon bg-primary-transparent text-primary me-3 mt-1">
                        <i class="fa fa-feed fs-18"></i>
                      </div>
                      <div class="media-body">
                        <small class="text-muted">Following</small>
                        <div class="font-weight-bold number-font">
                          {{ count($totalFollowing) }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="widget-user-image1 d-xl-flex d-block">
                  <ul class="mb-0 pro-details">
                    <li><span class="profile-icon bg-danger-transparent text-danger"><i class="fe fe-globe"></i></span><span class="h6 mt-3">www.mpcmethod.com</span></li>
                    <li><span class="profile-icon bg-success-transparent text-success"><i class="fe fe-mail"></i></span><span class="h6 mt-3">{{ $user->email }}</span></li>
                    <li><span class="profile-icon bg-info-transparent text-info"><i class="fe fe-flag"></i></span><span class="h6 mt-3">English</span></li>
                    <li><span class="profile-icon bg-warning-transparent text-warning"><i class="fe fe-phone-call"></i></span><span class="h6 mt-3">{{ $user->phone }}</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row desktopDisplay">
          <div class="col-lg-12 col-xl-8">
            <div class="box-widget widget-user">
              <div class="widget-user-image1 d-xl-flex d-block">
                <img alt="User Avatar" class="avatar brround p-0" src="{{ $user->profile_image }}">
                <div class="mt-1 ms-xl-5">
                  <h4 class="pro-user-username mb-3 font-weight-bold">{{ $user->name }} <i class="fa fa-check-circle text-success {{ $user->email_verified_at?'':'d-none' }}"></i></h4>
                  <ul class="mb-0 pro-details">
                    <li><span class="profile-icon bg-danger-transparent text-danger"><i class="fe fe-globe"></i></span><span class="h6 mt-3">www.mpcmethod.com</span></li>
                    <li><span class="profile-icon bg-success-transparent text-success"><i class="fe fe-mail"></i></span><span class="h6 mt-3">{{ $user->email }}</span></li>
                    <li><span class="profile-icon bg-info-transparent text-info"><i class="fe fe-flag"></i></span><span class="h6 mt-3">English</span></li>
                    <li><span class="profile-icon bg-warning-transparent text-warning"><i class="fe fe-phone-call"></i></span><span class="h6 mt-3">{{ $user->phone }}</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-auto col-xl-4">
            <div class="text-xl-right text-left btn-list mt-4 mt-lg-0 {{ Auth::user()->username == $user->username?'d-none':'' }}">
              <!--All Send friend request buttons-->
              <button wire:click="addFriend('{{ $user->username }}')" class="btn btn-outline-info {{ $existsSendRequest?'d-none':'' }} {{ $alreadyFriend?'d-none':'' }} {{ $existsReceivedRequest?'d-none':'' }}" wire:loading.attr='disabled'>
                <span wire:target='addFriend' wire:loading.class='d-none'>Add Friend</span>
                <span wire:target='addFriend' wire:loading>Processing..</span>
              </button>
              <button wire:click="cancelSendRequest('{{ $user->username }}')" class="btn btn-outline-danger {{ $existsSendRequest?'':'d-none' }} {{ $alreadyFriend?'d-none':'' }} {{ $existsReceivedRequest?'d-none':'' }}" wire:loading.attr='disabled'>
                <span wire:target='cancelSendRequest' wire:loading.class='d-none'>Cancel Request</span>
                <span wire:target='cancelSendRequest' wire:loading>Processing..</span>
              </button>
              <!--End send request buttons-->

              <!--All received friend request buttons-->
                <button wire:click="confirmReceivedRequest('{{ $user->username }}')" class="btn btn-outline-success {{ $existsSendRequest?'d-none':'' }} {{ $alreadyFriend?'d-none':'' }} {{ $existsReceivedRequest?'':'d-none' }}" wire:loading.attr='disabled'>
                  <span wire:target='confirmReceivedRequest' wire:loading.class='d-none'>Confirm Request</span>
                  <span wire:target='confirmReceivedRequest' wire:loading>Processing..</span>
                </button>
                <button wire:click="cancelReceivedRequest('{{ $user->username }}')" class="btn btn-outline-danger {{ $existsSendRequest?'d-none':'' }} {{ $alreadyFriend?'d-none':'' }} {{ $existsReceivedRequest?'':'d-none' }}" wire:loading.attr='disabled'>
                  <span wire:target='cancelReceivedRequest' wire:loading.class='d-none'>Cancel Request</span>
                  <span wire:target='cancelReceivedRequest' wire:loading>Processing..</span>
                </button>
              <!--End received request buttons-->
              <a href="javascript:void(0);" class="btn btn-outline-primary {{ $alreadyFriend?'':'d-none' }}">Message</a>
              <button class="btn btn-outline-danger {{ $alreadyFriend?'':'d-none' }}" wire:loading.attr='disabled' wire:click="unfriend('{{ $user->username }}')">
                <span wire:target='unfriend' wire:loading.class='d-none'>Unfriend</span>
                <span wire:target='unfriend' wire:loading>Processing..</span>
              </button>
              <button class="btn btn-primary {{ $existsFollow?'d-none':'' }}" wire:click="follow('{{ $user->username }}')" wire:loading.attr='disabled'>
                <span wire:target='follow' wire:loading.class='d-none'>Follow</span>
                <span wire:target='follow' wire:loading>Processing..</span>
              </button>
              <button class="btn btn-outline-secondary {{ $existsFollow?'':'d-none' }}" wire:click="unfollow('{{ $user->username }}')" wire:loading.attr='disabled'>
                <span wire:target='unfollow' wire:loading.class='d-none'>Unfollow</span>
                <span wire:target='unfollow' wire:loading>Processing..</span>
              </button>
            </div>
            <div class="mt-5">
              <div class="main-profile-contact-list row">
                {{-- <div class="media col-sm-4 mb-3">
                  <div class="media-icon bg-primary-transparent text-primary me-3 mt-1">
                    <i class="fa fa-comments fs-18"></i>
                  </div>
                  <div class="media-body">
                    <small class="text-muted">Posts</small>
                    <div class="font-weight-bold number-font">
                      245
                    </div>
                  </div>
                </div> --}}
                <div class="media col-sm-6 mb-3">
                  <div class="media-icon bg-primary-transparent text-primary me-3 mt-1">
                    <i class="fa fa-users fs-18"></i>
                  </div>
                  <div class="media-body">
                    <small class="text-muted">Followers</small>
                    <div class="font-weight-normal1">
                      {{ count($totalFollowers) }}
                    </div>
                  </div>
                </div>
                <div class="media col-sm-6 mb-3">
                  <div class="media-icon bg-primary-transparent text-primary me-3 mt-1">
                    <i class="fa fa-feed fs-18"></i>
                  </div>
                  <div class="media-body">
                    <small class="text-muted">Following</small>
                    <div class="font-weight-bold number-font">
                      {{ count($totalFollowing) }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="profile-cover">
          <div class="wideget-user-tab">
            <div class="tab-menu-heading p-0">
              <div class="tabs-menu1 px-3">
                <ul class="nav">
                  <li><a href="#tab-7" class="active fs-14" data-bs-toggle="tab">About</a></li>
                  <li><a href="#tab-8" data-bs-toggle="tab" class="fs-14">Friends</a></li>
                  <li><a href="#tab-9" data-bs-toggle="tab" class="fs-14">FAQ's</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div><!-- /.profile-cover -->
      </div>
      <!-- Row -->
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
          <div class="border-0">
            <div class="tab-content">
              <div class="tab-pane active" id="tab-7">
                <div class="card">
                  <div class="card-header ">
                    <h3 class="card-title">Biography</h3>
                  </div>
                  <div class="card-body">
                    <div class="main-profile-bio mb-0">
                      <p>{{ $user->about }}</p>
                    </div>
                  </div>
                  <div class="card-header ">
                    <h3 class="card-title">Work & Education</h3>
                  </div>
                  <div class="card-body {{ $userEduDetails?'':'d-none' }}">
                    <div class="main-profile-contact-list d-lg-flex">
                      <div class="media me-5">
                        <div class="media-icon bg-primary-transparent text-primary me-4">
                          <i class="fa fa-whatsapp"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="font-weight-bold mb-1">Works at</h6>
                          <span class="fw-bold">{{ $userEduDetails->work_place }}</span><br>
                          <span>{{ date('Y', strtotime($userEduDetails->start_working)) }} - {{ date('Y', strtotime($userEduDetails->end_working)) }}</span>
                          <p>Past Work: {{ $userEduDetails->past_work }}</p>
                        </div>
                      </div>
                      <div class="media me-5">
                        <div class="media-icon bg-success-transparent text-success me-4">
                          <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="font-weight-bold mb-1">Studied at </h6>
                          <span class="fw-bold">{{ $userEduDetails->educational_institute }}</span><br>
                          <span>{{ date('Y', strtotime($userEduDetails->start_reading)) }} - {{ date('Y', strtotime($userEduDetails->end_reading)) }}</span>
                          <p>Graduation: {{ $userEduDetails->graduate_institute }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-header ">
                    <h3 class="card-title">Contacts</h3>
                  </div>
                    <div class="card-body">
                    <div class="main-profile-contact-list d-lg-flex">
                      <div class="media me-4">
                        <div class="media-icon bg-danger-transparent text-danger me-3 mt-1">
                          <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                          <small class="text-muted">Mobile</small>
                          <div class="font-weight-normal1">
                            {{ $user->phone }}
                          </div>
                        </div>
                      </div>
                      <div class="media me-4">
                        <div class="media-icon bg-warning-transparent text-warning me-3 mt-1">
                          <i class="fa fa-slack"></i>
                        </div>
                        <div class="media-body">
                          <small class="text-muted">Email</small>
                          <div class="font-weight-normal1">
                            {{ $user->email }}
                          </div>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-icon bg-info-transparent text-info me-3 mt-1">
                          <i class="fa fa-map"></i>
                        </div>
                        <div class="media-body">
                          <small class="text-muted">Current Address</small>
                          <div class="font-weight-normal1">
                            {{ $user->address }}
                          </div>
                        </div>
                      </div>
                    </div><!-- main-profile-contact-list -->
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-8">
                <div class="card p-5">
                  <div class="row">
                    @if(!$friends->isEmpty())
                      @foreach ($friends as $userList)
                        @php
                          if ($user->username == $userList->sender_username) {
                            $friend = App\Models\User::where('username', $userList->receiver_username)->first();
                          }else {
                            $friend = App\Models\User::where('username', $userList->sender_username)->first();
                          }
                        @endphp 
                        <div class="col-lg-6">
                          <div class="d-flex align-items-center border p-3 mb-3 br-7">
                            <div class="avatar avatar-lg brround d-block cover-image" data-image-src="{{ $friend->profile_image }}" >
                            </div>
                            <div class="wrapper ms-3">
                              <p class="mb-0 mt-1  font-weight-semibold">{{ $friend->name }}</p>
                              <small class="text-muted">{{ $friend->role }}</small>
                            </div>
                            <div class="float-end ms-auto">
                              <a href="{{ route('show.selected.profile', ['language'=>app()->getLocale(), 'username'=>$friend->username]) }}" class="btn btn-primary btn-md">View</a>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    @else
                      <div class="text-center">This user doesn't have any friend.</div>
                    @endif
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-9">
                <div class="card">
                  @if(!$all_questions->isEmpty())
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
                  @else
                    <h5 class="fw-bold p-5">This user didn't posted any question yet..</h5>
                  @endif
                </div>
                {{-- <div class="text-center {{ count($all_questions)<$pagination_page?'d-none':'' }}">
                  <button class="btn btn-primary w-25" wire:click="LoadMore" wire:loading.attr="disabled">
                    <span wire:loading.class="d-none" wire:target="LoadMore">Load More</span>
                    <span wire:loading wire:target="LoadMore">Loading...</span>
                  </button>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
