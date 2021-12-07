<div class="recent-blog">
  <div class="container">
    <h1 class="text-center pt-3 pb-2">
      Recent Blog
    </h1>
    <p class="lead text-center" style="color: black">
      By this section you can get the recent informations of our website which will enrich your knowledge and make you updated. As well as you can get the latest news of our YouTube channels and you can follow these channels <a href="https://www.youtube.com/channel/UCbOSj9fMxp2Wlqcpt3I9dVQ" target="_blank">MH Teaching Method</a> & <a href="https://www.youtube.com/channel/UCQm70LwJPcNN7FeDKeXOHxw" target="_blank">Murad Private Center</a>
    </p>
  </div>
  <div class="container pb-3">
    <div class="row">
      @php
          $recentPost = DB::table('posts')->orderBy('id', 'DESC')->paginate(3)
      @endphp
        @foreach ($recentPost as $rpost)
          <div class="col-md-4 mb-3">
            <img src="{{ asset('images/post_images') }}/{{ $rpost->cover_image }}" class="w-100" alt="" style="height:250px">
            <h3 class="mt-2" style="font-family: 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
              @php
                  echo Str::words($rpost->title, 5, '...');
              @endphp
            </h3>
            <p>
              @php
                  echo Str::words($rpost->text, 35, '...');
              @endphp
            </p>
            <a href="/read/more/{{ $rpost->id }}" class="btn btn-warning">Read More>></a>
          </div>
        @endforeach
    </div>
  </div>
</div>