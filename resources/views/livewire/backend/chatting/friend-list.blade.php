<div wire:poll></div>
  <div class="overflow-hidden mb-0 mb-lg-0">
    <div class="card-body p-0">
      <div class="main-content-left main-content-left-chat">
        <div class="p-4 pb-0 border-bottom">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Friends...">
              <button type="button" class="btn btn-primary ">
                <i class="fa fa-search"></i>
              </button>
          </div>
        </div>
        <!--Active contacts-->
        <div class="main-chat-contacts-wrapper">
          <label class="form-label mb-2 fs-13">Active Contacts (28)</label>
          <div class="main-chat-contacts" id="chatActiveContacts">
            @foreach ($messagedFriendList as $friend)
              <div>
                <div class="main-img-user online"><img alt="" src="{{ asset('superadmin/assets//images/users/14.jpg') }}" class="avatar avatar-md brround"></div><small>Edwina</small>
              </div>
            @endforeach
            <div class="main-chat-contacts-more">
              20+
            </div><small>More</small>
          </div><!-- main-active-contacts -->
        </div>
        <!-- main-chat-active-contacts -->
        <div class="main-chat-list" id="ChatList">
          @foreach ($messagedFriendList as $friend)
            <a href="javascript:void(0);">
              <div class="media new">
                <div class="main-img-user online">
                  <img alt="" src="{{ $friend->profile_image }}" class="avatar avatar-md brround"><span>2</span>
                </div>
                <div class="media-body">
                  <div class="media-contact-name">
                    <span>{{ $friend->name }}</span> <span>2 hours</span>
                  </div>
                  <p>{{ $friend->email }}</p>
                </div>
              </div>
            </a>
          @endforeach
          @foreach ($messagedFriendList as $friend)
            <a href="javascript:void(0);">
              <div class="media new">
                <div class="main-img-user online">
                  <img alt="" src="{{ $friend->profile_image }}" class="avatar avatar-md brround"><span>2</span>
                </div>
                <div class="media-body">
                  <div class="media-contact-name">
                    <span>{{ $friend->name }}</span> <span>2 hours</span>
                  </div>
                  <p>{{ $friend->email }}</p>
                </div>
              </div>
            </a>
          @endforeach
          @foreach ($messagedFriendList as $friend)
            <a href="javascript:void(0);">
              <div class="media new">
                <div class="main-img-user online">
                  <img alt="" src="{{ $friend->profile_image }}" class="avatar avatar-md brround"><span>2</span>
                </div>
                <div class="media-body">
                  <div class="media-contact-name">
                    <span>{{ $friend->name }}</span> <span>2 hours</span>
                  </div>
                  <p>{{ $friend->email }}</p>
                </div>
              </div>
            </a>
          @endforeach
          @foreach ($messagedFriendList as $friend)
            <a href="javascript:void(0);">
              <div class="media new">
                <div class="main-img-user online">
                  <img alt="" src="{{ $friend->profile_image }}" class="avatar avatar-md brround"><span>2</span>
                </div>
                <div class="media-body">
                  <div class="media-contact-name">
                    <span>{{ $friend->name }}</span> <span>2 hours</span>
                  </div>
                  <p>{{ $friend->email }}</p>
                </div>
              </div>
            </a>
          @endforeach
          {{-- <a href="javascript:void(0);">
            <div class="media selected">
              <div class="main-img-user online"><img alt="" src="{{ asset('superadmin/assets//images/users/3.jpg') }}" class="avatar avatar-md brround"></div>
              <div class="media-body">
                <div class="media-contact-name">
                  <span>Zofia Mccutcheon</span> <span>10 hours</span>
                </div>
                <p>Nam libero tempore, cum soluta nobis </p>
              </div>
            </div>
          </a> --}}
        </div><!-- main-chat-list -->
      </div>
    </div>
  </div>
</div>
