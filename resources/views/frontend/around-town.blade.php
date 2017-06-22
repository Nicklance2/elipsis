@extends('frontend.layout2')


@section('content')
  <div class="page-top-bg">
    <img src="/images/page-top-bg6.png" alt="">
  </div>
  <div class="page-topsection1" style="height: 650px; background: rgba(0, 0, 0, 0.39); position: relative;">
      <div class="" style="position: absolute; bottom: 10px; width: 100%; text-align: center;">
          <h1 style="font-family: 'Tiempos Headline' !important; font-size: 55px; line-height: 73px; color: #fff; text-transform: none;">Around Town</h1>
      </div>
  </div>


<div class="at-section padding-vertical-100 bg-white">
  <div class="container">
    <div class="text-center" style="margin-bottom: 80px;">
      <label style="font-size: 16px; padding-bottom: 10px; font-weight: bold; font-family: 'Harmonia Sans Pro'!important;">Subscribe to our mailing list</label>
      <form class="form-inline">
        <div class="form-group">
         <input type="email" class="form-control" id="exampleInputEmail2" placeholder="email address" style="width: 350px; border-radius: 0px;">
       </div>
       <button type="submit" class="btn btn-black" style="border-radius: 0px; padding-left: 20px; padding-right: 20px;">Subscribe</button>
      </form>
    </div>

    @for ($i = 0; $i < 10; $i++)
    <div class="at-post">
      <div class="calendar-box">
        <div class="text-center">
          <span class="cal-num">10</span>
        </div>
        <div class="text-center">
          <span class="cal-month">APR</span>
        </div>
      </div>
      <h3>89 Upland Road #2, Cambridge | New Listing!</h3>
      <div class="at-post-content">
        <p><br>In the picturesque Avon Hill neighborhood, you will love this expansive duplex condominium with 3 bedrooms,
          2 baths and more than 2,000 square feet of living space. Its contemporary open floor plan, combined with classic
          features, is sure to satisfy the lifestyle needs of today's buyers. On the first floor of the condo you have an open
          living room/dining room/kitchen with direct access to a deck for al fresco dining. Two bedrooms and a full bath with
          stack washer/dryer complete this floor’s layout. The dramatic master suite on the upper level is light-filled and airy,
          with a sky-lit shower bath and glass door access to another deck. Soaring ceilings and multiple skylights invite extra
          light in the daytime and starry skies at night. In addition there is a city yard, central AC; two tandem off-street
          parking spaces and basement storage. Enjoy living in this vibrant location near shops, restaurants, parks, the Porter
          Red Line T and commuter rail. This home is a rare offering. $1,295,000. </p>
          <ul>
            <li>3 BED</li>
            <li>2 BATH</li>
            <li>2061 SF</li>
            <li>2 PARKING</li>
            <li>2 PRIVATE DECKS</li>
            <li>BASEMENT STORAGE</li>
            <li>CONDO FEE: $200 - covers Master Insurance and reserve fund</li>
          </ul>
          <p>Contact The Carol Kelly Team for more info!</p>
          <a href="#" class="btn-black-big hover2 read-more">Read More</a>
        </div>
        <p class="date-posted">Posted on 04/10/2017 at 12:36:00 PM</p>
    </div>
    @endfor

  </div>
</div>






@endsection
