<div>
  <div class="app-content main-content">
    <div class="side-app">

      <!--Page header-->
      <div class="page-header">
          <div class="page-leftheader">
              <h4 class="page-title mb-0 text-primary">Upload Blog Video</h4>
          </div>
      </div>
      <!--End Page header-->

      <!-- Main content here-->
      {{-- video saved successfuly --}}
      @if (Session::has('videoSaved'))
        <div class="d-flex justify-content-center">
          <div class="alert alert-primary alert-dismissable show fade text-center w-50" role="alert">{{ session()->get('videoSaved') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
          </div>
        </div>
      @endif
      {{-- video already saved --}}
      @if (Session::has('alreadySaved'))
        <div class="d-flex justify-content-center">
          <div class="alert alert-danger alert-dismissable show fade text-center w-50" role="alert"><strong>{{ session()->get('alreadySaved') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
          </div>
        </div>
      @endif
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Enter your youtube video url" wire:model.defer='youtubeUrl'>
        <button class="btn btn-info" wire:loading.attr='disabled' wire:click='showPreview'>Preview <i class="fa fa-spinner fa-spin" wire:loading wire:target='showPreview'></i></button>
        <button class="btn btn-success {{ $videoDetails?'':'d-none' }}" wire:loading.attr='disabled' wire:click="saveVideo()">Save <i class="fa fa-spinner fa-spin" wire:loading wire:target='saveVideo'></i></button>
      </div>
      {{-- YouTube iframe video section --}}
      @if($videoDetails)
        <div class="d-flex justify-content-center">
          <iframe class="video-height mt-3 {{ $embedCode?'':'d-none' }}" src="https://www.youtube.com/embed/{{ $embedCode }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        {{-- Video info section --}}
        <div class="container mt-3">
          <div class="table-reponsive">
            <table class="table table-striped table-hover table-bordered">
              {{-- title section --}}
              <tr>
                <th class="fw-bold">Title</th>
                <td>{{ $videoDetails['snippet']['title'] }}</td>
              </tr>
              {{-- channel name section --}}
              <tr>
                <th class="fw-bold">Channel</th>
                <td>{{ $videoDetails['snippet']['channelTitle'] }}</td>
              </tr>
              {{-- Video published date --}}
              <tr>
                <th class="fw-bold">Published</th>
                <td>{{ date('d M Y, h:i A', strtotime($videoDetails['snippet']['publishedAt'])) }}</td>
              </tr>
              {{-- Video short description --}}
              <tr>
                <th class="fw-bold">Description</th>
                <td>{{ $videoDetails['snippet']['description']?Str::words($videoDetails['snippet']['description'], 100, '...'):'null' }}</td>
              </tr>
              {{-- Video related tags --}}
              {{-- <tr>
                <th class="fw-bold">Tags</th>
                <td>
                  @if(!($videoDetails['snippet']['tags'])->isEmpty())
                    @foreach ($videoDetails['snippet']['tags'] as $tags)
                      {{ $loop->index+1 }}. {{ $tags }}
                    @endforeach
                  @else
                    {{ 'null' }}
                  @endif
                </td>
              </tr> --}}
            </table>
          </div>
        </div>
      @endif
      <!-- Main content end here-->

    </div>
  </div>
</div>
