<div>
  <!-- Switcher -->
  <div class="switcher-wrapper">
    <div class="demo_changer">
      <div class="form_holder sidebar-right1">
        <div class="row">
          <div class="predefined_styles">
            <div class="swichermainleft text-center">
              <div class="p-3 d-grid gap-2">
                <a href="{{ route('show.profile.page', app()->getLocale()) }}"  target="_blank" class="btn ripple btn-primary mt-0">View Profile</a>
                {{-- <a href="#" target="_blank"  class="btn ripple btn-success">Send Refer</a> --}}
                <a href="{{ route('contact', app()->getLocale()) }}"  target="_blank" class="btn ripple btn-red">Admin Contact</a>
              </div>
            </div>
            {{-- <div class="swichermainleft mb-4">
              <h4>RTL Navigation Style</h4>
              <div class="ps-3 pe-3 pt-3 d-grid gap-2">
                <a class="btn btn-success " href="#"> Vertical-Menu</a>
                <a class="btn btn-danger" href="#"> Horizontal-Menu </a>
              </div>
            </div> --}}
            {{-- <div class="swichermainleft mb-4">
              <h4>LTR Navigation Style</h4>
              <div class="ps-3 pe-3 pt-3 d-grid gap-2">
                <a class="btn btn-primary " href="vertical-light.html"> Vertical-Menu</a>
                <a class="btn btn-info" href="horizontal-light.html"> Horizontal-Menu </a>
              </div>
            </div> --}}
            <div class="swichermainleft">
              <h4>Theme Layout</h4>
              <div class="switch_section d-flex my-4">
                <ul class="switch-buttons row">
                  <li class="col-md-6 mb-0">
                    <button type="button" id="background-left1" class="bg-left1 wscolorcode1 button-image" wire:click="themeColorChanger('0')"></button>
                    <span class="d-block">Light Theme</span>
                  </li>
                  <li class="col-md-6 mb-0">
                    <button type="button" id="background-left2" class="bg-left2 wscolorcode1 button-image" wire:click="themeColorChanger('1')"></button>
                    <span class="d-block">Dark Theme</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Header Styles Mode</h4>
              <div class="switch_section d-flex my-4">
                <ul class="switch-buttons row">
                  <li class="col-md-6">
                    <button type="button" id="background1" class="bg1 wscolorcode1 button-image" wire:click="headerChanger('light-header')"></button>
                    <span class="d-block">Light Header</span>
                  </li>
                  <li class="col-md-6">
                    <button type="button" id="background2" class="bg2 wscolorcode1 button-image" wire:click="headerChanger('color-header')"></button>
                    <span class="d-block">Color Header</span>
                  </li>
                  <li class="col-md-6 d-block mx-auto dark-bg">
                    <button type="button" id="background3" class="bg3 wscolorcode1 button-image" wire:click="headerChanger('dark-header')"></button>
                    <span class="d-block">Dark Header</span>
                  </li>
                  <li class="col-md-6 d-block mx-auto">
                    <button type="button" id="background11" class="bg8 wscolorcode1 button-image" wire:click="headerChanger('gradient-header')"></button>
                    <span class="d-block">Gradient Header</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Vertical-Menu Styles Mode</h4>
              <div class="switch_section d-flex my-4">
                <ul class="switch-buttons row">
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background4" class="bg4 wscolorcode1 button-image" wire:click="menuColorChanger('light-menu')"></button>
                    <span class="d-block">Light Menu</span>
                  </li>
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background5" class="bg5 wscolorcode1 button-image" wire:click="menuColorChanger('color-menu')"></button>
                    <span class="d-block">Color Menu</span>
                  </li>
                  <li class="col-md-6 mb-0 d-block mx-auto dark-bgmenu">
                    <button type="button" id="background6" class="bg6 wscolorcode1 button-image" wire:click="menuColorChanger('dark-menu')"></button>
                    <span class="d-block">Dark Menu</span>
                  </li>
                  <li class="col-md-6 mb-0 d-block mx-auto">
                    <button type="button" id="background10" class="bg7 wscolorcode1 button-image" wire:click="menuColorChanger('gradient-menu')"></button>
                    <span class="d-block">Gradient Menu</span>
                  </li>
                </ul>
              </div>
            </div>
            {{-- <div class="swichermainleft">
              <h4>Layout-width Styles Mode</h4>
              <div class="switch_section d-flex my-4">
                <ul class="switch-buttons row">
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background14" class="bg-layf wscolorcode1 button-image"></button>
                    <span class="d-block">Full-Width</span>
                  </li>
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background15" class="bg-laybx wscolorcode1 button-image"></button>
                    <span class="d-block">Boxed</span>
                  </li>
                </ul>
              </div>
            </div> --}}
            {{-- <div class="swichermainleft">
              <h4>Side-menu layout Styles Mode</h4>
              <div class="switch_section d-flex my-4">
                <ul class="switch-buttons row">
                  <li class="col-md-6 mb-4">
                    <a href="index.html" type="button" id="background18" class="bg-sided button-image wscolorcode1 default-menu" data-sidetheme="{{ asset('superadmin/assets/css/sidemenu.css') }}"></a>
                    <span class="d-block">Default</span>
                  </li>
                  <li class="col-md-6 mb-4">
                    <a type="button"  class="bg-sideictxt button-image wscolorcode1 icontext-menu" href="index1.html" data-sidetheme="{{ asset('superadmin/assets/css/sidemenu-icontext.css') }}"></a>
                    <span class="d-block">Icon-with Text</span>
                  </li>
                  <li class="col-md-6 d-block mx-auto">
                      <button type="button" id="background20" class="bg-sideicon button-image wscolorcode1 sideicon-menu" data-sidetheme="{{ asset('superadmin/assets/css/sidemenu-icon.html') }}"></button>
                      <span class="d-block">Icon</span>
                  </li>
                </ul>
              </div>
            </div> --}}
            <div class="swichermainleft">
              <h4>Layout Positions Mode</h4>
              <div class="switch_section d-flex my-4">
                <ul class="switch-buttons row">
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background16" class="bg-left1 wscolorcode1 button-image"></button>
                    <span class="d-block">Fixed</span>
                  </li>
                  <li class="col-md-6 mb-4">
                    <button type="button" id="background17" class="bg-left1 wscolorcode1 button-image"></button>
                    <span class="d-block">Scrollable</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Switcher -->
</div>
