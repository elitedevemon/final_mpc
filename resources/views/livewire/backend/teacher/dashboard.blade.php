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
                                    <span class="fs-14 font-weight-normal">Total Exam</span>
                                    <h2 class="mb-2 number-font carn1 font-weight-bold">{{ $totalTopics }}</h2>
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
                                    <span class="fs-14">Given Exam</span>
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

        <!-- Row-3 -->
        <div class="row row-deck">
            <div class="col-md-12 col-sm-12 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Recent Exam Result
                        </h3>
                        {{-- <div class="card-options">
                            <a href="javascript:void(0);" class="btn btn-sm btn-primary">View All</a>
                        </div> --}}
                    </div>
                    <div class="card-body">
                      @foreach ($recentExamResult as $result)
                        <div class="mb-3">
                            <div class="d-flex">
                                <div class="Recent-transactions-img brround bg-primary text-white font-weight-normal1">
                                  <img src="{{ $result->getUser->profile_image }}" alt="">
                                </div>
                                <div class="">
                                    <a href="javascript:void(0);" class="font-weight-normal1 mb-1 fs-13">{{ $result->getUser->name }}</a>
                                    <p class="text-muted fs-11">{{ $result->created_at->diffForHumans() }}</p>
                                </div>
                                <span class="text-success font-weight-normal fs-12 ms-auto">{{ $result->result }}</span>
                            </div>
                        </div>
                      @endforeach
                    </div>
                </div>
            </div>
            {{-- <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Skill Of This Month</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-6">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted fs-13 mb-1">Monthly Profit</span>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fs-16 font-weight-normal1">$25,854</span>
                                <span class="text-muted fs-12"><i class="mdi mdi-arrow-up-thick text-success"></i> 40% increase</span>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" style="width: 50%"></div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted fs-13 mb-1">Monthly Orders</span>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fs-16 font-weight-normal1">8,654</span>
                                <span class="text-muted fs-12"><i class="mdi mdi-arrow-up-thick text-success"></i> 62% increase</span>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted fs-13 mb-1">Monthly Revenue</span>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fs-16 font-weight-normal1">$98,654</span>
                                <span class="text-muted  fs-12"><i class="mdi mdi-arrow-up-thick text-success"></i> 38% increase</span>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 60%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted fs-13 mb-1">Monthly Expenses</span>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fs-16 font-weight-normal1">$54,456</span>
                                <span class="text-muted fs-12"><i class="mdi mdi-arrow-down-thick text-danger"></i> 20% decreased</span>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-pink progress-bar-striped progress-bar-animated" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Top Results of this month
                        </h3>
                        {{-- <div class="card-options">
                            <a href="javascript:void(0);" class="btn btn-sm btn-primary">View All</a>
                        </div> --}}
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover card-table table-vcenter text-nowrap">
                                <thead class="border-bottom-0 pt-3 pb-3">
                                    <tr>
                                        <th class="text-center">SI</th>
                                        <th>Name</th>
                                        <th>Result</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($topResult as $result)
                                    <tr>
                                        <td class="text-center">{{ $loop->index+1 }}</td>
                                        <td><img class="avatat avatar-md brround me-2" src="{{ $result->getUser->profile_image }}" alt="img">{{ $result->getUser->name }}</td>
                                        <td><span class="font-weight-normal1">{{ $result->result }}</span></td>
                                        <td class="text-muted">{{ $result->created_at->diffForHumans() }}</td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row-3 -->

        <!--Row-->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Exams</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive-sm">
                        <table class="table table-bordered text-nowrap">
                          <thead>
                            <tr>
                              <th class="wd-15p border-bottom-0">SI</th>
                              <th class="wd-15p border-bottom-0">Topics</th>
                              <th class="wd-20p border-bottom-0">Date</th>
                              <th class="wd-15p border-bottom-0">Time</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($allQuestion as $question)
                              <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $question->name }}</td>
                                <td>{{ date('d-m-Y', strtotime($question->date)) }}</td>
                                <td>{{ $question->time }} minutes</td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
  </div>
  <!-- CONTAINER END -->
</div>
