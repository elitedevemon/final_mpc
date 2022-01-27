<div>
  <!--aside open-->
  <aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{ route('welcome', app()->getLocale()) }}">
            <img src="{{ asset('logo/MPC.png') }}" class="header-brand-img desktop-lgo" alt="MPC Method">
            <img src="{{ asset('logo/MPC.png') }}" class="header-brand-img dark-logo" alt="MPC Method">
            <img src="{{ asset('logo/MPC.png') }}" class="header-brand-img mobile-logo" alt="MPC Method">
            <img src="{{ asset('logo/MPC.png') }}" class="header-brand-img darkmobile-logo" alt="MPC Method">
        </a>
    </div>
    <ul class="side-menu app-sidebar3">
        <li class="slide">
            <a class="side-menu__item"  href="{{ route('home', app()->getLocale()) }}">
                <svg xmlns=""  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg>
            <span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="{{ $toggle_name }}" data-bs-target="{{ $toggle_target }}" wire:click='modalId("calender")' href="{{ Auth::user()->email_verified_at?route('show.calendar.page', ['language'=>app()->getLocale(), 'tab'=>'all-task']):'javescript:void(0);' }}">
                <i class="fa fa-calendar side-menu__icon"></i>
            <span class="side-menu__label">Calendar</span><span class="badge bg-info side-badge {{ Auth::user()->email_verified_at?'':'d-none' }}">11</span><small class="text-danger text-sm {{ Auth::user()->email_verified_at?'d-none':'' }} side-badge">Disabled</small></a>
        </li>
        {{-- <li class="slide" wire:poll.keep-alive>
          @php
            $faq_notification = App\Models\Backend\FaqsNotification::where('notification_receiver', Auth::user()->username)->get();
            $friend_request_notification = App\Models\Backend\Notification\FriendRequestNotification::where('receiver_username', Auth::user()->username)->where('action', 'sent')->get();
            $total_notification = count($faq_notification)+count($friend_request_notification);
          @endphp
            <a class="side-menu__item"  href="{{ route('show.notifications.page', app()->getLocale()) }}">
                <i class="fa fa-bell-o side-menu__icon"></i>
            <span class="side-menu__label">Notifications</span><span class="badge bg-danger side-badge {{ $total_notification>0?'':'d-none' }}">{{ $total_notification }}</span></a>
        </li> --}}
        <li class="slide">
          <a class="side-menu__item" data-bs-toggle="{{ $toggle_name }}" data-bs-target="{{ $toggle_target }}" wire:click='modalId("chat")'  href="{{ Auth::user()->email_verified_at?route('show.chatting.page', app()->getLocale()):'javascript:void(0);' }}">
            <i class="fa fa-comments-o side-menu__icon"></i>
            <span class="side-menu__label">Chat</span>
            <span class="badge bg-primary side-badge {{ Auth::user()->email_verified_at?'':'d-none' }}">11</span>
            <small class="text-danger text-sm {{ Auth::user()->email_verified_at?'d-none':'' }} side-badge">Disabled</small>
          </a>
        </li>
        <li class="slide">
          <a class="side-menu__item" data-bs-toggle="{{ $toggle_name }}" data-bs-target="{{ $toggle_target }}" wire:click='modalId("e-mail")'  href="{{ Auth::user()->email_verified_at?route('show.email.inbox', app()->getLocale()):'javascript:void(0);' }}">
            <i class="fa fa-telegram side-menu__icon"></i>
            <span class="side-menu__label">Email</span>
            <span class="badge bg-warning side-badge {{ Auth::user()->email_verified_at?'':'d-none' }}">11</span>
            <small class="text-danger text-sm {{ Auth::user()->email_verified_at?'d-none':'' }} side-badge">Disabled</small>
          </a>
        </li>
        <li class="slide">
          <a class="side-menu__item" data-bs-toggle="{{ $toggle_name }}" data-bs-target="{{ $toggle_target }}" wire:click='modalId("exam")'  href="{{ Auth::user()->email_verified_at?route('show.exam.page', app()->getLocale()):'javascript:void(0);' }}">
            <i class="fa fa-bell-o side-menu__icon"></i>
            <span class="side-menu__label">Exam</span>
            <span class="badge bg-danger side-badge {{ Auth::user()->email_verified_at?'':'d-none' }}">11</span>
            <small class="text-danger text-sm {{ Auth::user()->email_verified_at?'d-none':'' }} side-badge">Disabled</small>
          </a>
        </li>
        <li class="slide">
          <a class="side-menu__item" data-bs-toggle="{{ $toggle_name }}" data-bs-target="{{ $toggle_target }}" wire:click='modalId("result")'  href="{{ Auth::user()->email_verified_at?route('show.result.page', app()->getLocale()):'javascript:void(0);' }}">
            <i class="fa fa-bar-chart side-menu__icon"></i>
            <span class="side-menu__label">Result</span>
            <small class="text-danger text-sm {{ Auth::user()->email_verified_at?'d-none':'' }} side-badge">Disabled</small>
          </a>
        </li>
        <li class="slide">
          <a class="side-menu__item" data-bs-toggle="{{ $toggle_name }}" data-bs-target="{{ $toggle_target }}" wire:click='modalId("contacts")'  href="{{ Auth::user()->email_verified_at?route('show.contact-list.page', app()->getLocale()):'javascript:void(0);' }}">
            <i class="mdi mdi-account-multiple side-menu__icon"></i>
            <span class="side-menu__label">Contacts</span>
            <small class="text-danger text-sm {{ Auth::user()->email_verified_at?'d-none':'' }} side-badge">Disabled</small>
          </a>
        </li>
        <li class="slide">
          @php
            $friend_request_notification = App\Models\Backend\Notification\FriendRequestNotification::where('receiver_username', Auth::user()->username)->where('action', 'sent')->get();
            $total_friend_request_notification = count($friend_request_notification);
          @endphp
          <a class="side-menu__item" data-bs-toggle="{{ $toggle_name }}" data-bs-target="{{ $toggle_target }}" wire:click='modalId("Friend Request")' href="{{ Auth::user()->email_verified_at?route('show.friend.request.page', app()->getLocale()):'javascript:void(0);' }}">
            <i class="mdi mdi-account side-menu__icon"></i>
            <span class="side-menu__label">Friend Request</span>
            <span class="badge bg-danger side-badge {{ Auth::user()->email_verified_at?'':'d-none' }}{{ $total_friend_request_notification!=0?'':'d-none' }}">{{ $total_friend_request_notification }}</span>
            <small class="text-danger text-sm {{ Auth::user()->email_verified_at?'d-none':'' }} side-badge">Disabled</small>
          </a>
        </li>
        <li class="slide">
            <a class="side-menu__item"  href="{{ route('show.settings.page', app()->getLocale()) }}">
                <i class="fa fa-cogs side-menu__icon"></i>
            <span class="side-menu__label">Settings</span></a>
        </li>
        <li class="slide" wire:poll.keep-alive>
          @php
            $faq_notification = App\Models\Backend\FaqsNotification::where('notification_receiver', Auth::user()->username)->get();
          @endphp
            <a class="side-menu__item"  href="{{ route('show.faqs.page', app()->getLocale()) }}">
                <i class="fa fa-question-circle-o side-menu__icon"></i>
            <span class="side-menu__label">FAQ</span><span class="badge bg-primary side-badge {{ count($faq_notification)>0?'':'d-none' }}">{{ count($faq_notification) }}</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item"  href="{{ route('show.blog.post', app()->getLocale()) }}">
                <i class="fa fa-sellsy side-menu__icon"></i>
              <span class="side-menu__label">Forum</span>
              <span class="badge bg-info side-badge">11</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item"  href="{{ route('contact', app()->getLocale()) }}">
                <i class="typcn typcn-info-large-outline side-menu__icon"></i>
            <span class="side-menu__label">Help</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item"  href="{{ route('show.lock.screen', app()->getLocale()) }}">
                <i class="fa fa-lock side-menu__icon"></i>
            <span class="side-menu__label">Lock Screen</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item"  href="{{ route('logout', app()->getLocale()) }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="ion ion-log-out side-menu__icon"></i>
            <span class="side-menu__label">Logout</span></a>
            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
  </aside>
  <!-- Modal -->
  <div class="modal fade" wire:ignore.self id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Enable {{ $modal_title }}</h5>
        </div>
        <div class="modal-body">
          To enable {{ $modal_message }} tab, please <a href="{{ route('show.settings.page', app()->getLocale()) }}" class='text-success'>verify your email</a> address.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--Modal close-->
  <!--aside closed-->
</div>
