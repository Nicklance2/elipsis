@extends('frontend.layout2')


@section('content')
  <div class="page-top-bg">
    <img src="/images/page-top-bg2.png" alt="">
  </div>
  <div class="page-topsection1" style="height: 650px; background: rgba(0, 0, 0, 0.39); position: relative;">
      <div class="" style="position: absolute; bottom: 10px; width: 100%; text-align: center;">
          <h1 style="font-family: 'Tiempos Headline' !important; font-size: 55px; line-height: 73px; color: #fff; text-transform: none;">Our Recent Transactions</h1>
      </div>
  </div>


  <div class="listing-section">
    <div class="container">
      @for ($i = 0; $i < 20; $i++)
      <div class="listing">
        <img src="/images/recent-transactions/t1.jpg" alt="">
        <p style="border-bottom: 1px solid #3b3b3b; padding-top: 20px;">6 Kirkland Place, Unit 6</p>
        <p style="border-bottom: 1px solid #3b3b3b;">Hardvard Square</p>
        <p>5 BD 4.5 BA
        <br>$4,200,000</p>
        <a class="btn-black-lined pull-left" href="#">Learn More</a>
        <div class="clearfix"></div>
      </div>
      @endfor
    </div>
  </div>


@endsection
