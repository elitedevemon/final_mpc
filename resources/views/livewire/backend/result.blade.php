<div>
  <div class="app-content main-content">
    <div class="side-app">
      @if ($resultId)
          @livewire('backend.exam.view-result', ['resultId'=>$resultId])
      @elseif(!$allResult->isEmpty())
        <!--Page header-->
        <div class="page-header">
          <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">All Results</h4>
          </div>
        </div>
        <!--End Page header-->
    
        <div class="card">
          <div class="card-body">
            <div class="table-responsive-sm">
              @error('notPublished')
                <h5 class="text-center text-danger">{{ $message }}</h5>
              @enderror
              <table class="table table-bordered text-nowrap text-center">
                <thead>
                  <tr>
                    <th class="wd-15p border-bottom-0">SI</th>
                    <th class="wd-15p border-bottom-0">Topics</th>
                    <th class="wd-20p border-bottom-0">Date</th>
                    <th class="wd-15p border-bottom-0">Marks</th>
                    <th class="wd-15p border-bottom-0">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($allResult as $result)
                  <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $result->getTopic->name }}</td>
                    <td>{{ $result->getTopic->date }}</td>
                    <td>{{ $result->result }}</td>
                    <td>
                      <button class="btn btn-primary" wire:click='viewResult({{ $result->id }})' wire:loading.attr='disabled'>View Result <i class="fa fa-spinner fa-spin" wire:loading wire:target='viewResult({{ $result->id }})'></i></button>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      @else
        <div class="card">
          <div class="card-body">
            <h5 class="text-center">No data found..!!</h5>
          </div>
        </div>
      @endif
    </div>
  </div>
</div>
