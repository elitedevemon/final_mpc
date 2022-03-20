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
  <div style="padding: 23px; font-family: tahoma;">
    <h2 class="text-center" style="font-weight: bolder">Privacy Policy</h2>
    <div style="font-size: 20px">
      <p>
        We use your personal data to provide and improve the service. By using the service, you agree to the collection and use of information in accordance with this Privacy Policy.
      </p>
    
      <p>
        Your privacy is very important to us. It is our policy at the MPC Method service to respect your privacy regarding any information we may collect from you through our website <a href="https://www.mpcmethod.com">https://www.mpcmethod.com</a>, our email and our social media handles, including Instagram, Facebook, Twitter & LinkedIn. 
      </p>
      
      <p>
        We only ask for personal information when we truly need it to provide a service to you. We collect it by fair and lawful means, with your knowledge and consent. We also let you know why we’re collecting it and how it will be used.
      </p>
      
      <p>
        We only retain collected information for as long as necessary to provide you with your requested service. What data we store, we’ll protect within commercially acceptable means to prevent loss and theft, as well as unauthorised access, disclosure, copying, use or modification.
      </p>

      <p>
        We will never intentionally disclose any personally identifying information about you to third parties, except when we in good faith believe such disclosure is absolutely necessary to comply with the law or enforce our Terms of Use. By using our website, you signify your acceptance of our Privacy Policy. If you do not agree with this Privacy Policy, in whole or part, please refrain from using this website.
      </p>
      
      <p>
        Our website may link to external sites that are not operated by us. Please be aware that we have no control over the content and practises of these sites, and cannot accept responsibility or liability for their respective privacy policies.
      </p>

      <p>
        You are free to refuse our request for your personal information, with the understanding that we may be unable to provide you with some of your desired services.​
      </p>

      <p>
        Your continued use of our service will be regarded as acceptance of our practises around privacy and personal information. If you have any questions about how we handle user data and personal information, feel free to contact us.
      </p>

      <h4 style="color: black; font-weight: bolder">Changes to this Privacy Policy:</h4>
      <p>
        We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.
      </p>
      <p>
        We will let you know via email and/or a prominent notice on our service, prior to the change becoming effective and update the "Last updated" date at the bottom of this Privacy Policy.
      </p>
      <p>
        You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.
      </p>
      <h4 style="color: black; font-weight: bolder">Contact Us:</h4>
      <p>
        If you have any questions about this Privacy Policy, you can contact us:
      </p>
      <a href="mailto: muradprivatecenter@gmail.com" style="color: rgb(66,133,244); text-decoration: none; font-weight: bold">muradprivatecenter@gmail.com</a><br>
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
