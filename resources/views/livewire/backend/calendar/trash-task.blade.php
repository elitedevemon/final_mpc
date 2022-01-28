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
        <div class="text-end mt-0 pt-0">
          <button class="btn btn-danger mt-1 mb-1" wire:click="deleteAllTrash" wire:loading.attr='disabled' {{ $trashTaskList->isEmpty()?'disabled':'' }}>
            <span wire:target='deleteAllTrash' wire:loading.class='d-none'>Empty all trashes</span>
            <span wire:target='deleteAllTrash' wire:loading>Deleting..</span>
          </button>
        </div>
        <div class="table-responsive">
          <table class="table table-hover text-nowrap mb-0">
            <tbody>
              @if ($searchTerm)
                @if(!$searchResult->isEmpty())
                  @foreach ($searchResult as $searchItem)
                    {{-- @php
                      $today = date('Y-m-d');
                      if ($searchItem->date > $today) {
                        $buttonText = 'New';
                      }elseif ($today == $searchItem->date) {
                        $buttonText = 'In-process';
                      }elseif ($searchItem->date < $today) {
                        $buttonText = 'Pending';
                      }
                    @endphp --}}
                    <tr class="mt-2 mb-2">
                      <td>{{ $loop->index + 1 }}</td>
                      {{-- <td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td> --}}
                      <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ Auth::user()->profile_image }}" alt="img">{{ $searchItem->title }}</td>
                      <td class="view-message" style="padding-left: 25px;">{{ date('d-m-Y', strtotime($searchItem->date)) }}</td>
                      <td class="view-message">
                        <span class="badge bg-{{ $buttonText == 'New'?'info':($buttonText == 'In-process'?'primary':'warning') }} br-7 p-2">  {{ $buttonText }}</span>
                      </td>
                      <td class=" text-center font-weight-semibold">
                        <button class="btn btn-primary p-1" title="Restore" wire:click="TaskItemRestore('{{ $searchItem->id }}')" wire:target="TaskItemRestore('{{ $searchItem->id }}')" wire:loading.attr='disabled'>
                          <i class="fa fa-undo fs-13" wire:target="TaskItemRestore('{{ $searchItem->id }}')" wire:loading.class.remove='fe fe-trash-2' wire:loading.class='fa fa-spinner fa-spin'></i>
                        </button>
                        <button class="btn btn-danger p-1" title="Delete" wire:click="TaskItemDelete('{{ $searchItem->id }}')" wire:target="TaskItemDelete('{{ $searchItem->id }}')" wire:loading.attr='disabled'>
                          <i class="fe fe-trash-2 fs-13" wire:target="TaskItemDelete('{{ $searchItem->id }}')" wire:loading.class.remove='fe fe-trash-2' wire:loading.class='fa fa-spinner fa-spin'></i>
                        </button>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <h5 class="text-center">There have no result for "{{ $searchTerm }}"</h5>
                @endif
              @elseif(!$trashTaskList->isEmpty())
                @foreach ($trashTaskList as $taskItem)
                  {{-- @php
                    $today = date('Y-m-d');
                    if ($taskItem->date > $today) {
                      $buttonText = 'New';
                    }elseif ($today == $taskItem->date) {
                      $buttonText = 'In-process';
                    }elseif ($taskItem->date < $today) {
                      $buttonText = 'Pending';
                    }
                  @endphp --}}
                  <tr class="mt-2 mb-2">
                    <td>{{ $loop->index + 1 }}</td>
                    {{-- <td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td> --}}
                    <td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{ Auth::user()->profile_image }}" alt="img">{{ $taskItem->title }}</td>
                    <td class="view-message" style="padding-left: 25px;">{{ date('d-m-Y', strtotime($taskItem->date)) }}</td>
                    {{-- <td class="view-message">
                      <span class="badge bg-{{ $buttonText == 'New'?'info':($buttonText == 'In-process'?'primary':'warning') }} br-7 p-2">  {{ $buttonText }}</span>
                    </td> --}}
                    <td class=" text-center font-weight-semibold">
                      <button class="btn btn-primary p-1" title="Restore" wire:click="TaskItemRestore('{{ $taskItem->id }}')" wire:target="TaskItemRestore('{{ $taskItem->id }}')" wire:loading.attr='disabled'>
                        <i class="fa fa-undo fs-13" wire:target="TaskItemRestore('{{ $taskItem->id }}')" wire:loading.class.remove='fe fe-trash-2' wire:loading.class='fa fa-spinner fa-spin'></i>
                      </button>
                      <button class="btn btn-danger p-1" title="Delete" wire:click="TaskItemDelete('{{ $taskItem->id }}')" wire:target="TaskItemDelete('{{ $taskItem->id }}')" wire:loading.attr='disabled'>
                        <i class="fe fe-trash-2 fs-13" wire:target="TaskItemDelete('{{ $taskItem->id }}')" wire:loading.class.remove='fe fe-trash-2' wire:loading.class='fa fa-spinner fa-spin'></i>
                      </button>
                    </td>
                  </tr>
                @endforeach
              @else
                <h5 class="text-center">There have no deleted task</h5>
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
      <div class="text-center mb-3 {{ $paginationPage>count($trashTaskList)?'d-none':'' }}">
        <button class="btn btn-primary w-25" wire:click="loadMore" wire:loading.attr='disabled'>
          <span wire:target='loadMore' wire:loading.class='d-none'>Load More</span>
          <span wire:target='loadMore' wire:loading>Loading...</span>
        </button>
      </div>
    @endif
  </div>

  <!--end inbox area-->
</div>
