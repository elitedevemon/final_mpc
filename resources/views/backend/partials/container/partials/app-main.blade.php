<div class="app-main">
  @include('backend.partials.container.partials.app-sidebar')
  <div class="app-main__outer">
      <div class="app-main__inner">
          <div class="app-page-title">
              <div class="page-title-wrapper">
                  <div class="page-title-heading">
                      <div class="page-title-icon">
                          <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                      </div>
                      <div>Analytics Dashboard
                          <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
                      </div>
                  </div>
                </div>
          </div>
          @include('backend.partials.container.partials.main-content-area')
      </div>
      @include('backend.partials.container.partials.app-footer')
    </div>
</div>