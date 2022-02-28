<div>
  @php
    $media_photos = DB::table('media')->orderBy('id', 'DESC')->paginate(4)
@endphp
<div class="container-fluid mt-5">
  <div class="row">
    @foreach ($media_photos as $item)
      <div class="col-md-3" style="padding-left: 0px; padding-right: 0px;">
        <img src="{{ asset('images/media_images') }}/{{ $item->media_photo }}" class="w-100" alt="" style="height: 250px;;">
      </div>
    @endforeach
  </div>
</div>
</div>
