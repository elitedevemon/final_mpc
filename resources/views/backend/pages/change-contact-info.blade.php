@extends('layouts.backend-master')
@section('title', 'Change Contact Information')
@section('backend-content')
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        @include('backend.partials.container.partials.app-header')
        @include('backend.partials.container.partials.ui-theme-settings')
        <div class="app-main">
            @include('backend.partials.container.partials.app-sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-display1 icon-gradient bg-premium-dark"></i>
                                </div>
                                <div>Update Your Contact Informations
                                    <div class="page-title-subheading">Your Email, Phone Number and Address will be updated.</div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">contact informations</h5>
                            <form action="{{ route('update.contact.info') }}" method="post">
                              @csrf
                              <div>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text">Email</span>
                                      </div>
                                      <input type="text" name="email" value="{{ $contact_info->email }}" class="form-control">
                                  </div>
                                  <br>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text">Phone Number</span>
                                      </div>
                                      <input type="text" name="phone" value="{{ $contact_info->phone }}" class="form-control">
                                  </div>
                                  <br>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Address</span>
                                    </div>
                                    <textarea name="address" id="" cols="30" rows="2" class="form-control">{{ $contact_info->address }}</textarea>
                                </div>
                                <div class="text-end mt-2">
                                  <button type="submit" class="btn btn-primary block-page-btn-example-1">Save</button>
                                </div>
                              </div>
                          </form>
                            
                        </div>
                    </div>
                </div>
                @include('backend.partials.container.partials.app-footer')
              </div>
        </div>
    </div>
    @include('backend.partials.drawer.app-drawer')
    <div class="app-drawer-overlay d-none animated fadeIn"></div>
@endsection