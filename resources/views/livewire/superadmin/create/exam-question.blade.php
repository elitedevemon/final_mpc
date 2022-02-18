<div>
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">

    <div class="page-content">
      <div class="container-fluid">

          <!-- start page title -->
          <div class="row">
              <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                      <h4 class="mb-sm-0 font-size-18">Create Exam Question</h4>

                      <div class="page-title-right">
                          <ol class="breadcrumb m-0">
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Create</a></li>
                              <li class="breadcrumb-item active">Exam Question</li>
                          </ol>
                      </div>

                  </div>
              </div>
          </div>
          <!-- end page title -->
          <!--Start content here-->
          <h5 class="text-center" wire:target='topicId' wire:loading>Loading <i class="fa fa-spinner fa-spin"></i></h5>
          @if ($topicId)
            @livewire('superadmin.create.exam.selected-topic-view', ['selectedTopicId'=>$topicId])
          @else
            <div style="overflow-x: auto">
              <div class="text-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTopics">Add Topic</button>
              </div>
              <table class="table table-hover table-responsive">
                <thead class="text-center">
                  <th>SI</th>
                  <th>Topic Name</th>
                  <th>Time</th>
                  <th>Exam Date</th>
                  <th>Status</th>
                  <th>Publish Date</th>
                  <th>Publish Status</th>
                  <th>Action</th>
                </thead>
                <tbody class="text-center">
                  @foreach ($topics as $topicItem)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $topicItem->name }}</td>
                      <td>{{ $topicItem->time }}</td>
                      <td>{{ date('d-m-Y', strtotime($topicItem->date)) }}</td>
                      <td><input type="checkbox" {{ $topicItem->status == true ?'checked':'' }} wire:click="publishTopic('{{ $topicItem->id }}')"></td>
                      <td>{{ date('d-m-Y h:i a', strtotime($topicItem->publish_date)) }}</td>
                      <td><input type="checkbox" {{ $topicItem->publish_status == true ?'checked':'' }} wire:click="publishResult('{{ $topicItem->id }}')"></td>
                      <td>
                        {{-- <button class="btn btn-primary">Add</button> --}}
                        <button class="btn btn-info" wire:click="editTopicShow('{{ $topicItem->id }}')" wire:loading.attr='disabled' wire:target="editTopicShow('{{ $topicItem->id }}')">
                          <span wire:target="editTopicShow('{{ $topicItem->id }}')" wire:loading.class='d-none'>Edit</span>
                          <span wire:target="editTopicShow('{{ $topicItem->id }}')" wire:loading>Edit <i class="fa fa-spinner fa-spin" aria-hidden="true"></i></span>
                        </button>
                        <button class="btn btn-danger" wire:click="deleteSelectedTopic({{ $topicItem->id }})" wire:loading.attr='disabled' wire:target="deleteSelectedTopic({{ $topicItem->id }})">Delete <i class="fa fa-spinner fa-spin" wire:loading wire:target="deleteSelectedTopic({{ $topicItem->id }})" aria-hidden="true"></i></button>
                        <button class="btn btn-warning" wire:click="questionView({{ $topicItem->id }})" wire:target="questionView({{ $topicItem->id }})" wire:loading.attr='disabled'>View <i class="fa fa-spinner fa-spin" wire:target='questionView({{ $topicItem->id }})' wire:loading></i></button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          @endif
      </div>
    </div>
  </div>
  <!-- Add topics modal -->
  <div class="modal fade" id="addTopics" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addTopicsLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addTopicsLabel">Add Exam Topic</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="topic">Enter topic name:</label>
          <input type="text" name="" id="topic" placeholder="Enter topic name" class="form-control" wire:model.defer='topicName'>
          <label for="date" class="mt-2">Enter exam date:</label>
          <input type="date" name="date" id="" class="form-control" wire:model.defer='examDate'>
          <label for="time" class="mt-2">Enter exam time:</label>
          <input type="number" name="" id="time" class="form-control" wire:model.defer="examTime">
          <label for="publish_date" class="mt-2">Enter exam publish date:</label>
          <div class="row">
            <div class="col-6">
              <input type="date" name="publish_date" id="publish_date" class="form-control" wire:model.defer='examPublishDate'>
            </div>
            <div class="col-6">
              <input type="time" name="publish_date" id="publish_date" class="form-control" wire:model.defer='examPublishTime'>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click='save' wire:loading.attr='disabled'>
            <span wire:target='save' wire:loading.class='d-none'>Save</span>
            <span wire:target='save' wire:loading>Saving</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- End add topics modal -->


  <!-- Edit topic modal -->
  <div class="modal fade" id="editTopics" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editTopicsLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editTopicsLabel">Edit Topic</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="topic">Enter topic name:</label>
          <input type="text" name="" id="topic" placeholder="Enter topic name" class="form-control @error('editedName') is-invalid @enderror" wire:model="editedName" required>
          <label for="date" class="mt-2">Enter exam date:</label>
          <input type="date" name="date" id="" class="form-control @error('editedDate') is-invalid @enderror" wire:model="editedDate">
          <label for="time" class="mt-2">Enter exam time:</label>
          <input type="text" name="" id="time" class="form-control @error('editedTime') is-invalid @enderror" wire:model="editedTime">
          <label for="publish_date" class="mt-2">Enter exam publish date:</label>
          <div class="row">
            <div class="col-6">
              <input type="date" name="publish_date" id="publish_date" class="form-control" wire:model.defer='editedExamPublishDate'>
            </div>
            <div class="col-6">
              <input type="time" name="publish_date" id="publish_date" class="form-control" wire:model.defer='editedExamPublishTime'>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click="editedTopicSave('{{ $editedTopicId }}')" wire:loading.attr='disabled'>Save <i class="fa fa-spinner fa-spin" wire:loading wire:target='editedTopicSave' aria-hidden="true"></i>
            {{-- <span wire:target='editedTopicSave' wire:loading>Saving</span> --}}
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- End edit topics modal -->
</div>
