<div>
  <div class="app-content main-content">
    <div class="side-app">
      @if($draftId)
        @livewire('backend.teacher.create.edit-drafted-post', ['draftId' => $draftId])
      @else
        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title mb-0 text-primary">All Drafted Posts</h4>
            </div>
        </div>
        <!--End Page header-->
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <th style="width:5%">SI</th>
              <th style="width:30%">Title</th>
              <th style="width:45%">Short description</th>
              <th style="width:20%">Action</th>
            </thead>
            <tbody>
              @foreach ($draftedPosts as $post)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ Str::words($post->title, 5, '...') }}</td>
                  <td>{{ Str::words($post->short_desc, 10, '...') }}</td>
                  <td>
                    <button class="btn btn-primary" wire:click="editDraftPost({{ $post->id }})" wire:loading.attr='disabled' wire:target="editDraftPost({{ $post->id }})">Edit <i class="fa fa-spinner fa-spin" wire:loading wire:target="editDraftPost({{ $post->id }})"></i></button>

                    <button class="btn btn-danger" wire:click="deleteDraftPost({{ $post->id }})" wire:loading.attr='disabled' wire:target="deleteDraftPost({{ $post->id }})">Delete <i class="fa fa-spinner fa-spin" wire:loading wire:target="deleteDraftPost({{ $post->id }})"></i></button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{ $draftedPosts->links() }}
        </div>
      @endif
    </div>
  </div>
</div>
