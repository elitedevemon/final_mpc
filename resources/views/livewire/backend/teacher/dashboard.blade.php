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
                                    <span class="fs-14">Videos</span>
                                    <h2 class="mb-2 mt-1 number-font carn2 font-weight-bold">{{ $givenExam }}</h2>
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
                                    <span class="fs-14">Total Num..</span>
                                    <h2 class="mb-2 mt-1 number-font carn2 font-weight-bold">{{ $totalNumber }}</h2>
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
                                    <span>Get Number</span>
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
        <div class="row">
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
        </div>

        <div class="row">
          <div class="col-md-6">
            <!--Drafted posts table-->
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                  <div class="card">
                      <div class="card-header">
                        <div class="row">
                          <div class="col-6">
                            <h3 class="card-title">Drafted Posts</h3>
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
                                <th style="width: 10%">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($draftedPosts as $post)
                                <tr>
                                  <td>{{ $loop->index+1 }}</td>
                                  <td>{{ Str::words($post->title, 7, '...') }}</td>
                                  <td>
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                          {{ $draftedPosts->links() }}
                        </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <!--published posts table-->
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                  <div class="card">
                      <div class="card-header">
                        <div class="row">
                          <div class="col-6">
                            <h3 class="card-title">Published Posts</h3>
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
                                <th style="width: 10%">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($publishedPosts as $post)
                                <tr>
                                  <td>{{ $loop->index+1 }}</td>
                                  <td>{{ Str::words($post->title, 7, '...') }}</td>
                                  <td>
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                          {{ $publishedPosts->links() }}
                        </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <!--In-Process posts table-->
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                  <div class="card">
                      <div class="card-header">
                        <div class="row">
                          <div class="col-6">
                            <h3 class="card-title">In Process Posts</h3>
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
                                <th style="width: 10%">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($inProcessPosts as $post)
                                <tr>
                                  <td>{{ $loop->index+1 }}</td>
                                  <td>{{ Str::words($post->title, 7, '...') }}</td>
                                  <td>
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                          {{ $inProcessPosts->links() }}
                        </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <!--Rejected posts table-->
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12">
                  <div class="card">
                      <div class="card-header">
                        <div class="row">
                          <div class="col-6">
                            <h3 class="card-title">Rejected Posts</h3>
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
                                <th style="width: 10%">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($rejectedPosts as $post)
                                <tr>
                                  <td>{{ $loop->index+1 }}</td>
                                  <td>{{ Str::words($post->title, 7, '...') }}</td>
                                  <td>
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                          {{ $rejectedPosts->links() }}
                        </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        

    </div>
  </div>
  <!-- CONTAINER END -->
</div>
