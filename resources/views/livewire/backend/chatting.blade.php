<div>
  <div class="app-content main-content">
    <div class="side-app">
  
      <!-- Row -->
      <!--For laptop or bigger screen-->
      <div class="card mt-4 d-none d-lg-block">
        <div class="row g-0">
          <div class="col-lg-5 col-xl-4">
            @livewire('backend.chatting.friend-list')
          </div>
          <div class="col-lg-7 col-xl-8">
            <div class="border-start">
              @if ($receiver_username)
                @livewire('backend.chatting.messages')
              @else
                <div class="pt-4 mt-4" style="margin-top: 200px!important">
                  <h3 class="text-center my-auto pt-4">Please select a friend to start conversation.</h3>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
      <!--For mobile screen-->
      <div class="card mt-4 d-lg-none">
        <div class="row g-0">
          <div class="col-lg-5 col-xl-4">
            @livewire('backend.chatting.friend-list')
          </div>
          <div class="col-lg-7 col-xl-8 d-none">
            <div class="border-start">
              @if ($receiver_username)
                @livewire('backend.chatting.messages')
              @else
                <div class="pt-4 mt-4" style="margin-top: 200px!important">
                  <h3 class="text-center my-auto pt-4">Please select a friend to start conversation.</h3>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
  
  
    </div>
  </div>
</div>
