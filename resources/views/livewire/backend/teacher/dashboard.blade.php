<div>
  <!--app-content open-->
  <div class="app-content main-content">
    <div class="side-app">

        
        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title mb-0 text-primary">Analysis Dashboard</h4>
            </div>
        </div>
        <!--End Page header-->

        <!-- Row-1 -->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0 dash1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="">
                                    <span class="fs-14 font-weight-normal">Posts</span>
                                    <h2 class="mb-2 number-font carn1 font-weight-bold">{{ $totalPosts }}</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
                                <div class="mx-auto text-right">
                                    <div id="spark1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0 dash2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="">
                                    <span class="fs-14">Post Draft</span>
                                    <h2 class="mb-2 mt-1 number-font carn2 font-weight-bold">{{ count($draftedPosts) }}</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
                                <div class="mx-auto text-right">
                                    <div id="spark2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0 dash3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="">
                                    <span class="fs-14">Videos</span>
                                    <h2 class="mb-2 mt-1 number-font carn2 font-weight-bold">{{ $totalVideos }}</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
                                <div class="mx-auto text-right">
                                    <div id="spark3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden dash1-card border-0 dash4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                                <div class="text-justify">
                                    <span>Video Draft</span>
                                    <h2 class="mb-2 mt-1 number-font carn2 font-weight-bold">{{ $getNumber }}</h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
                                <div class="mx-auto text-right">
                                    <div id="spark4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row-1 -->

        <!-- version 2.1 -->
        {{-- <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header border-bottom-0">
                        <h3 class="card-title">Monthly Result Activity</h3>
                    </div>
                    <div class="card-body pt-0">
                        <div class="chart-wrapper">
                            <div id="statistics"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Recent Activity
                        </h3>
                        <div class="card-options">
                            <a href="javascript:void(0);" class="btn btn-sm btn-primary">View All</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="recent-activity">
                            <li class="mb-5 mt-5">
                                <div>
                                    <span class="activity-timeline bg-primary text-white">1</span>
                                    <div class="activity-timeline-content">
                                        <span class="font-weight-normal1 fs-13">New Products,</span><span class="text-muted fs-12 float-end">6:45pm</span>
                                        <span class="activity-sub-content text-info fs-11">52% New products</span>
                                        <p class="text-muted fs-12 mt-1">More than 200 new products are added</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-5">
                                <div>
                                    <span class="activity-timeline bg-success text-white">2</span>
                                    <div class="activity-timeline-content">
                                        <span class="font-weight-normal1 fs-13">New Sale,</span><span class="text-muted fs-12 float-end">1day ago</span>
                                        <span class="activity-sub-content text-danger fs-11">76% Profit earned.</span>
                                        <p class="text-muted fs-12 mt-1">$2,546 income earned in today sale</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-5">
                                <div>
                                    <span class="activity-timeline bg-warning text-white">3</span>
                                    <div class="activity-timeline-content">
                                        <span class="font-weight-normal1 fs-13">New Customers,</span><span class="text-muted fs-12 float-end">7.45pm</span>
                                        <span class="activity-sub-content text-success fs-11">24% New customers</span>
                                        <p class="text-muted fs-12 mt-1">1.3k new customers reached us this year</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-5">
                                <div>
                                    <span class="activity-timeline bg-info text-white">4</span>
                                    <div class="activity-timeline-content">
                                        <span class="font-weight-normal1 fs-13">New Reviews,</span><span class="text-muted fs-12 float-end">1min ago</span>
                                        <span class="activity-sub-content text-warning fs-11">96% Positive reviews.</span>
                                        <p class="text-muted fs-12 mt-1">There are 500 plus new reviews</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-5">
                                <div>
                                    <span class="activity-timeline bg-danger text-white">5</span>
                                    <div class="activity-timeline-content">
                                        <span class="font-weight-normal1 fs-13">Customer Visits,</span><span class="text-muted fs-12 float-end">today</span>
                                        <span class="activity-sub-content text-secondary fs-11">33% target achieved.</span>
                                        <p class="text-muted fs-12 mt-1">daily 20 plus new customers visits us</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-5 border-bottom-0">
                                <div>
                                    <span class="activity-timeline bg-teal text-white">6</span>
                                    <div class="activity-timeline-content">
                                        <span class="font-weight-normal1 fs-13">Sale  Consistency,</span><span class="text-muted fs-12 float-end">3 days ago</span>
                                        <span class="activity-sub-content text-teal fs-11">90% growth.</span>
                                        <p class="text-muted fs-12 mt-1">More than 5 Sales happening every week</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End version 2.1 -->

        <!--All posts table-->
        {{-- <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-6">
                          <h3 class="card-title">All Posts</h3>
                        </div>
                        <div class="col-6 text-end">
                          <input type="text" name="" placeholder="Search.." id="" class="form-control">
                        </div>
                      </div>

                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered text-nowrap">
                          <thead>
                            <tr>
                              <th style="width: 5%">SI</th>
                              <th style="width: 25%">Title</th>
                              <th style="width: 40%">Short Description</th>
                              <th style="width: 10%">Condition</th>
                              <th style="width: 10%">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($allPosts as $post)
                              <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ Str::words($post->title, 5, '...') }}</td>
                                <td>{{ Str::words($post->short_desc, 10, '...') }}</td>
                                <td>{{ $post->action }}</td>
                                <td>
                                  <button class="btn btn-primary">Edit</button>
                                  <button class="btn btn-success">View</button>
                                  <button class="btn btn-danger">Delete</button>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                        {{ $allPosts->links() }}
                      </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- Post related nav tabs --}}
        <div class="card">
          <div class="card-header">
            <div class="card-title">Posts &nbsp;&nbsp;&nbsp; <span class="text-info" wire:loading wire:target='showPost'>Loading <i class="fa fa-spinner fa-spin"></i></span></div>
          </div>
          <div class="card-body">
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link {{ $post=='published'?'active':'' }}" href="javascript:void(0);" wire:click="showPost('published')">Published <span class="badge bg-danger border border-light ms-1" style="padding: 2px 3px !important; line-height: 1 !important;">{{ count($publishedPosts) }}</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $post=='drafted'?'active':'' }}" href="javascript:void(0);" wire:click="showPost('drafted')">Drafted <span class="badge bg-danger border border-light ms-1" style="padding: 2px 3px !important; line-height: 1 !important;">{{ count($draftedPosts) }}</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $post=='inprocess'?'active':'' }}" href="javascript:void(0);" wire:click="showPost('inprocess')">In-process <span class="badge bg-danger border border-light ms-1" style="padding: 2px 3px !important; line-height: 1 !important;">{{ count($inProcessPosts) }}</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $post=='rejected'?'active':'' }}" href="javascript:void(0);" wire:click="showPost('rejected')">Rejected <span class="badge bg-danger border border-light ms-1" style="padding: 2px 3px !important; line-height: 1 !important;">{{ count($rejectedPosts) }}</span></a>
              </li>
            </ul>
          </div>
          {{-- Post section --}}
          @if ($post == 'published')
            <!--published posts table-->
            <div class="table-responsive table-bordered">
              <table class="table table-bordered text-nowrap">
                <thead>
                  <tr>
                    <th style="width: 5%">SI</th>
                    <th style="width: 25%">Title</th>
                    <th style="width: 10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($publishedPosts as $post)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ Str::words($post->title, 15, '...') }}</td>
                      <td>
                        <button class="btn btn-primary" wire:click="testing" wire:loading.attr='disabled'>View <i class="fa fa-spinner fa-spin" wire:loading wire:target='testing'></i></button>
                        <button class="btn btn-danger" wire:click="deletePublishedPostModal({{ $post->id }})" wire:loading.attr='disabled'>Delete <i class="fa fa-spinner fa-spin" wire:loading wire:target="deletePublishedPostModal({{ $post->id }})"></i></button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $publishedPosts->links() }}
            </div>
          @elseif($post == 'drafted')
            <!--Drafted posts table-->
            <div class="table-responsive table-bordered">
              <table class="table table-bordered text-nowrap">
                <thead>
                  <tr>
                    <th style="width: 5%">SI</th>
                    <th style="width: 25%">Title</th>
                    <th style="width: 10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($draftedPosts as $post)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ Str::words($post->title, 15, '...') }}</td>
                      <td>
                        {{-- Edit button --}}
                        <a href="{{ route('show.drafted.post', ['language'=>app()->getLocale(), 'draftId'=>$post->id]) }}" class="btn btn-primary">Edit</a>
                        {{-- Delete button --}}
                        <a href="javascript:void(0);" wire:click="showDraftDeleteModal({{ $post->id }})" class="btn btn-danger">Delete <i class="fa fa-spinner fa-spin" wire:loading wire:target='showDraftDeleteModal({{ $post->id }})'></i></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $draftedPosts->links() }}
            </div>
          @elseif($post == 'inprocess')
            <!--In-Process posts table-->
            <div class="table-responsive table-bordered">
              <table class="table table-bordered text-nowrap">
                <thead>
                  <tr>
                    <th style="width: 5%">SI</th>
                    <th style="width: 25%">Title</th>
                    <th style="width: 10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($inProcessPosts as $post)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ Str::words($post->title, 15, '...') }}</td>
                      <td>
                        {{-- Delete button --}}
                        <a href="javascript:void(0);" class="btn btn-danger" wire:click="deleteInprocessPostModal({{ $post->id }})">Delete <i class="fa fa-spinner fa-spin" wire:loading wire:target="deleteInprocessPostModal({{ $post->id }})"></i></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $inProcessPosts->links() }}
            </div>
          @elseif($post == 'rejected')
            <!--Rejected posts table-->
            <div class="table-responsive table-bordered">
              <table class="table table-bordered text-nowrap">
                <thead>
                  <tr>
                    <th style="width: 5%">SI</th>
                    <th style="width: 25%">Title</th>
                    <th style="width: 10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($rejectedPosts as $post)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ Str::words($post->title, 15, '...') }}</td>
                      <td>
                        <a href="{{ route('teacher.edit.blog-post', ['language'=>app()->getLocale(), 'postId'=>$post->id]) }}" class="btn btn-primary">Edit</a>
                        <a class="btn btn-danger" href="javascript:void(0);" wire:click="rejectedPostDeleteModal({{ $post->id }})">Delete <i class="fa fa-spinner fa-spin" wire:loading wire:target="rejectedPostDeleteModal({{ $post->id }})"></i></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $rejectedPosts->links() }}
            </div>
          @endif
        </div>

        {{-- Videos related nav tabs --}}
        <div class="card">
          <div class="card-header">
            <div class="card-title">Videos &nbsp;&nbsp;&nbsp; <span class="text-info" wire:loading wire:target='showVideo'>Loading <i class="fa fa-spinner fa-spin"></i></span></div>
          </div>
          <div class="card-body">
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link {{ $videos=='published'?'active':'' }}" href="javascript:void(0);" wire:click="showVideo('published')">Published <div class="badge bg-danger border border-light ms-1" style="padding: 2px 3px !important; line-height: 1 !important;">{{ count($publishedVideos) }}</div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $videos=='inprocess'?'active':'' }}" href="javascript:void(0);" wire:click="showVideo('inprocess')">In-process <div class="badge bg-danger border border-light ms-1" style="padding: 2px 3px !important; line-height: 1 !important;">{{ count($inProcessVideos) }}</div></a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $videos=='rejected'?'active':'' }}" href="javascript:void(0);" wire:click="showVideo('rejected')">Rejected <div class="badge bg-danger border border-light ms-1" style="padding: 2px 3px !important; line-height: 1 !important;">{{ count($rejectedVideos) }}</div></a>
              </li>
            </ul>
          </div>

          {{-- video section --}}
          @if ($videos == 'published')
            {{-- published video table --}}
            <div class="table-responsive table-bordered">
              <table class="table table-bordered text-nowrap">
                <thead>
                  <tr>
                    <th style="width: 5%">SI</th>
                    <th style="width: 25%">Title</th>
                    <th style="width: 10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($publishedVideos as $video)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ Str::words($video->title, 15, '...') }}</td>
                      <td>
                        <button class="btn btn-danger" wire:click="deleteVideoModal({{ $video->id }})" wire:loading.attr='disabled'>Delete <i class="fa fa-spinner fa-spin" wire:loading wire:target="deleteVideoModal({{ $video->id }})"></i></button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $publishedVideos->links() }}
            </div>
          @elseif($videos == 'inprocess')
            {{-- inprocess video table --}}
            <div class="table-responsive table-bordered">
              <table class="table table-bordered text-nowrap">
                <thead>
                  <tr>
                    <th style="width: 5%">SI</th>
                    <th style="width: 25%">Title</th>
                    <th style="width: 10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($inProcessVideos as $video)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ Str::words($video->title, 15, '...') }}</td>
                      <td>
                        <button class="btn btn-danger" wire:click="deleteVideoModal({{ $video->id }})" wire:loading.attr='disabled'>Delete <i class="fa fa-spinner fa-spin" wire:loading wire:target="deleteVideoModal({{ $video->id }})"></i></button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $inProcessVideos->links() }}
            </div>
          @elseif($videos == 'rejected')
            {{-- rejected video table --}}
            <div class="table-responsive table-bordered">
              <table class="table table-bordered text-nowrap">
                <thead>
                  <tr>
                    <th style="width: 5%">SI</th>
                    <th style="width: 25%">Title</th>
                    <th style="width: 10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($rejectedVideos as $video)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ Str::words($video->title, 15, '...') }}</td>
                      <td>
                        <button class="btn btn-danger" wire:click="deleteVideoModal({{ $video->id }})" wire:loading.attr='disabled'>Delete <i class="fa fa-spinner fa-spin" wire:loading wire:target="deleteVideoModal({{ $video->id }})"></i></button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $rejectedVideos->links() }}
            </div>
          @endif
        </div>
    </div>
  </div>
  <!-- CONTAINER END -->

  <!-- Modal section -->
  @if($postInfo)
    {{-- Delete draft modal --}}
    <div class="modal fade" id="deleteDraftPost" wire:ignore.self tabindex="-1" aria-labelledby="deleteDraftPostLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteDraftPostLabel">{{ $postInfo->title }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h3 class="text-center fw-bold">Are you sure, want to delete this post?</h3>
            <div class="text-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
              <button type="button" class="btn btn-primary" wire:click="deleteDraftedPost({{ $postInfo->id }})" wire:loading.attr='disabled'>Yes <i class="fa fa-spinner fa-spin" wire:loading wire:target='deleteDraftedPost'></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Delete rejected post modal --}}
    <div class="modal fade" id="deleteRejectedPost" wire:ignore.self tabindex="-1" aria-labelledby="deleteRejectedPostLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteRejectedPostLabel">{{ $postInfo->title }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h3 class="text-center fw-bold">Are you sure, want to delete this post?</h3>
            <div class="text-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
              <button type="button" class="btn btn-primary" wire:click="deleteRejectedPost({{ $postInfo->id }})" wire:loading.attr='disabled'>Yes <i class="fa fa-spinner fa-spin" wire:loading wire:target='deleteRejectedPost'></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Delete published post modal --}}
    <div class="modal fade" id="deletePublishedPost" wire:ignore.self tabindex="-1" aria-labelledby="deletePublishedPostLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deletePublishedPostLabel">{{ $postInfo->title }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h3 class="text-center fw-bold">Are you sure, want to delete this post?</h3>
            <div class="text-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
              <button type="button" class="btn btn-primary" wire:click="deletePublishedPost({{ $postInfo->id }})" wire:loading.attr='disabled'>Yes <i class="fa fa-spinner fa-spin" wire:loading wire:target='deletePublishedPost'></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
  @if($inprocessPostInfo)
    {{-- Delete inprocess post --}}
    <div class="modal fade" id="deleteInprocessPost" wire:ignore.self tabindex="-1" aria-labelledby="deleteInprocessPostLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <h3 class="text-center fw-bold">Are you sure, want to delete this post?</h3>
            <p class="text-center">This post is in-process. It will publish in short. If you delete then you can't retrive.</p>
            <div class="text-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
              <button type="button" class="btn btn-primary" wire:click="deleteInprocessPost({{ $inprocessPostInfo->id }})" wire:loading.attr='disabled'>Yes <i class="fa fa-spinner fa-spin" wire:loading wire:target='deleteInprocessPost'></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
  @if($videoInfo)
    {{-- Delete selected video modal --}}
    <div class="modal fade" id="deleteSelectedVideo" wire:ignore.self tabindex="-1" aria-labelledby="deleteSelectedVideoLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteSelectedVideoLabel">{{ $videoInfo->title }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h3 class="text-center fw-bold">Are you sure, want to delete this video?</h3>
            <div class="text-center">
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
              <button type="button" class="btn btn-danger" wire:click="deleteSelectedVideo({{ $videoInfo->id }})" wire:loading.attr='disabled'>Yes <i class="fa fa-spinner fa-spin" wire:loading wire:target='deleteSelectedVideo'></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
</div>

@push('js')
  <script>
    window.addEventListener('showDeleteDraftModal', event => {
        $("#deleteDraftPost").modal('show');                
    });
    window.addEventListener('showDeleteInprocessPostModal', event => {
        $("#deleteInprocessPost").modal('show');                
    });
    window.addEventListener('closeDeleteInprocessPostModal', event=>{
      $("#deleteInprocessPost").modal('hide'); 
    });
    window.addEventListener('showRejectedPostDeleteModal', event=>{
      $("#deleteRejectedPost").modal('show');
    });
    window.addEventListener('closeRejectedPostModal', event=>{
      $("#deleteRejectedPost").modal('hide');
      setTimeout(function () {    
          window.location.href = '/en/teacher/home'; 
      },1000);
    });
    window.addEventListener('showPublishedPostModal', event=>{
      $('#deletePublishedPost').modal('show');
    });
    window.addEventListener('showConfirmationDeleteVideoModal', event=>{
      $('#deleteSelectedVideo').modal('show');
    });
    window.addEventListener('closeModal', event => {
      $("#deleteDraftPost, #deletePublishedPost, #deleteSelectedVideo").modal('hide');
      setTimeout(function () {    
          window.location.href = '/en/teacher/home'; 
      },1000);              
    });
  </script>
@endpush
