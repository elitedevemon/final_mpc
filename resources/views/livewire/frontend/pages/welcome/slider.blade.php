<div>
  <!--Carousel Area-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top: 0px; padding-top:0px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 4"></button>
  </div>
  @php
      $slider_photos = DB::table('sliders')->orderBy('id', 'DESC')->paginate(3)
  @endphp
  <div class="carousel-inner">
    @foreach ($slider_photos as $photo)
      <div class="carousel-item @if($loop->first) active @endif">
        <img src="{{ asset('images/slider-images') }}/{{ $photo->slider_photo }}" class="d-block w-100 carousel_image" alt="..." style="width: 100vw;">
      </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--End Carousel-->
</div>
