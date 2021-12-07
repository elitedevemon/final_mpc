<div class="app-sidebar sidebar-shadow">
  <div class="app-header__logo">
      <div class="logo-src"></div>
      <div class="header__pane ml-auto">
          <div>
              <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                  <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                  </span>
              </button>
          </div>
      </div>
  </div>
  <div class="app-header__mobile-menu">
      <div>
          <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
              <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
              </span>
          </button>
      </div>
  </div>
  <div class="app-header__menu">
      <span>
          <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
              <span class="btn-icon-wrapper">
                  <i class="fa fa-ellipsis-v fa-w-6"></i>
              </span>
          </button>
      </span>
  </div>
  <div class="scrollbar-sidebar">
      <div class="app-sidebar__inner">
          <ul class="vertical-nav-menu">
              <li class="app-sidebar__heading">Menu</li>
              <li class="{{ Route::is('home')?'mm-active':'' }}">
                <a href="#">
                  <i class="metismenu-icon pe-7s-rocket {{ Route::is('home')?'text-danger':'' }}"></i>Dashboards
                  <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                  <li>
                    <a href="{{ route('home') }}" class="{{ Route::is('home')?'mm-active':'' }}">
                      <i class="metismenu-icon"></i>Analytics
                    </a>
                  </li>
                </ul>
              </li>
              <li class="{{ Route::is('change.contact.info')||Route::is('update.marquee.page')?'mm-active':'' }}">
                <a href="#">
                  <i class="metismenu-icon fas fa-wrench {{ Route::is('change.contact.info')||Route::is('update.marquee.page')?'text-danger':'' }}"></i>Updates
                  <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                      <a href="{{ route('change.contact.info') }}" class="{{ Route::is('change.contact.info')?'mm-active':'' }}">
                          <i class="metismenu-icon"></i>Contact Info
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('update.marquee.page') }}" class="{{ Route::is('update.marquee.page')?'mm-active':'' }}">
                        <i class="metismenu-icon"></i>Marquee
                      </a>
                    </li>
                    <li>
                      <a href="index.html" >
                        <i class="metismenu-icon"></i>Social Links
                      </a>
                    </li>
                    <li>
                      <a href="index.html" >
                        <i class="metismenu-icon"></i>Slider Photos
                      </a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="#">
                  <i class="metismenu-icon fas fa-plus-circle"></i>Create
                  <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                      <a href="index.html" >
                          <i class="metismenu-icon"></i>Blog Post
                      </a>
                    </li>
                    <li>
                      <a href="index.html" >
                        <i class="metismenu-icon"></i>Blog Video
                      </a>
                    </li>
                    <li>
                      <a href="index.html" >
                        <i class="metismenu-icon"></i>Exam Question
                      </a>
                    </li>
                </ul>
              </li>
              <li>
                <a href="#">
                  <i class="metismenu-icon fas fa-plus"></i>Others
                  <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                      <a href="index.html" >
                          <i class="metismenu-icon"></i>Upload Media
                      </a>
                    </li>
                    <li>
                      <a href="index.html" >
                        <i class="metismenu-icon"></i>People Says
                      </a>
                    </li>
                </ul>
              </li>
              <li>
                  <a href="#">
                      <i class="metismenu-icon pe-7s-plugin"></i>Applications
                      <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                  </a>
                  <ul  
                      >
                      <li>
                          <a href="apps-mailbox.html" >
                              <i class="metismenu-icon"></i>Mailbox
                          </a>
                      </li>
                      <li>
                          <a href="apps-chat.html" >
                              <i class="metismenu-icon"></i>Chat
                          </a>
                      </li>
                      <li>
                          <a href="apps-faq-section.html" >
                              <i class="metismenu-icon"></i>FAQ Section
                          </a>
                      </li>
                      <li   >
                          <a href="#">
                              <i class="metismenu-icon"></i>Forums
                              <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                          </a>
                          <ul   >
                              <li>
                                  <a href="apps-forum-list.html" >
                                      <i class="metismenu-icon"></i>Forum Listing
                                  </a>
                              </li>
                              <li>
                                  <a href="apps-forum-threads.html" >
                                      <i class="metismenu-icon"></i>Forum Threads
                                  </a>
                              </li>
                              <li>
                                  <a href="apps-forum-discussion.html" >
                                      <i class="metismenu-icon"></i>Forum Discussion
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </li>
          </ul>
      </div>
  </div>
</div>