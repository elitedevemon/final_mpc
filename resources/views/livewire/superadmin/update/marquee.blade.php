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
                        <h4 class="mb-sm-0 font-size-18">Update Marquee Text</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Update</a></li>
                                <li class="breadcrumb-item active">Marquee Text</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!--Start content here-->
            @if (Session::has('success'))
              <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            <form action="{{ route('update.marquee.text', app()->getLocale()) }}"method="post">
              @csrf
              <textarea id="mytextarea" name="edited_text" class="form-control">{{ $marqueeText->text }}</textarea>
              <input type="submit" value="Save" class="btn btn-primary mt-2">
            </form>
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
