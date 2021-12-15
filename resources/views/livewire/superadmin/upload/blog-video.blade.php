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
            @error('embed_code')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('yt_title')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @if (Session::has('success'))
              <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            <div class="row">
              <div class="{{ $embed_code?'col-md-10':'col-md-11' }}">
                <input type="text" placeholder="Paste embed code" wire:model.defer="embed_code" class="form-control">
              </div>
              <div class="{{ $embed_code?'col-md-2':'col-md-1' }}">
                <button class="btn btn-primary" wire:click="preview" wire:target="preview" wire:loading.attr="disabled">
                  <span wire:target="preview" wire:loading.class="d-none">Preview</span>
                  <span wire:target="preview" wire:loading>Processing</span>
                </button>
                <button class="btn btn-info {{ $embed_code?'':'d-none' }}" wire:click="upload">
                  <span wire:target="upload" wire:loading.class="d-none">Upload</span>
                  <span wire:target="upload" wire:loading>Uploading</span>
                </button>
              </div>
            </div>
            <input type="text" placeholder="Enter title" class="form-control mt-2 {{ !$embed_code?'d-none':'' }}" wire:model.defer="yt_title">
            @if ($embed_code)
              <iframe class="w-100 mt-2" style="height: 65vh" src="https://www.youtube.com/embed/{{ $embed_code }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @endif
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
</div>
