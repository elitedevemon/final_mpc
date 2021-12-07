<div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center" style="padding: 2rem 0 2rem 0">
        <i class="fa fa-exclamation-triangle fs-1"></i>
        <h4 class="text-primary fs-2 font-weight-semibold mt-2">Session Timeout</h4>
        <div class="loading_bar">
        </div>
        <p class="mb-4 mx-4 fs-6">You're being timed out due to inactivity. Please choose <code>Stay LoggedIn</code> or <code>Log Out</code>. Otherwise, your <code>Lock Screen</code> mode will be enabled automatically in 5 minutes.</p>
        <a class="btn btn-danger px-5" href="{{ route('logout', app()->getLocale()) }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
        <a class="btn btn-primary px-5 text-white" href="{{ url()->current() }}">Stay Loggedin</a>
        <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" class="d-none">
      </div>
    </div>
  </div>
</div>