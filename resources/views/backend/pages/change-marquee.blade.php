@extends('layouts.backend-master')
@section('title', 'Change Notification')
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
                                <div>Update Your Notifications
                                    <div class="page-title-subheading">Your Email, Phone Number and Address will be updated.</div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Notifications</h5>
                            <form action="{{ route('update.contact.info') }}" method="post">
                              @csrf
                              <div>
                                  
                                  
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Marquee</span>
                                    </div>
                                    <textarea name="text" id="" cols="30" rows="5" class="form-control">{{ $marquee->text }}</textarea>
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