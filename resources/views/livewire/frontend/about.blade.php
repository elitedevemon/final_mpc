<div>
  <!-- title -->
  <x-slot name="title">About|MPC Method</x-slot>

  <!--styles-->
  <x-slot name="styles">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('superadmin/assets/css/dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('superadmin/assets/css/skin-modes.css') }}" rel="stylesheet" />
    <link href="{{ asset('superadmin/assets/css/animated.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('assets/style.css') }}">
  </x-slot>

  <!--Scripts-->
  <x-slot name="scripts">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script> --}}<!--custom js-->
      <script src="{{ asset('superadmin/assets/js/custom.js') }}"></script>
  </x-slot>

  <x-slot name="sessionTimeOut"></x-slot>

  {{-- Main section start --}}
  @livewire('frontend.pages.welcome.header')
  {{-- Download the app --}}
  @if (!Auth::check())
    @livewire('frontend.pages.welcome.download-app')
  @endif
  <div class="d-flex justify-content-center">
    <div class="col-11">
        <h2 class="text-center about_section_after_line py-3">Purpose and Objectives of Study</h2>
        <p class="text-center" style="font-size: 18pt">The purpose of this study was to develop a website for Murad Private Center in order to solve its above mentioned challenges. In addition, the study explored the perspectives of MPC high officials about the content of this website and discussed the possible suggestions to finance such a website in the long run.</p>
        <h4 class="text-danger">Objectives of Study were</h4>
        <ol style="font-size: 15pt">
            <li>To find what problems have resulted from the absence of a website in Murad Private Center</li>
            <li>To identify what needs for a website were identified by current teachers and senior
                officials at MPC.</li>
            <li>To discover what information and characteristics should be presented in the website.</li>
            <li>To find the role, benefits, and characteristics of a quality website for an institution in the
                light of literature and the ideas of Murad Private Center officials.</li>
            <li>To develop a comprehensive website for MPC based on the ideas and requirements of
                MPC stakeholders</li>
        </ol>
        <h4 class="pt-2 text-danger">Significance of the Study</h4>
        <p style="text-align: justify; font-size: 15pt">
            The last two decades of wars not only destroyed the infrastructure of Bangladesh but
            also kept its people from knowing about changes that occurred in technology and education. The
            country must use new and contemporary technology in its schools and universities in order to
            catch up with world’s institutions. Our institutions cannot compete with other (external)
            institutions if we still use our old and traditional methods and instruments in our classes.
            Besides the achievements that Murad Private center and MH teaching Method has made in the last couple of
            years, it has not attracted many donors’ attention as the other educational institution(such as Mahfuz Ahmed Murad
        </p>
        <p style="font-size: 15pt;">
            There could be many factors exist which hindered Mpc from making partnerships with
            other Organization  particularly with external educational. One of the factors which might not
            allow MPC to build strong relationships and partnerships with other educationa institutions could be the
            lack of having a website. In fact, website is a tool through which each institution or company can
            introduce itself to the rest of the world. It is a nice tool for attracting donors (particularly small
            donors), and making partnerships with other Organization.
        </p>
        <p style="font-size: 15pt;">
            Website allows donors to review the
            programs and needs of an institution or faculty posted on its website and offer assistance to the
            institution. If donors or the other universities do not know about the programs and needs of an
            institution, then how can they help the institution or make partnership? Although they can get
            information about an institution from another source like from the ministry of education and
            higher education or any other governmental office, it is much easier for them to take their
            intended information from the website
        </p>
        <p style="font-size: 15pt;">
            Website is one tool that provides sufficient information
            about an institution, and it bridges gaps among institutions. It globalizes institutions and let
            institutions help each other in different areas.
        </p>
        <p style="font-size: 15pt;">
            Murad Private Center could have had a website couple of years ago, but due to not
            having a budget for supporting website it could not own a website. Murad Private Center to provide better opportunity for the university lecturers to update their
            teaching materials through the website.
        </p>
        <h4 class="pt-2 text-danger">The study was limited to the following aspects of Murad Private Center website:</h4>
        <p style="font-size: 15pt;">
            MPC Stakeholders’ Views about the Website
            I explored the perspectives of Murad Private Center officials,teacher and
            students about the role and importance of the website for the organization. The main aim of
            exploring their perspectives was to find out whether MPC needs to have a website or not, and if
            yes then what information and characteristics the website should have in order to meet the need
            of organization teachers, administrators and students. Also, I was interested in the kinds of
            problems which resulted from the absence of a website in MPC.
        </p>
        <div class="d-flex justify-content-center">
            <div class="col-12 col-md-6">
                <div class="text-center pb-1">
                    <img src="{{ url('images/Murad.png') }}" style="width: 200px; height: 200px; border-radius: 50%; border: 1px solid blue;">
                </div>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>Name</th>
                        <td>Mahfuz Ahmed Murad</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>Khoksa Thanapara,kushtia,khulna, Bangladesh</td>
                    </tr>
                    <tr>
                        <th>Primary Education</th>
                        <td>Khoksa Janipur Gov. primary School</td>
                    </tr>
                    <tr>
                        <th>Higher Education</th>
                        <td>Khoksa Janipur Pilot High School</td>
                    </tr>
                    <tr>
                        <th>BSS</th>
                        <td>Dhaka Bangla Collage</td>
                    </tr>
                    <tr>
                        <th>MSS</th>
                        <td>Dhaka Bangla Collage  (English, Political Seience)</td>
                    </tr>
                </table>
            </div>
            {{-- <h4>Name: </h4>
            <h5>Address: .</h5>
            <h5>primary Education : .</h5>
            <h5>Higher Education : - .</h5>
            <h5>Collage Education : khoksa Grverment collage Khoksa</h5>
            <h5>BSS: </h5>
            <h5>MSS :- </h5> --}}
        </div>
    </div>
  </div>
  @livewire('frontend.pages.welcome.footer')
</div>
@push('js')
  <script>
    $(document).ready(function(){
      $('#liveToast').toast('show');
    });
  </script>
@endpush
