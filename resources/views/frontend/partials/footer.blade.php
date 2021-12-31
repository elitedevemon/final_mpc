<!--Start footer area-->
<footer>
  <div class="container-fluid bg-dark text-light mt-md-1 overflow-hidden">
      <div class="container py-5">
        <div class="col-md-12">
          <div class="row">
              @php
                  $contact = DB::table('contacts')->where('id', '1')->first()
              @endphp
              <div class="col-md-3">
                <h3 class="pb-4 text-light">Have a Questions?</h3>
                <div class="d-flex">
                  <div class="col-1"><i class="fas fa-map-marker-alt    "></i></div>
                  <div class="col-11 ps-3 ps-md-4">
                      @if (empty($contact))

                      @else
                        {{ $contact->address }}
                      @endif
                  </div>
                </div>
                <div class="d-flex my-4">
                  <div class="col-1"><i class="fas fa-phone-alt    "></i></div>
                  <div class="col-11 ps-3 ps-md-4"><a href="tel: @if (empty($contact)) @else {{ $contact->phone }} @endif" class="text-light">
                    @if (empty($contact))

                    @else
                        {{ $contact->phone }}
                    @endif
                </a></div>
                </div>
                <div class="d-flex">
                  <div class="col-1"><i class="fas fa-envelope    "></i></div>
                  <div class="col-11 ps-3 ps-md-4"><a href="mailto:@if (empty($contact)) @else {{ $contact->email}} @endif" class="text-light text-truncate">
                    @if (empty($contact))

                    @else
                        {{ $contact->email }}
                    @endif
                </a></div>
                </div>
              </div>
              <div class="col-md-3">
                <h3 class="pb-4 pt-5 pt-md-0 text-light">Recent Blog</h3>
                @php
                    $all_posts = DB::table('posts')->orderBy('id', 'DESC')->paginate(3);
                @endphp
                @foreach ($all_posts as $rbpost)
                  <div class="d-flex mb-1">
                    <div class="col-3 mt-1"><img src="{{ asset('images/post_images') }}/{{ $rbpost->cover_image }}" alt="" style="height: 75px; width: 70px;"></div>
                    <div class="col-9 ps-3 ps-md-4">
                      <div class="footer_recent_blog">{{ Str::words($rbpost->short_desc, 10) }}</div>
                      <div><i class="far fa-calendar-alt"></i> <span>{{ date('d/m/Y', strtotime($rbpost->created_at)) }}</span></div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="col-md-3 ps-md-5">
                <h3 class="pb-4 pt-5 pt-md-0 text-light">Links</h3>
                <div>-><a class="text-light" href="/">Home</a></div>
                <div>-><a class="text-light" href="/about">About</a></div>
                <div>-><a class="text-light" href="/services">Services</a></div>
                <div>-><a class="text-light" href="/blog">Blog</a></div>
                <div>-><a class="text-light" href="/videos">Videos</a></div>
                <div>-><a class="text-light" href="/contact">Contact</a></div>
                <div>-><a class="text-light" href="/community">Community</a></div>
              </div>
              <div class="col-md-3">
                <form action="/subscribe" method="get">
                  <h3 class="pb-4 pt-5 pt-md-0 text-light">Subscribe Us!</h3>
                  <input type="text" name="subscribe" class="form-control" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="btn btn-info w-100 mt-2 fw-bold text-light">
                </form>
                <h3 class="pt-5 text-light">Connect with us</h3>
                <div class="d-flex">
                  <div class="social-icon"><a class="text-light" target="_blank" href="{{$contact->facebook}}"><i class="fab fa-facebook    "></i></a></div>
                  <div class="social-icon mx-2"><a class="text-light" target="_blank" href="{{ $contact->twitter }}"><i class="fab fa-twitter" aria-hidden="true"></i></a></div>
                  <div class="social-icon"><a class="text-light" target="_blank" href="{{ $contact->instagram }}"><i class="fab fa-instagram    "></i></a></div>
                  <div class="social-icon mx-2"><a class="text-light" target="_blank" href="{{ $contact->linkedin }}"><i class="fab fa-linkedin    "></i></a></div>
  
                  <div class="social-icon me-2"><a class="text-light" target="_blank" href="{{ $contact->youtube_1 }}"><i class="fab fa-youtube    "></i></a></div>
                  <div class="social-icon"><a class="text-light" target="_blank" href="{{ $contact->youtube_2 }}"><i class="fab fa-youtube    "></i></a></div>
                </div>
              </div>
            </div>
        </div>
      </div>
  </div>
  </footer>