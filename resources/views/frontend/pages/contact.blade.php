@extends('layouts.master')
@section('title', 'Contact-Us')
@section('main-content')
@livewire('frontend.pages.welcome.header')
  <div class="container contact-form-shadow my-2">
    <div class="row">
        @php
            $contacts = DB::table('contacts')->where('id', '1')->get()
        @endphp
        @foreach ($contacts as $contact)
            <div class="col-md-5 bg-primary py-3 px-3 py-md-5 px-md-5" style="border-radius: 5px 0px 0px 5px">
                <h3 class="text-light">Let's Get Into Touch</h3>
                <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, vitae.</p>
                <div class="d-flex">
                    <div class="col-2 contact-icon"><i class="fas fa-map-marker-alt    "></i></div>
                    <div class="col-10 ps-3 text-light"><span style="font-size: 20px;">Address: </span><span style="color: rgba(236, 228, 228, 0.849)">{{ $contact->address }}</span></div>
                </div>
                <div class="d-flex pt-2">
                    <div class="col-2 contact-icon"><i class="fas fa-phone-alt    "></i></div>
                    <div class="col-10 ps-3 text-light mt-2"><span style="font-size: 20px;">Phone: </span><span style="color: rgba(236, 228, 228, 0.849)">{{ $contact->phone }}</span></div>
                </div>
                <div class="d-flex pt-2">
                    <div class="col-2 contact-icon"><i class="fas fa-paper-plane    "></i></div>
                    <div class="col-10 ps-3 text-light"><span style="font-size: 20px;">Email: </span><span style="color: rgba(236, 228, 228, 0.849)">{{ $contact->email }}</span></div>
                </div>
                <div class="d-flex pt-2">
                    <div class="col-2 contact-icon"><i class="fas fa-globe    "></i></div>
                    <div class="col-10 ps-3 text-light mt-2"><span style="font-size: 20px;">Website: </span><a href="https://www.mpcmethod.com" target="_blank"><span style="color: rgba(236, 228, 228, 0.849)">www.mpcmethod.com</span></a></div>
                </div>
            </div>
        @endforeach
        <div class="col-md-7 bg-light py-3 px-3 py-md-5 px-md-5" style="border-radius: 5px">
            <h3>Get In Touch</h3>
            <form action="/send-email" method="get" class="pt-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">FULL NAME</label>
                        <input type="text" name="full_name" id="" placeholder="Name" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">EMAIL ADDRESS</label>
                        <input type="email" name="email" id="" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="col-12 py-4">
                    <label for="">SUBJECT</label>
                    <input type="text" name="subject" id="" placeholder="Subject" class="form-control">
                </div>
                <div class="col-12">
                    <label for="">MESSAGE</label>
                    <textarea name="message" class="form-control" placeholder="Message" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="col-md-3">
                    <input type="submit" value="SEND MESSAGE" class="btn btn-info w-100 text-light mt-4">
                </div>
            </form>
        </div>
    </div>
</div>
@livewire('frontend.pages.welcome.footer')
@endsection