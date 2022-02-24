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
                        <h4 class="mb-sm-0 font-size-18">Upload Blog Video</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Upload</a></li>
                                <li class="breadcrumb-item active">Blog Video</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!--Start content here-->
            @if(Session::has('videoApproved'))
              <div class="alert alert-success">{{ session()->get('videoApproved') }}</div>
            @endif
            <div class="table-reponsive table-bordered">
              <table class="table table-hover table-striped">
                <thead>
                  <th>SI</th>
                  <th>Title</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach ($inprocessVideos as $video)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ Str::words($video->title, 15, '...') }}</td>
                      <td>
                        {{-- view button --}}
                        <button class="btn btn-primary" wire:click="checkVideo('{{ $video->id }}')" wire:loading.attr='disabled'>View <i class="fa fa-spinner fa-spin" wire:loading wire:target="checkVideo('{{ $video->id }}')"></i></button>
                        {{-- approve button --}}
                        <button class="btn btn-success" wire:click='approveVideoModal({{ $video->id }})' wire:loading.attr='disabled'>Approve <i class="fa fa-spinner fa-spin" wire:loading wire:target='approveVideoModal({{ $video->id }})'></i></button>
                        {{-- reject button --}}
                        <button class="btn btn-danger" wire:click='rejectVideoModal({{ $video->id }})' wire:loading.attr='disabled'>Reject <i class="fa fa-spinner fa-spin" wire:loading wire:target='rejectVideoModal({{ $video->id }})'></i></button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $inprocessVideos->links() }}
            </div>
            <!--End content here-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Minia.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </div>
  <!-- end main content-->


  {{-- Modal section --}}
  <!-- Approve Modal -->
  <div class="modal fade" id="approveVideoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="approveVideoModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <h3 class="text-center fw-bold">Are you sure, want to approve this video?</h3>
          <p>You can check the video from <code>View</code> button. If it is not related any educational video, then you can reject it from <code>Reject</code> button.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Deny</button>
          <button type="button" class="btn btn-primary" wire:click='approveVideo({{ $videoId }})' wire:loading.attr='disabled'>Approve <i class="fa fa-spinner fa-spin" wire:loading wire:target='approveVideo'></i></button>
        </div>
      </div>
    </div>
  </div>

  <!-- Reject Modal -->
  <div class="modal fade" id="rejectVideoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="rejectVideoModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="rejectVideoModalLabel">Reject Video</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="message">Enter reject message:</label>
          <textarea rows="5" class="form-control @error('rejectMessage') is-invalid @enderror" wire:model.defer="rejectMessage"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click='rejectVideo({{ $videoId }})' wire:loading.attr='disabled'>Send <i class="fa fa-spinner fa-spin" wire:loading wire:target='rejectVideo'></i></button>
        </div>
      </div>
    </div>
  </div>

   <!-- Check video Modal -->
   @if($videoToCheck)
    <div class="modal fade" id="checkVideoContent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="checkVideoContentLabel" aria-hidden="true" wire:ignore.self>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="checkVideoContentLabel">Check Video</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <label for="message">{{ $videoToCheck->title }}:</label>
            <iframe class="w-100" height="300px" src="https://www.youtube.com/embed/{{ $videoToCheck->embed_code }}?autoplay=1&mute=1" title="YouTube video player" frameborder="0" autoplay allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
   @endif
</div>

@push('js')
  <script>
    window.addEventListener('rejectVideoModalShow', event=>{
      $('#rejectVideoModal').modal('show');
    });
    window.addEventListener('hideRejectionModal', event=>{
      $('#rejectVideoModal').modal('hide');
    });
    window.addEventListener('showCheckVideoModal', event=>{
      $('#checkVideoContent').modal('show');
    });
    window.addEventListener('showApproveModal', event=>{
      $('#approveVideoModal').modal('show');
    });
    window.addEventListener('hideApproveModal', event=>{
      $('#approveVideoModal').modal('hide');
    })
  </script>
@endpush
