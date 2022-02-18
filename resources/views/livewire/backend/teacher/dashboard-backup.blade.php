<!-- Row-3-->
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
<!--End Row-3 -->