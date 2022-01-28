<div>
  <!--inbox area-->

  <div class="card">
    <div class="card-body p-6">
      <div class="inbox-body">
        <div class="row">
          <div class="col">
            <div class="form-group w-auto">
              <div class="input-icon">
                <span class="input-icon-addon">
                  <i class="fe fe-search"></i>
                </span>
                <input type="text" class="form-control" placeholder="Search Tasks" wire:model="searchTerm">
              </div>
            </div>
          </div>
          {{-- <div class="col col-auto mb-4" wire:ignore.self>
            <div class="btn-group hidden-phone">
              <a data-bs-toggle="dropdown" href="javascript:void(0);" class="btn btn-light btn-sm p-3" aria-expanded="false">
                Sort By
                <i class="fa fa-angle-down "></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a href="javascript:void(0);">Assending Order</a></li>
                <li><a href="javascript:void(0);">Descending Order</a></li>
                <li class="divider"></li>
                <li><a href="javascript:void(0);">Settings</a></li>
              </ul>
            </div>
          </div> --}}
        </div>
        <div class="table-responsive">
          <table class="table table-hover text-nowrap mb-0">
            <tbody>
              @if ($searchTerm)
                @if (!$searchResult->isEmpty())
                  @foreach ($searchResult as $searchItem)
                    @php
                      $today = date('Y-m-d');
                      if ($searchItem->date > $today) {
                        $buttonText = 'New';
                      }elseif ($today == $searchItem->date) {
                        $buttonText = 'In-process';
                      }elseif ($searchItem->date < $today) {
                        $buttonText = 'Pending';
                      }
                    @endphp
                    <tr class="mt-2 mb-2">
                      <td>{{ $loop->index + 1 }}</td>
                      {{-- <td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td> --}}
                      <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ Auth::user()->profile_image }}" alt="img">{{ $searchItem->title }}</td>
                      <td class="view-message" style="padding-left: 25px;">{{ date('d-m-Y', strtotime($searchItem->date)) }}</td>
                      <td class="view-message">
                        <span class="badge bg-{{ $buttonText == 'New'?'info':($buttonText == 'In-process'?'primary':'warning') }} br-7 p-2">  {{ $buttonText }}</span>
                      </td>
                      <td class=" text-center font-weight-semibold">
                        <button class="btn btn-warning fa fa-pencil-square-o p-1 fs-17" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#TaskEditModal" title="Edit" wire:click="taskEditView('{{ $searchItem->id }}')"></button>
                        <button class="fa fa-folder-open-o fs-17 btn btn-success p-1" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#TaskListModal" title="view" wire:click="taskDetailsView('{{ $searchItem->id }}')"></button>
                        <button class="btn btn-danger p-1" title="Delete" wire:click.prevent="TaskItemDelete('{{ $searchItem->id }}')" wire:target="TaskItemDelete('{{ $searchItem->id }}')" wire:loading.attr='disabled'>
                          <i class="fe fe-trash-2 fs-13" wire:target="TaskItemDelete('{{ $searchItem->id }}')" wire:loading.class.remove='fe fe-trash-2' wire:loading.class='fa fa-spinner fa-spin'></i>
                        </button>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <h5 class="text-center">There have no result for "{{ $searchTerm }}"</h5>
                @endif
              @elseif(!$taskList->isEmpty())
                @foreach ($taskList as $taskItem)
                  @php
                    $today = date('Y-m-d');
                    if ($taskItem->date > $today) {
                      $buttonText = 'New';
                    }elseif ($today == $taskItem->date) {
                      $buttonText = 'In-process';
                    }elseif ($taskItem->date < $today) {
                      $buttonText = 'Pending';
                    }
                  @endphp
                  <tr class="mt-2 mb-2">
                    <td>{{ $loop->index + 1 }}</td>
                    {{-- <td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td> --}}
                    <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ Auth::user()->profile_image }}" alt="img">{{ $taskItem->title }}</td>
                    <td class="view-message" style="padding-left: 25px;">{{ date('d-m-Y', strtotime($taskItem->date)) }}</td>
                    <td class="view-message">
                      <span class="badge bg-{{ $buttonText == 'New'?'info':($buttonText == 'In-process'?'primary':'warning') }} br-7 p-2">  {{ $buttonText }}</span>
                    </td>
                    <td class=" text-center font-weight-semibold">
                      <button class="btn btn-warning fa fa-pencil-square-o p-1 fs-17" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#TaskEditModal" title="Edit" wire:click="taskEditView('{{ $taskItem->id }}')"></button>
                      <button class="fa fa-folder-open-o fs-17 btn btn-success p-1" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#TaskListModal" title="view" wire:click="taskDetailsView('{{ $taskItem->id }}')"></button>
                      <button class="btn btn-danger p-1" title="Delete" wire:click.prevent="TaskItemDelete('{{ $taskItem->id }}')" wire:target="TaskItemDelete('{{ $taskItem->id }}')" wire:loading.attr='disabled'>
                        <i class="fe fe-trash-2 fs-13" wire:target="TaskItemDelete('{{ $taskItem->id }}')" wire:loading.class.remove='fe fe-trash-2' wire:loading.class='fa fa-spinner fa-spin'></i>
                      </button>
                    </td>
                  </tr>
                @endforeach
              @else
                <h5 class="text-center">There have no new tasks</h5>
              @endif
            </tbody>
          </table>

        </div>
      </div>
    </div>
    @if($searchTerm)
      <div class="text-center mb-3 {{ $paginationPage>count($searchResult)?'d-none':'' }} }}">
        <button class="btn btn-primary w-25" wire:click="loadMore" wire:loading.attr='disabled'>
          <span wire:target='loadMore' wire:loading.class='d-none'>Load More</span>
          <span wire:target='loadMore' wire:loading>Loading...</span>
        </button>
      </div>
    @else
      <div class="text-center mb-3 {{ $paginationPage>count($taskList)?'d-none':'' }}">
        <button class="btn btn-primary w-25" wire:click="loadMore" wire:loading.attr='disabled'>
          <span wire:target='loadMore' wire:loading.class='d-none'>Load More</span>
          <span wire:target='loadMore' wire:loading>Loading...</span>
        </button>
      </div>
    @endif
  </div>

  <!-- View task Modal -->
  @if($taskItemDetails)
    <div class="modal fade" id="TaskListModal" tabindex="-1" aria-labelledby="TaskListModalModalLabel" aria-hidden="true" wire:ignore.self>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="TaskListModalModalLabel">{{ $taskItemDetails->title }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
          </div>
          <div class="modal-body">
            <div>
              <h5 style="margin-bottom: 5px;">Task tittle:</h5>
              {{ $taskItemDetails->title }}
            </div>
            <div class="mt-3">
              <h5 style="margin-bottom: 5px;">Task completing date:</h5>
              {{ $taskItemDetails->date }}
            </div>
            <div class="mt-3">
              <h5 style="margin-bottom: 5px;">Task Description:</h5>
              {{ $taskItemDetails->description }}
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  @else
    <div class="modal fade" id="TaskListModal" tabindex="-1" aria-labelledby="TaskListModalModalLabel" aria-hidden="true" wire:ignore.self>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title placeholder-glow" id="TaskListModalModalLabel"><span class="placeholder"></span></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
          </div>
          <div class="modal-body">
            <h5 class="placeholder-glow">Task tittle:</h5>
            <span class="placeholder"></span>
            <h5 class="placeholder-glow">Task completing date:</h5>
            <span class="placeholder"></span>
            <h5 class="placeholder-glow">Task Description:</h5>
            <span class="placeholder"></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  @endif
  <!--End view task modal-->

  <!-- View task edit Modal -->
  @if($taskEditItemDetails)
    <div class="modal fade" id="TaskEditModal" tabindex="-1" aria-labelledby="TaskEditModalModalLabel" aria-hidden="true" wire:ignore.self>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="TaskEditModalModalLabel">{{ $taskEditItemDetails->title }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
          </div>
          <div class="modal-body">
            <div>
              <h5 style="margin-bottom: 5px;">Task tittle:</h5>
              <input type="text" wire:model.defer='TaskEditTitle' class="form-control" value="{{ $TaskEditTitle }}">
            </div>
            <div class="mt-3">
              <h5 style="margin-bottom: 5px;">Task completing date:</h5>
              <input type="date" wire:model.defer="TaskEditDate" value="{{ $TaskEditDate }}" id="" class="form-control">
            </div>
            <div class="mt-3">
              <h5 style="margin-bottom: 5px;">Task Description:</h5>
              <textarea id="description" rows="2" class="form-control @error('description') is-invalid @enderror" wire:model.defer='TaskEditDescription' value="{{ $TaskEditDescription }}"></textarea>
              {{-- @error('descrition')
                <small class="text-danger invalid-feedback">{{ $message }}</small>
              @enderror --}}
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" wire:click="taskEditSave('{{ $taskEditItemDetails->id }}')" wire:loading.attr='disabled'>
              <span wire:target='taskEditSave' wire:loading.class='d-none'>Save</span>
              <span wire:target='taskEditSave' wire:loading>Saving..</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  @else
    <div class="modal fade" id="TaskEditModal" tabindex="-1" aria-labelledby="TaskEditModalModalLabel" aria-hidden="true" wire:ignore.self>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title placeholder-glow" id="TaskEditModalModalLabel"><span class="placeholder"></span></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
          </div>
          <div class="modal-body">
            <h5 class="placeholder-glow">Task tittle:</h5>
            <span class="placeholder"></span>
            <h5 class="placeholder-glow">Task completing date:</h5>
            <span class="placeholder"></span>
            <h5 class="placeholder-glow">Task Description:</h5>
            <span class="placeholder"></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  @endif
  <!--End view task edit modal-->

  <!--end inbox area-->

  <!--Task Modal-->
  <div class="modal fade" id="taskModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="taskModalBackdrop" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add a new task</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
        </div>
        <div class="modal-body">
          <!--Date time picker-->
          <label for="title">Add task title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.defer='title'>
          @error('title')
            <small class="text-danger invalid-feedback">{{ $message }}</small>
          @enderror
          <label for="date" class="mt-2">Task date</label>
          <input type="date" id="date" class="form-control @error('date') is-invalid @enderror" wire:model.defer="date">
          @error('date')
            <small class="text-danger invalid-feedback">{{ $message }}</small>
          @enderror
          <label for="description" class="mt-2">Task description</label>
          <textarea id="description" rows="2" class="form-control @error('description') is-invalid @enderror" wire:model.defer='description'></textarea>
          @error('descrition')
            <small class="text-danger invalid-feedback">{{ $message }}</small>
          @enderror
          <!--End date time picker-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:loading.attr='disabled' wire:click="saveTask">
            <span wire:target='saveTask' wire:loading.class='d-none'>Save</span>
            <span wire:target='saveTask' wire:loading>Saving..</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--end modal-->
</div>
