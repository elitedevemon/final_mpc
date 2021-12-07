@extends('layouts.master')
@section('title', 'Our Services')
@section('main-content')
@include('frontend.partials.header')
<div class="container py-4">
  <h3 class="text-center text-danger">Our Services:</h3>
  <div class="col-md-12 pt-3">
      <div class="row">
          <div class="col-12 col-md-4">
              <div style="font-size: 20px; font-family: lucida bright;">
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">Speaking English Lessons Course</div>
                  </div>
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">English Speaking Basics Course</div>
                  </div>
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">Regular English Lessons Course</div>
                  </div>
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">Business English Lessons Course</div>
                  </div>
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">Interview English Lessons Course</div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-4">
              <div style="font-size: 20px; font-family: lucida bright;">
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">Travel English Lessons Course</div>
                  </div>
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">Idoms and Phrases Course</div>
                  </div>
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">Special Topics Course</div>
                  </div>
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">English Video Lessons Course</div>
                  </div>
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">English Listening Lessons Course</div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-4">
              <div style="font-size: 20px; font-family: lucida bright;">
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">Extra Dictionary Course</div>
                  </div>
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">Extra English Lessons Course</div>
                  </div>
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">Online Examination Course</div>
                  </div>
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">IELTS Course</div>
                  </div>
                  <div class="row">
                      <div class="col-1"><i class="fa fa-check text-info"></i></div>
                      <div class="col-11">Job Exam Course</div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@include('frontend.partials.footer')
@endsection