<div>
  @php
    $people_profile_info = DB::table('people_says')->orderBy('id', 'DESC')->get();
@endphp
<div class="container">
  <div class="pt-5 pb-4">
    <h1 class="section-header"><b>People Says About Us</b></h1>
    <p class="text-muted text-center">If you have any advice about our blog, website or videos, please let us know by your valuable feedback. We are always ready at your service. Your satisfaction is our success. So stay with us and make us motivated to help you. Thank you.</p>
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach ($people_profile_info as $people_p_info)
        <div class="carousel-item @if($loop->first) active @endif">
          <div class="row">
            <div class="col-md-3 offset-md-1 text-md-end text-center">
              <img src="{{ asset('images/media_images') }}/{{ $people_p_info->profile }}" alt="" style="width: 150px; height:
              150px; border-radius: 50%;" class="">
            </div>
            <div class="col-md-6  pt-2 text-center text-md-start">
              <p>{{ $people_p_info->comment }}</p>
              <h5>{{ $people_p_info->name }}</h5>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
</div>
