@extends('frontend.layout2')


@section('content')
  <div class="page-top-bg">
    <img src="/images/page-top-bg1.png" alt="">
  </div>
  <div class="page-topsection1" style="height: 650px; background: rgba(0, 0, 0, 0.39); position: relative;">
      <div class="" style="position: absolute; bottom: 10px; width: 100%; text-align: center;">
          <h1 style="font-family: 'Tiempos Headline' !important; font-size: 55px; line-height: 73px; color: #fff; text-transform: none;">Compass's Exclusive Listings</h1>
      </div>
  </div>


  <div class="listing-section">
    <div class="container">
      @for ($i = 0; $i < 20; $i++)
      <div class="listing">
        <img src="/images/listings/listing1.jpg" alt="">
        <span>The Carol Kelly Team Presents:</span>
        <p style="border-bottom: 1px solid #3b3b3b;">89 Upland Road, Unit 2</p>
        <p style="border-bottom: 1px solid #3b3b3b;">Avon Hill</p>
        <p>3 BD | 2 BA | 2061 SF | 2 PARK | 2 DECKS
        <br>$1,295,000</p>
        <a class="btn-black-lined pull-left" href="#">Learn More</a>
        <div class="clearfix"></div>
      </div>
      @endfor
    </div>
  </div>


@endsection
