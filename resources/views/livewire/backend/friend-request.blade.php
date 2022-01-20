<div>
  <div wire:poll.keep-alive>
    <div class="app-content main-content">
      <div class="side-app">
    
        <!--Page header-->
        <div class="page-header">
          <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Friend Request</h4>
          </div>
        </div>
        <!--End Page header-->

        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered text-nowrap text-center">
                <tbody>
                  @if(!$friendRequests->isEmpty())
                    @foreach ($friendRequests as $request)
                      @php
                        $friend = App\Models\User::where('username', $request->sender_username)->first();
                        $alreadyFriend = App\Models\Backend\FriendRequest::where('sender_username', $friend->username)->where('receiver_username', Auth::user()->username)->where('action', 'success')->first();
                      @endphp
                      <tr>
                        <td>{{ $friend->name }}</td>
                        <td>
                          <button class="btn btn-primary btn-sm {{ $alreadyFriend?'d-none':'' }}" wire:click="confirmReceivedRequest('{{ $friend->username }}')">
                            <span wire:target='confirmReceivedRequest' wire:loading.class='d-none'>Confirm Request</span>
                            <span wire:target='confirmReceivedRequest' wire:loading>Processing..</span>
                          </button>
                          <a href="{{ route('show.selected.profile', ['language'=>app()->getLocale(), 'username'=>$friend->username]) }}" class="btn btn-info btn-sm">View Profile</a>
                        </td>
                      </tr>
                    @endforeach
                  @else
                    <div class="text-center">You don't have any friend request</div>
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
