<div>
  <div class="app-content main-content">
    <div class="side-app">
  
                  
      <!--Page header-->
      <div class="page-header">
        <div class="page-leftheader">
          <h4 class="page-title mb-0 text-primary">To Do List</h4>
        </div>
      </div>
      <!--End Page header-->
  
      <!--Main content-->
      <div class="row">
        <div class="col-md-12 col-xl-3 col-lg-4">
          <div class="card">
            <div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
              <div class="mt-4 mb-4 ms-4 me-4 text-center">
                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#taskModal">Add New Task</button>
              </div>
              <a href="javascript:void(0);" wire:click="importantTask('all-task')" class="list-group-item list-group-item-action d-flex align-items-center mb-1">
                <i class="fe fe-codepen fs-18 me-4 p-2 border-primary brround bg-primary-transparent text-primary"></i> All Tasks 
                {{-- <span class="ms-auto badge bg-success">14</span> --}}
              </a>
              <a href="javascript:void(0);" wire:click="importantTask('important-task')" class="list-group-item list-group-item-action d-flex align-items-center mb-1">
                <i class="fe fe-alert-octagon fs-18 me-4 p-2 border-warning brround bg-warning-transparent text-warning"></i> Important 
                {{-- <span class="ms-auto badge bg-danger">3</span> --}}
              </a>
              <a href="javascript:void(0);" wire:click="importantTask('trash-task')" class="list-group-item list-group-item-action d-flex align-items-center border-bottom-0">
                <i class="fe fe-trash-2 fs-18 me-4 p-2 border-info brround bg-info-transparent text-info"></i> Trash
              </a>
              <div class="list-group list-group-transparent mb-0 mail-inbox">
                <a href="javascript:void(0);" wire:click="importantTask('new-task')" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                  <i class="fe fe-arrow-right fs-14 me-4 p-1 border-primary br-7 bg-primary-transparent text-primary"></i> New
                </a>
                <a href="javascript:void(0);" wire:click="importantTask('in-process-task')" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                  <i class="fe fe-arrow-right fs-14 me-4 p-1 border-info br-7 bg-info-transparent text-info"></i> In-process
                </a>
                <a href="javascript:void(0);" wire:click="importantTask('pending-task')" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                  <i class="fe fe-arrow-right fs-14 me-4 p-1 border-warning br-7 bg-warning-transparent text-warning"></i> Pending
                </a>
              </div>
            </div>
            {{-- <div class="p-1">
              <div class="list-group list-group-transparent mb-0 mail-inbox">
                <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                  <i class="fe fe-arrow-right fs-14 me-4 p-1 border-secondary br-7 bg-secondary-transparent text-secondary"></i> friends
                </a>
                <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                  <i class="fe fe-arrow-right fs-14 me-4 p-1 border-success br-7 bg-success-transparent text-success"></i> Family
                </a>
                <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                  <i class="fe fe-arrow-right fs-14 me-4 p-1 border-primary br-7 bg-primary-transparent text-primary"></i> Social
                </a>
                <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                  <i class="fe fe-arrow-right fs-14 me-4 p-1 border-warning br-7 bg-warning-transparent text-warning"></i> Office
                </a>
                <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                  <i class="fe fe-arrow-right fs-14 me-4 p-1 border-info br-7 bg-info-transparent text-info"></i> Work
                </a>
                <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
                  <i class="fe fe-arrow-right fs-14 me-4 p-1 border-danger br-7 bg-danger-transparent text-danger"></i> Settings
                </a>
              </div>
            </div> --}}
          </div>
        </div>

        <div class="col-md-12 col-lg-8 col-xl-9" wire:loading wire:target='importantTask'>
          <h5 class="text-center">Loading...</h5>
        </div>

        <!--All task tab-->
        @if($tab == 'all-task')
          <div class="col-md-12 col-lg-8 col-xl-9" wire:loading.class='d-none' wire:target='importantTask'>
            @livewire('backend.calendar.all-task')
          </div>
        <!--End all task-->

        <!--Important task tab-->
        @elseif($tab == 'important-task')
          <div class="col-md-12 col-lg-8 col-xl-9" wire:loading.class='d-none' wire:target='importantTask'>
            @livewire('backend.calendar.important-task')
          </div>
        <!--End important task-->

        <!--Trash task tab-->
        @elseif($tab == 'trash-task')
          <div class="col-md-12 col-lg-8 col-xl-9" wire:loading.class='d-none' wire:target='importantTask'>
            @livewire('backend.calendar.trash-task')
          </div>
        <!--End trash task tab-->

        <!--Trash task tab-->
        @elseif($tab == 'new-task')
          <div class="col-md-12 col-lg-8 col-xl-9" wire:loading.class='d-none' wire:target='importantTask'>
            @livewire('backend.calendar.new-task')
          </div>
        <!--End trash task tab-->

        <!--Trash task tab-->
        @elseif($tab == 'in-process-task')
          <div class="col-md-12 col-lg-8 col-xl-9" wire:loading.class='d-none' wire:target='importantTask'>
            @livewire('backend.calendar.inprocess-task')
          </div>
        <!--End trash task tab-->

        <!--Trash task tab-->
        @elseif($tab == 'pending-task')
          <div class="col-md-12 col-lg-8 col-xl-9" wire:loading.class='d-none' wire:target='importantTask'>
            @livewire('backend.calendar.pending-task')
          </div>
        @endif
        <!--End trash task tab-->

  
      </div>
      <!--End main content-->
  
  </div>
</div>
