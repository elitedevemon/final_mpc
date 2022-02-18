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
                        <h4 class="mb-sm-0 font-size-18">Approve Blog Post</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Create</a></li>
                                <li class="breadcrumb-item active">Blog Post</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!--Start content here-->
              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <thead>
                    <th>SI</th>
                    <th>Title</th>
                    <th>Short description</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                    @foreach ($inProcessPost as $post)
                      <tr>
                        <td style="width: 5%">{{ $loop->index+1 }}</td>
                        <td style="width: 25%">{{ Str::words($post->title, 7, '...') }}</td>
                        <td style="width: 45%">{{ Str::words($post->short_desc, 15, '...') }}</td>
                        <td style="width: 25%">
                          <button class="btn btn-primary">View</button>
                          <button class="btn btn-success" wire:click="approvePost('{{ $post->id }}')" wire:loading.attr='disabled' wire:target="approvePost('{{ $post->id }}')">Approve <i class="fa fa-spinner fa-spin" wire:loading wire:target="approvePost('{{ $post->id }}')"></i></button>
                          <button type="button" class="btn btn-danger" wire:click="showRejectModal({{ $post->id }})" wire:loading.attr='disabled' wire:target="showRejectModal({{ $post->id }})">Reject <i class="fa fa-spinner fa-spin" wire:loading wire:target="showRejectModal({{ $post->id }})"></i></button>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $inProcessPost->links() }}
              </div>
            <!-- end content-->
        </div>
    </div>
  </div>
  {{-- Modal for reject post --}}
  <div class="modal fade" wire:ignore.self id="rejectBlogPost" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="rejectBlogPostLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="rejectBlogPostLabel">Reject the post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="rejectionMail">Write the cause of rejection:</label>
          <textarea id="rejectionMail" rows="5" class="form-control @error('rejectionMail') is-invalid @enderror" wire:model.defer="rejectionMail"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click="rejectPost({{ $postInfo?$postInfo->id:'' }})" wire:loading.attr='disabled'>Send <i class="fa fa-spinner fa-spin" wire:loading wire:target='rejectPost'></i></button>
        </div>
      </div>
    </div>
  </div>
</div>

@push('js')
  <script>
    window.addEventListener('showPostRejectModal', event => {
        $("#rejectBlogPost").modal('show');                
    });
    window.addEventListener('closeRejectModal', event => {
        $('#rejectBlogPost').modal('hide');
    });
  </script>
@endpush
