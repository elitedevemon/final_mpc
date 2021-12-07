<div class="app-content main-content">
  <div class="side-app">

                

    <!--Page header-->
    <div class="page-header">
      <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Edit Profile</h4>
      </div>
      <div class="page-rightheader">
        <div class="btn-list">
          <button class="btn btn-outline-primary"><i class="fe fe-download"></i>
            Import</button>
          <a href="javascript:void(0);"  class="btn btn-primary btn-pill" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-calendar me-2 fs-14"></i> Search By Date</a>
          <div class="dropdown-menu border-0">
              <a class="dropdown-item" href="javascript:void(0);">Today</a>
              <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
              <a class="dropdown-item active bg-primary text-white" href="javascript:void(0);">Last 7 days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last 30 days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last 6 months</a>
              <a class="dropdown-item" href="javascript:void(0);">Last year</a>
          </div>
        </div>
      </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
      <div class="col-xl-3 col-lg-4">
        <div class="card box-widget widget-user">
          <div class="widget-user-image mx-auto mt-5"><img alt="User Avatar" class="rounded-circle" src="{{ asset('superadmin/assets/images/users/2.jpg') }}"></div>
          <div class="card-body text-center pt-2">
            <div class="pro-user">
              <h3 class="pro-user-username  mb-1 fs-22">Patrenna</h3>
              <h6 class="pro-user-desc text-muted">Web Designer</h6>
              <div class="text-center mb-4">
                <span><i class="fa fa-star text-warning"></i></span>
                <span><i class="fa fa-star text-warning"></i></span>
                <span><i class="fa fa-star text-warning"></i></span>
                <span><i class="fa fa-star-half-o text-warning"></i></span>
                <span><i class="fa fa-star-o text-warning"></i></span>
              </div>
              <a href="javascript:void(0);" class="btn btn-primary mt-3">View Profile</a>
            </div>
          </div>
          <div class="card-footer p-0">
            <div class="row">
              <div class="col-sm-6 border-end text-center">
                <div class="description-block p-4">
                  <h5 class="description-header mb-1 font-weight-bold  number-font">689k</h5>
                  <span class="text-muted">Followers</span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="description-block text-center p-4">
                  <h5 class="description-header mb-1 font-weight-bold  number-font">3,765</h5>
                  <span class="text-muted">Following</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header ">
            <div class="card-title">Edit Password</div>
          </div>
          <div class="card-body">
            <div class="text-center mb-5">
              <div class="widget-user-image">
                <img alt="User Avatar" class="rounded-circle  me-3" src="{{ asset('superadmin/assets/images/users/2.jpg') }}">
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">Change Password</label>
              <input type="password" class="form-control" value="password">
            </div>
            <div class="form-group">
              <label class="form-label">New Password</label>
              <input type="password" class="form-control" value="password">
            </div>
            <div class="form-group">
              <label class="form-label">Confirm Password</label>
              <input type="password" class="form-control" value="password">
            </div>
          </div>
          <div class="card-footer text-end">
            <a href="javascript:void(0);" class="btn btn-success">Updated</a>
            <a href="javascript:void(0);" class="btn btn-danger">Cancel</a>
          </div>
        </div>
      </div>
      <div class="col-xl-9 col-lg-8">
        <div class="card">
          <div class="card-header ">
            <div class="card-title">Edit Profile</div>
          </div>
          <div class="card-body">
            <div class="card-title font-weight-bold">Basic info:</div>
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label class="form-label">First Name</label>
                  <input type="text" class="form-control" placeholder="First Name" value="Patrenna">
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" placeholder="Last Name" value="Schell">
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control" placeholder="Email" value="patrennaschell@gmail.com">
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control" placeholder="Number" value="+(123-4567-890)">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Address</label>
                  <input type="text" class="form-control" placeholder="Home Address" value="3rd Lane,4th Phase,Street no-4 California">
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="form-group">
                  <label class="form-label">City</label>
                  <input type="text" class="form-control" placeholder="City" value="California">
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="form-group">
                  <label class="form-label">Postal Code</label>
                  <input type="number" class="form-control" placeholder="ZIP Code">
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <label class="form-label">Country</label>
                  <select class="form-control select2">
                    <optgroup label="Categories">
                      <option data-select2-id="5">--Select--</option>
                      <option value="1" selected>Germany</option>
                      <option value="2">Real Estate</option>
                      <option value="3">Canada</option>
                      <option value="4">Usa</option>
                      <option value="5">Afghanistan</option>
                      <option value="6">Albania</option>
                      <option value="7">China</option>
                      <option value="8">Denmark</option>
                      <option value="9">Finland</option>
                      <option value="10">India</option>
                      <option value="11">Kiribati</option>
                      <option value="12">Kuwait</option>
                      <option value="13">Mexico</option>
                      <option value="14">Pakistan</option>
                    </optgroup>
                  </select>
                </div>
              </div>
            </div>
            <div class="card-title font-weight-bold mt-5">External Links:</div>
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label class="form-label">Facebook</label>
                  <input type="text" class="form-control" placeholder="https://www.facebook.com/" value="PatrennaSchell">
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label class="form-label">Google</label>
                  <input type="text" class="form-control" placeholder="https://www.google.com/" value="patrenna@gmail.com">
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label class="form-label">Twitter</label>
                  <input type="text" class="form-control" placeholder="https://twitter.com/" value="PatrennaSchell">
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="form-group">
                  <label class="form-label">Pinterest</label>
                  <input type="text" class="form-control" placeholder="https://in.pinterest.com/" value="PatrennaSchell">
                </div>
              </div>
            </div>
            <div class="card-title font-weight-bold mt-5">About:</div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">About Me</label>
                  <textarea rows="5" class="form-control" placeholder="Enter About your description">Anim pariatur cliche reprehrighterit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumrighta shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <a href="javascript:void(0);" class="btn  btn-success">Updated</a>
            <a href="javascript:void(0);" class="btn btn-danger">Cancel</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Row-->


  </div>
</div>