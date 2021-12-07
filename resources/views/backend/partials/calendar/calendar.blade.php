<div class="app-content main-content">
  <div class="side-app">

                
    <!--Page header-->
    <div class="page-header">
      <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">To Do List</h4>
      </div>
    </div>
    <!--End Page header-->

    <!--Main content-->
    <div class="row">
      <div class="col-md-12 col-xl-3 col-lg-4">
        <div class="card">
          <div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
            <div class="mt-4 mb-4 ms-4 me-4 text-center">
              <a href="javascript:void(0);" wire:click.prefetch="toggleanotherContent()" wire:loading.class="disabled" data-bs-toggle="modal" class="btn btn-primary d-grid">Add New Task</a>
            </div>
            <a href="javascript:void(0);" wire:click.prefetch="toggleContent()" class="list-group-item list-group-item-action d-flex align-items-center mb-1">
              <i class="fe fe-codepen fs-18 me-4 p-2 border-primary brround bg-primary-transparent text-primary"></i> All Tasks <span class="ms-auto badge bg-success">14</span>
            </a>
            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center mb-1">
              <i class="fe fe-alert-octagon fs-18 me-4 p-2 border-warning brround bg-warning-transparent text-warning"></i> Important <span class="ms-auto badge bg-danger">3</span>
            </a>
            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center mb-1">
              <i class="fe fe-star fs-18 me-4 p-2 border-secondary brround bg-secondary-transparent text-secondary"></i> Starred
            </a>
            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center mb-1">
              <i class="fe fe-briefcase fs-18 me-4 p-2 border-danger brround bg-danger-transparent text-danger"></i> Spam
            </a>
            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center mb-1">
              <i class="fe fe-briefcase fs-18 me-4 p-2 border-success brround bg-success-transparent text-success"></i> Archive
            </a>
            <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center border-bottom-0">
              <i class="fe fe-trash-2 fs-18 me-4 p-2 border-info brround bg-info-transparent text-info"></i> Trash
            </a>
          </div>
          <div class="p-1">
            <div class="list-group list-group-transparent mb-0 mail-inbox">
              <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                <i class="fe fe-arrow-right fs-14 me-4 p-1 border-secondary br-7 bg-secondary-transparent text-secondary"></i> friends
              </a>
              <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                <i class="fe fe-arrow-right fs-14 me-4 p-1 border-success br-7 bg-success-transparent text-success"></i> Family
              </a>
              <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                <i class="fe fe-arrow-right fs-14 me-4 p-1 border-primary br-7 bg-primary-transparent text-primary"></i> Social
              </a>
              <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                <i class="fe fe-arrow-right fs-14 me-4 p-1 border-warning br-7 bg-warning-transparent text-warning"></i> Office
              </a>
              <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                <i class="fe fe-arrow-right fs-14 me-4 p-1 border-info br-7 bg-info-transparent text-info"></i> Work
              </a>
              <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                <i class="fe fe-arrow-right fs-14 me-4 p-1 border-danger br-7 bg-danger-transparent text-danger"></i> Settings
              </a>
            </div>
          </div>
        </div>
      </div>
      <!--inbox area-->
      @if ($inbox)
        <div class="col-md-12 col-lg-8 col-xl-9">
          <div class="card">
            <div class="card-body p-6">
              <div class="inbox-body">
                <div class="row">
                  <div class="col">
                    <div class="form-group w-auto">
                      <div class="input-icon">
                        <span class="input-icon-addon">
                          <i class="fe fe-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search Tasks">
                      </div>
                    </div>
                  </div>
                  <div class="col col-auto mb-4">
                    <div class="btn-group hidden-phone">
                    <a data-bs-toggle="dropdown" href="javascript:void(0);" class="btn btn-light btn-sm p-3" aria-expanded="false">
                      Sort By
                      <i class="fa fa-angle-down "></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a href="javascript:void(0);">Assending Order</a></li>
                      <li><a href="javascript:void(0);">Descending Order</a></li>
                      <li class="divider"></li>
                      <li><a href="javascript:void(0);">Settings</a></li>
                    </ul>
                  </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-inbox table-hover text-nowrap mb-0">
                    <tbody>
                      <tr class="mt-2 mb-2">
                        <td class="inbox-small-cells w-7">
                          <label class="custom-control custom-checkbox mb-0">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                            <span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ asset('superadmin/assets/images/users/1.jpg') }}" alt="img">Shamika Griffith</td>
                        <td class="view-message">Work Assigned By Clients</td>
                        <td class="view-message"><span class="badge bg-info br-7 p-2"> New</span></td>
                        <td class=" text-center font-weight-semibold">
                          <i class="fe fe-trash-2 fs-20 text-danger me-7"></i>
                        </td>
                      </tr>
                      <tr class="">
                        <td class="inbox-small-cells w-7">
                          <label class="custom-control custom-checkbox mb-0">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                            <span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="inbox-small-cells w-4"><i class="fa fa-star text-warning"></i></td>
                        <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ asset('superadmin/assets/images/users/2.jpg') }}" alt="img">Archie Kesler</td>
                        <td class="view-message">Try To Get New Work</td>
                        <td class="view-message"><span class="badge bg-success br-7 p-2"> Completed</span></td>
                        <td class=" text-center font-weight-semibold">
                          <i class="fe fe-trash-2 fs-20 text-danger me-7"></i>
                        </td>
                      </tr>
                      <tr class="">
                        <td class="inbox-small-cells w-7">
                          <label class="custom-control custom-checkbox mb-0">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                            <span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ asset('superadmin/assets/images/users/3.jpg') }}" alt="img">Carolyne Wirtz</td>
                        <td class="view-message">Rationally Encounter Quences</td>
                        <td class="view-message"><span class="badge bg-info br-7 p-2"> New</span></td>
                        <td class=" text-center font-weight-semibold">
                          <i class="fe fe-trash-2 fs-20 text-danger me-7"></i>
                        </td>
                      </tr>
                      <tr class="">
                        <td class="inbox-small-cells w-7">
                          <label class="custom-control custom-checkbox mb-0">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                            <span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ asset('superadmin/assets/images/users/4.jpg') }}" alt="img">Consuelo Valenzuela</td>
                        <td class="view-message">Which Of Us Ever Undertakes</td>
                        <td class="view-message"><span class="badge bg-success br-7 p-2"> Completed</span></td>
                        <td class=" text-center font-weight-semibold">
                          <i class="fe fe-trash-2 fs-20 text-danger me-7"></i>
                        </td>
                      </tr>
                      <tr class="">
                        <td class="inbox-small-cells w-7">
                          <label class="custom-control custom-checkbox mb-0">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                            <span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ asset('superadmin/assets/images/users/5.jpg') }}" alt="img">Myrta Powe</td>
                        <td class="view-message">Quis Autem Vel Eum Iure</td>
                        <td class="view-message"><span class="badge bg-info br-7 p-2"> New</span></td>
                        <td class=" text-center font-weight-semibold">
                          <i class="fe fe-trash-2 fs-20 text-danger me-7"></i>
                        </td>
                      </tr>
                      <tr class="">
                        <td class="inbox-small-cells w-7">
                          <label class="custom-control custom-checkbox mb-0">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                            <span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ asset('superadmin/assets/images/users/6.jpg') }}" alt="img">Margarette Wycoff</td>
                        <td class="view-message">Ut Enim Ad Minima Veniam</td>
                        <td class="view-message"><span class="badge bg-warning p-2 br-7"> pending</span></td>
                        <td class=" text-center font-weight-semibold">
                          <i class="fe fe-trash-2 fs-20 text-danger me-7"></i>
                        </td>
                      </tr>
                      <tr class="">
                        <td class="inbox-small-cells w-7">
                          <label class="custom-control custom-checkbox mb-0">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                            <span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="inbox-small-cells w-4"><i class="fa fa-star text-warning"></i></td>
                        <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ asset('superadmin/assets/images/users/7.jpg') }}" alt="img">Veronica Kimery</td>
                        <td class="view-message">Inventore Veritatis Et Quasi</td>
                        <td class="view-message"><span class="badge bg-success br-7 p-2"> Completed</span></td>
                        <td class=" text-center font-weight-semibold">
                          <i class="fe fe-trash-2 fs-20 text-danger me-7"></i>
                        </td>
                      </tr>
                      <tr class="">
                        <td class="inbox-small-cells w-7">
                          <label class="custom-control custom-checkbox mb-0">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                            <span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ asset('superadmin/assets/images/users/8.jpg') }}" alt="img">Raisa Ladwig</td>
                        <td class="view-message">Vero Eos Et Accusamus Et Iusto</td>
                        <td class="view-message"><span class="badge bg-info br-7 p-2"> New</span></td>
                        <td class=" text-center font-weight-semibold">
                          <i class="fe fe-trash-2 fs-20 text-danger me-7"></i>
                        </td>
                      </tr>
                      <tr class="">
                        <td class="inbox-small-cells w-7">
                          <label class="custom-control custom-checkbox mb-0">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                            <span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="inbox-small-cells w-4"><i class="fa fa-star text-warning"></i></td>
                        <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ asset('superadmin/assets/images/users/9.jpg') }}" alt="img">Kathaleen Roysden</td>
                        <td class="view-message">Which Of Us Ever Undertakes</td>
                        <td class="view-message"><span class="badge bg-warning p-2 br-7"> pending</span></td>
                        <td class=" text-center font-weight-semibold">
                          <i class="fe fe-trash-2 fs-20 text-danger me-7"></i>
                        </td>
                      </tr>
                      <tr class="">
                        <td class="inbox-small-cells w-7">
                          <label class="custom-control custom-checkbox mb-0">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
                            <span class="custom-control-label"></span>
                          </label>
                        </td>
                        <td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
                        <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ asset('superadmin/assets/images/users/10.jpg') }}" alt="img">Elizabeth Loux</td>
                        <td class="view-message">Account Of The System</td>
                        <td class="view-message"><span class="badge bg-info br-7 p-2"> New</span></td>
                        <td class=" text-center font-weight-semibold">
                          <i class="fe fe-trash-2 fs-20 text-danger me-7"></i>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
          <ul class="pagination mb-4 float-end">
            <li class="page-item page-prev disabled">
              <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
            </li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
            <li class="page-item page-next">
              <a class="page-link" href="javascript:void(0);">Next</a>
            </li>
          </ul>
        </div>
      @endif
      <!--end inbox area-->

      <!--Date time picker-->
      @if ($add_new_todo)
        <div class="col-md-12 col-lg-8 col-xl-9">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                  <div class="content">
                    <h1>DateTimePicker Styles</h1>
                    <div class="form-group">
                      <label>Date</label>
                      <div class="input-group date" id="datepicker">
                        <input class="form-control" placeholder="MM/DD/YYYY"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Time</label>
                      <div class="input-group time" id="timepicker">
                        <input class="form-control" placeholder="HH:MM AM/PM"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endif
      <!--End date time picker-->

    </div>
    <!--End main content-->

</div>

<!--Testing livewire prefetch-->
{{-- <button wire:click.prefetch="toggleContent()">Show Content</button>
<button wire:click.prefetch="toggleanotherContent">Show another</button>
 
@if ($contentIsVisible)
  <span>Some Content...</span>
@endif
@if ($anothercontentIsVisible)
  <span>Some another Content...</span>
@endif --}}