@if (Session::has('err_message'))
  <script>
    swal("Sorry..!", "{!! Session::get('err_message') !!}", "error", {
        button:"OK",
    })
  </script>
@endif