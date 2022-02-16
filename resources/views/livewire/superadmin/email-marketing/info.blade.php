<div>
  <div class="d-flex align-items-start mt-4">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <button class="nav-link {{ $tabName == 'fiverr'?'active':'' }}" id="v-pills-fiverr-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fiverr" type="button" role="tab" aria-controls="v-pills-fiverr" aria-selected="false" wire:click="navTab('fiverr')">Fiverr</button>
      <button class="nav-link {{ $tabName == 'youtube'?'active':'' }}" id="v-pills-youtube-tab" data-bs-toggle="pill" data-bs-target="#v-pills-youtube" type="button" role="tab" aria-controls="v-pills-youtube" aria-selected="false" wire:click="navTab('youtube')">YouTube</button>
      <button class="nav-link {{ $tabName == 'gearlaunch'?'active':'' }}" id="v-pills-gearlaunch-tab" data-bs-toggle="pill" data-bs-target="#v-pills-gearlaunch" type="button" role="tab" aria-controls="v-pills-gearlaunch" aria-selected="true" wire:click="navTab('gearlaunch')">Gearlaunch</button>
      {{-- <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button> --}}
    </div>
    <div class="tab-content" id="v-pills-tabContent">
      @if($tabName == 'fiverr')
        <div class="tab-pane fade {{ $tabName == 'fiverr'?' show active':'' }}" id="v-pills-fiverr" role="tabpanel" aria-labelledby="v-pills-fiverr-tab">
          <table class="table table-bordered table-responsive">
            <thead>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
            </thead>
            <tbody>
              @foreach ($fiverr as $fiverrTargetUser)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $fiverrTargetUser->name }}</td>
                  <td>{{ $fiverrTargetUser->email }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{ $fiverr->links() }}
        </div>
      @elseif($tabName == 'youtube')
        <div class="tab-pane fade {{ $tabName == 'youtube'?' show active':'' }}" id="v-pills-youtube" role="tabpanel" aria-labelledby="v-pills-youtube-tab">
          <table class="table table-bordered table-responsive">
            <thead>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
            </thead>
            <tbody>
              @foreach ($youtube as $fiverrTargetUser)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $fiverrTargetUser->name }}</td>
                  <td>{{ $fiverrTargetUser->email }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{ $youtube->links() }}
        </div>
      @elseif($tabName == 'gearlaunch')
        <div class="tab-pane fade {{ $tabName == 'gearlaunch'?' show active':'' }}" id="v-pills-gearlaunch" role="tabpanel" aria-labelledby="v-pills-gearlaunch-tab">
          <table class="table table-bordered table-responsive">
            <thead>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
            </thead>
            <tbody>
              @foreach ($gearlaunch as $targetUser)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $targetUser->name }}</td>
                  <td>{{ $targetUser->email }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{ $gearlaunch->links() }}
        </div>
      @endif
      {{-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div> --}}
    </div>
  </div>
</div>
