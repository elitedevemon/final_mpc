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
                        <h4 class="mb-sm-0 font-size-18">Drafted Blog Post</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Create</a></li>
                                <li class="breadcrumb-item active">Drafted Blog Post</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!--Start content here-->
            <table class="table table-striped">
              <thead>
                <th>SI</th>
                <th>Title</th>
                <th>Short Description</th>
                <th>Text</th>
                <th>Action</th>
              </thead>
              <tbody>
                @foreach ($posts as $d_post)
                  <tr>
                    <td>{{ ($loop->index)+1 }}</td>
                    <td>{{ Str::words($d_post->title, 10) }}</td>
                    <td>{{ Str::words($d_post->short_desc, 10) }}</td>
                    <td>{{ Str::words($d_post->text, 20) }}</td>
                    <td><a href="{{ route('show.selected.draft.post', ['slug'=> $d_post->slug, 'language'=>app()->getLocale()]) }}" class="btn btn-success">Edit</a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
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
