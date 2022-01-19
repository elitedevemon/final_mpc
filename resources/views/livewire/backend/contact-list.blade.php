<div>
  <div class="app-content main-content">
    <div class="side-app">
  
      <!--Page header-->
      <div class="page-header">
        <div class="page-leftheader">
          <h4 class="page-title mb-0 text-primary">All Contacts</h4>
        </div>
      </div>
      <!--End Page header-->
  
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-nowrap text-center" id="example2">
              <thead>
                <tr>
                  <th class="wd-15p border-bottom-0">Name</th>
                  <th class="wd-20p border-bottom-0">Email</th>
                  <th class="wd-15p border-bottom-0">Phone</th>
                  <th class="wd-15p border-bottom-0">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($contacts as $friend)
                  <tr>
                    <td>{{ $friend->name }}</td>
                    <td>{{ $friend->email }}</td>
                    <td>{{ $friend->phone }}</td>
                    <td>
                      <a href="{{ route('show.selected.profile', ['language'=>app()->getLocale(), 'username'=>$friend->username]) }}" class="btn btn-primary btn-sm">View profile</a>
                      <button class="btn btn-info btn-sm">Send message</button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
