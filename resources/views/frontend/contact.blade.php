@extends('frontend.layout2')


@section('content')
  <div class="page-top-bg">
    <img src="/images/page-top-bg3.png" alt="">
  </div>
  <div class="page-topsection1" style="height: 650px; background: rgba(0, 0, 0, 0.39); position: relative;">
      <div class="" style="position: absolute; bottom: 10px; width: 100%; text-align: center;">
          <h1 style="font-family: 'Tiempos Headline' !important; font-size: 55px; line-height: 73px; color: #fff; text-transform: none;">Contact</h1>
      </div>
  </div>


  <div class="contact-section">
    <div class="container" style="max-width: 780px;">
      <h1>Let's Get In Touch</h1>
      <form class="" action="index.html" method="post">
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subject">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="3" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="call-to-action-btn-1" style="margin-top: 40px;">Send Message</button>
      </form>
    </div>
  </div>


@endsection
