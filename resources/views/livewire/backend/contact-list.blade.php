<div>
  <div class="app-content main-content pt-3">
    <div class="side-app">
  
      <!-- Row -->
      <div class="card">
        <div class="row g-0">
          <div class="col-lg-4 col-xl-3">
            <div class="border-end">
              <div class="main-content-left main-content-left-contacts">
                <div class="card-header">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Contacts">
                    <div class="input-group-append ">
                      <button type="button" class="btn btn-primary ">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="main-contacts-list" id="mainContactList">
                  @foreach ($contacts as $contact)
                    <div class="main-contact-item">
                      <div class="main-img-user online"><img alt="" src="{{ asset('superadmin/assets/images/users/12.jpg') }}" class="avatar avatar-md brround"></div>
                      <div class="main-contact-body">
                        <h6>{{ $contact->name }}</h6><span class="phone">{{ $contact->phone?$contact->phone:$contact->email }}</span>
                      </div>
                    </div>
                  @endforeach
                  {{-- <div class="main-contact-item">
                    <div class="main-img-user"><img alt="" src="{{ asset('superadmin/assets/images/users/1.jpg') }}" class="avatar avatar-md brround"></div>
                    <div class="main-contact-body">
                      <h6>Athena Manske</h6><span>+1-457-658-856</span>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-lg-8 col-xl-9">
            <div class="">
              <div class="main-content-body main-content-body-contacts">
                <div class="main-contact-info-header bg-contacthead">
                  <div class="media">
                    <div class="main-img-user brround">
                      <img alt="" src="{{ asset('superadmin/assets/images/users/2.jpg') }}" class="w-100 h-100 br-7">
                      <a href="#"><i class="fe fe-camera"></i></a>
                    </div>
                    <div class="media-body text-white">
                      <h4 class="text-white">Patrenna</h4>
                      <p class="">Web Designer</p>
                      <nav class="nav contact-icons">
                        <a role="button" class="btn text-white bg-white-50 me-2 mb-2 ms-2" href="javascript:void(0);"><i class="fe fe-phone"></i> Call</a>
                        <a role="button" class="btn text-white bg-white-50 me-2 mb-2" href="javascript:void(0);"><i class="fe fe-mail"></i> Message</a>
                        <a role="button" class="btn text-white bg-white-50 me-2 mb-2" href="javascript:void(0);"><i class="fe fe-user-plus"></i> Add to Group</a>
                        <a role="button" class="btn text-white bg-white-50 me-2 mb-2" href="javascript:void(0);"><i class="fe fe-slash"></i> Block</a>
                      </nav>
                    </div>
                  </div>
                  <div class="main-contact-action">
                    <a href="#" class="btn btn-success"> Edit Profile</a>
                    <a href="#" class="btn btn-primary">Delete</a>
                  </div>
                </div>
                <div class="main-contact-info-body">
                  <div class="card-body">
                    <h6 class="text-primary">Biography</h6>
                    <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque uis aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <p class="text-muted"> aute irure dolor in reprehrighterit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequiSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque uisSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque uis nesciunt.</p>
                  </div>
                  <div class="media-list p-0">
                    <div class="media py-4 mt-0">
                      <div class="media-body">
                        <div class="d-flex">
                          <div class="media-icon bg-primary-transparent border-primary me-3 mt-1">
                            <i class="fa fa-phone"></i>
                          </div>
                          <div>
                            <label>Work</label> <span class="font-weight-normal1 fs-14">+1 (425) 857 5463</span>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="media-icon bg-primary-transparent border-primary me-3 mt-1">
                            <i class="fa fa-phone"></i>
                          </div>
                          <div>
                            <label>Personal</label> <span class="font-weight-normal1 fs-14">+1 (547) 542 3568</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="media py-4 border-top mt-0">
                      <div class="media-body">
                        <div class="d-flex">
                          <div class="media-icon bg-primary-transparent border-primary me-3 mt-1">
                            <i class="fa fa-envelope"></i>
                          </div>
                          <div>
                            <label>Gmail Account</label> <span class="font-weight-normal1 fs-14">arlena.soles@gmail.com</span>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="media-icon bg-primary-transparent border-primary me-3 mt-1">
                            <i class="fa fa-envelope"></i>
                          </div>
                          <div>
                            <label>Other Account</label> <span class="font-weight-normal1 fs-14">me@spruko.com</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="media py-4 border-top mt-0">
                      <div class="media-body">
                        <div class="d-flex">
                          <div class="media-icon bg-primary-transparent border-primary me-3 mt-1">
                            <i class="fa fa-map-marker"></i>
                          </div>
                          <div>
                            <label>Current Address</label> <span class="font-weight-normal1 fs-14">012 San Francisco, California 13245</span>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="media-icon bg-primary-transparent border-primary me-3 mt-1">
                            <i class="fa fa-clock-o"></i>
                          </div>
                          <div>
                            <label>Call History</label> <a class="font-weight-normal1 fs-14" href="javascript:void(0);">Duration of last call: 2m 32sec</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Row -->
  
  
    </div>
  </div>
</div>
