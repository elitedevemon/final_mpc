<div>
  <!-- title -->
  <x-slot name="title">Contact|MPC Method</x-slot>

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
  <div style="padding: 23px; font-family: tahoma; font-size: 18px;">
    <h2 class="text-center" style="font-weight: bolder">Terms of Use</h2>
    <h4 style="font-weight: bold">1. Terms:</h4>
    
    <p>
      By accessing this website, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law. This website is operated by the MPC Method service. Throughout the site, the terms “we”, “us” and “our” refer to the MPC Method service. “Our service” refers to but is not limited to our website and/or our email addresses and/or our social media handles including, Instagram, Facebook, Twitter & LinkedIn and/or our guidelines. Using the resources of the MPC Method service you can send request profiles of your interest as per our service (website, email and/or our social media) requirements and guidelines. We may also recommend you to rquest with potential profiles, however, this is at your discretion. As a educational service, we reserve the right to make any necessary grammatical adjustments to your profile and/or any further necessary edits as part of the tailored profile service we provide you before your profile is posted on our service. If required, you must annually update your profile as per our service guidelines to enable continuous usage of service.
    </p>
    
    <h4 style="font-weight: bold">2. Use Licence:</h4>
    
    <p>
      Permission is not granted to download or store the materials (information/software) on the MPC Method website. Without our permission you cannot:
    </p>
    
    <ul>
      <li>modify or copy the materials;</li>
      <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
      <li>attempt to decompile or reverse engineer any software contained on the MPC Method website;</li>
      <li>remove any copyright or other proprietary notations from the materials; or</li>
      <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
    </ul>
    
    <p>
      This licence shall automatically terminate if you violate any of these restrictions and may be terminated by the MPC Method service at any time. 
    </p>
    
    <h4 style="font-weight: bold">3. Disclaimer:</h4>
    
    <p>
      a. The materials on this website are provided on an 'as is' basis. We make no warranties, expressed or implied, and hereby disclaim and negate all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.
    </p>
    
    <p>
      b. Further, MPC Method does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on this website or otherwise relating to such materials or on any sites linked to this site.
    </p>
    
    <h4 style="font-weight: bold">4. Limitations:</h4>
    
    <p>
      In no event shall the MPC Method service or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on the MPC Method website, even if we or a MPC Method authorised representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.
    </p>
    
    <h4 style="font-weight: bold">5. Accuracy of Materials:</h4>
    
    <p>
      The materials appearing on the MPC Method website could include technical, typographical, or photographic errors. We may make changes to the materials contained on our website at any time without notice.
    </p>
    
    <h4 style="font-weight: bold">6. Links:</h4>
    
    <p>
      We are not responsible for the contents of any sites linked from our website. The inclusion of any link does not imply endorsement by us of the site. Use of any such linked website is at the user's own risk.
    </p>
    
    <h4 style="font-weight: bold">7. Modifications:</h4>
    
    <p>
      We may revise these terms of service at any time without notice. By using this website you are agreeing to be bound by the current version of these terms of service.
    </p>

    <h4 style="font-weight: bold">8. Misconduct:</h4>
    
    <p>
      We strictly do not tolerate any form of misconduct/abuse towards our team or towards any applicant on our service. Whether this is through our website, email and/or our social media handles including Instagram, Facebook, Twitter and/ or LinkedIn. Misconduct/abuse can include unlawful accusations and/or spam and/or name-calling and/or vulgar language. Any applicant who is found to be violating our applicant code of conduct due to the aforementioned points risks having his/her profile banned permanently and/or immediately from our service. 
    </p>
    
    <h4 style="font-weight: bold">9. Governing Law:</h4>
    
    <p>
      The laws applicable to the interpretation of these Terms of Use shall be the laws of the United Kingdom. If any provision of this agreement shall be unlawful, void, or for any reason unenforceable, then that provision shall be deemed severable from this agreement and shall not affect the validity and enforceability of any remaining provisions. You further submit to the exclusive jurisdiction of the law of the United Kingdom. The governing law does not impact your rights as a consumer according to the consumer protection laws and regulations of your country of residence. 
    </p>
    {{-- <br> --}}
    {{-- <i>Last updated: 18/01/2022</i> --}}
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
