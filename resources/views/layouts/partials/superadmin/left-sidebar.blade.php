<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

  <div data-simplebar class="h-100">

      <!--- Sidemenu -->
      <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title" data-key="t-menu">Menu</li>

              <li>
                  <a href="{{ route('superadmin.dashboard', app()->getLocale()) }}">
                      <i class="fa fa-home" style="font-size: 17px;"></i>
                      <span data-key="t-dashboard">Dashboard</span>
                  </a>
              </li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow">
                      <i class="fa fa-text-width" style="font-size: 17px;"></i>
                      <span data-key="t-apps">Update</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li>
                          <a href="{{ route('update.contact.info', app()->getLocale()) }}">
                              <span data-key="t-calendar">Contact Info</span>
                          </a>
                      </li>

                      <li>
                          <a href="{{ route('show.marquee.page', app()->getLocale()) }}">
                              <span data-key="t-chat">Marquee Text</span>
                          </a>
                      </li>
                  </ul>
              </li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow">
                      <i class="fa fa-plus-circle" style="font-size: 17px;"></i>
                      <span data-key="t-authentication">Create</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{ route('create.blog.post', app()->getLocale()) }}" data-key="t-login">Blog Post</a></li>
                      <li><a href="{{ route('show.drafted.post', app()->getLocale()) }}" data-key="t-login">Drafted Blog Post</a></li>
                      <li><a href="{{ route('show.exam.question', app()->getLocale()) }}" data-key="t-register">Exam Question</a></li>
                      <li><a href="auth-recoverpw.html" data-key="t-recover-password">People Says</a></li>
                  </ul>
              </li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow">
                      <i class="fa fa-cloud-upload-alt" style="font-size: 17px;"></i>
                      <span data-key="t-pages">Upload</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{ route('upload.blog-video', app()->getLocale()) }}" data-key="t-starter-page">Blog Video</a></li>
                      <li><a href="pages-maintenance.html" data-key="t-maintenance">Slider Photos</a></li>
                      <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Media Photos</a></li>
                  </ul>
              </li>

              <li>
                  <a href="layouts-horizontal.html">
                      <i class="fa fa-comment-dots" style="font-size: 17px;"></i>
                      <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                      <span data-key="t-horizontal">Chat</span>
                  </a>
              </li>
              <li>
                  <a href="layouts-horizontal.html">
                      <i class="fa fa-bell" style="font-size: 17px;"></i>
                      <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                      <span data-key="t-horizontal">Notifications</span>
                  </a>
              </li>
              <li>
                  <a href="layouts-horizontal.html">
                      <i class="fa fa-users" style="font-size: 17px;"></i>
                      <span data-key="t-horizontal">Students</span>
                  </a>
              </li>
              <li>
                  <a href="layouts-horizontal.html">
                      <i class="fa fa-comment-medical" style="font-size: 17px;"></i>
                      <span data-key="t-horizontal">Notify</span>
                  </a>
              </li>
              <li>
                  <a href="layouts-horizontal.html">
                      <i class="fa fa-question-circle" style="font-size: 17px;"></i>
                      <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                      <span data-key="t-horizontal">FAQ's</span>
                  </a>
              </li>
              <li>
                  <a href="layouts-horizontal.html">
                      <i class="fa fa-paper-plane" style="font-size: 17px;"></i>
                      <span data-key="t-horizontal">Email Marketing</span>
                  </a>
              </li>
              <li>
                  <a href="layouts-horizontal.html">
                      <i class="fa fa-cog" style="font-size: 17px;"></i>
                      <span data-key="t-horizontal">Settings</span>
                  </a>
              </li>
              <li>
                  <a href="layouts-horizontal.html">
                      <i class="fab fa-blogger-b" style="font-size: 17px;"></i>
                      <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                      <span data-key="t-horizontal">Blogs</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('show.superadmin.lock-screen.page', app()->getLocale()) }}">
                      <i class="fa fa-user-lock" style="font-size: 17px;"></i>
                      <span data-key="t-horizontal">Lock Screen</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('logout', app()->getLocale()) }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out-alt" style="font-size: 17px;"></i>
                      <span data-key="t-horizontal">Log Out</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
                    @csrf
                  </form>
              </li>
              

              {{-- <li>
                  <a href="javascript: void(0);">
                      <i data-feather="box"></i>
                      <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                      <span data-key="t-forms">Forms</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="form-elements.html" data-key="t-form-elements">Basic Elements</a></li>
                      <li><a href="form-validation.html" data-key="t-form-validation">Validation</a></li>
                      <li><a href="form-advanced.html" data-key="t-form-advanced">Advanced Plugins</a></li>
                      <li><a href="form-editors.html" data-key="t-form-editors">Editors</a></li>
                      <li><a href="form-uploads.html" data-key="t-form-upload">File Upload</a></li>
                      <li><a href="form-wizard.html" data-key="t-form-wizard">Wizard</a></li>
                      <li><a href="form-mask.html" data-key="t-form-mask">Mask</a></li>
                  </ul>
              </li> --}}

          </ul>
      </div>
      <!-- Sidebar -->
  </div>
</div>
<!-- Left Sidebar End -->