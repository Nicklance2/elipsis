@extends('frontend.layout2')


@section('content')
  <div class="page-top-bg">
    <img src="/images/page-top-bg5.jpg" alt="">
  </div>
  <div class="page-topsection1" style="height: 650px; background: rgba(0, 0, 0, 0.39); position: relative;">
      <div class="" style="position: absolute; bottom: 10px; width: 100%; text-align: center;">
          <h1 style="font-family: 'Tiempos Headline' !important; font-size: 55px; line-height: 73px; color: #fff; text-transform: none;">Buying your Home : Our Plan</h1>
      </div>
  </div>
  <div class="selling-section1 bg-white">
    <div class="container">
      <div class'clearfix'></div>
      <div class="text-center">
        <a href="#" class="btn-black-big" style="margin-bottom: 100px;">Download our Timeline Graphic</a>
      </div>
      <div class'clearfix'></div>
      <img src="/images/pict5.jpg" alt="" align="right" width="439"  style="margin-left: 40px;">
      <h1>Step One</h1>
      <h3>Outlining Your Objectives</h3>
      <p>Tell us your wish-list, non-negotiables and timeline
      </p>
      <h3>Planning and Preparation</h3>
      <p>- Demystifying the home buying process and positioning you for success in this competitive marketplace<br>- Refining your price range<br>- Having proof of funds documentation or finding the right lender for you and obtaining pre-approval letter<br>- Sign exclusive buyer-broker agreement</p>

      <h3>Helping You Understand the Market</h3>
      <p>- Providing an up-to-date analysis of active, pending and sold transactions with timely updates<br>- Market forces; supply versus demand, macro versus micro</p>

      <div class'clearfix'></div>
      <a href="#" class="btn-black-big">Learn More</a>
    </div>
  </div>

  <div class="buying-section2">
    <div class="tint-wrap">
      <div class="container">
        <div class="col-sm-5">

        </div>
        <div class="col-sm-7">
          <h1>Step Two</h1>
          <h3>Finding Your Dream Home</h3>
          <p>
            - Browse and review online listings that we send you <br>
            - Notification of new and off-market properties<br>
            - Review weekly open-house schedule that we provide you<br>
            - Attend open houses<br>
            - We will arrange and attend a private showing of any property that you are potentially interested in
          </p>

          <h3>Offers and Negotiation Strategies - Where Our Experience Counts</h3>
          <p>
            - Learn the steps of making an offer and how we protect you in the process <br>
            - Discuss multiple-offer strategies (as needed)<br>
            - Offer presentation and highlighting your offer’s strengths to listing agent<br>
            - Negotiate to optimize price and terms for you<br>
            - Acceptance of offer/counter-offers
          </p>
          <div class'clearfix'></div>
          <a href="#" class="call-to-action-btn-1" style="margin-top: 30px;">Let’s Get to Work</a>
        </div>
      </div>
    </div>
  </div>

<div class="selling-section3 bg-white padding-vertical-100">
  <div class="container">
    <img src="/images/pict6.jpg" alt="" align="right" width="439" style="margin-left: 60px;">
    <h1>Step Three</h1>
    <h3>Once Your Offer is Accepted</h3>
    <p>- Circulate fully signed offer to all necessary parties<br>- Escrow initial deposit per terms of agreement<br>- Arrange for any inspections of the property (if applicable)<br>- Review Inspection Reports and negotiate on your behalf<br>- Make sure the draft Purchase and Sale agreement is available for review in a timely manner<br>- Notify lender of accepted offer and make sure an appraisal is scheduled (if applicable)<br>- Facilitate signing of the Purchase and Sale agreement and escrowing the necessary funds as per terms of the agreement<br>- Contact insurance agent regarding homeowner’s coverage and provide mortgage lender’s wording for the certificate of insurance<br>- Schedule transfer of utilities<br>- Schedule final walk-through of property<br>- Review of Settlement Statement with your Attorney</p>

    <a href="#" class="btn-black-big" style="margin-top: 20px;">Schedule Your Consultation</a>
  </div>
</div>

<div class="style1-section buying-section4 content-text-white">
  <div class="tint-wrap">
    <div class="container">
      <div class="col-sm-5">

      </div>
      <div class="col-sm-7">
        <h1>Step Four</h1>
        <h3>The Closing - The Day You Have Been Waiting For!</h3>
        <p>
          - Attend final walk-through with you to ensure property is in expected condition <br>
          - Sign Closing Documents<br>
          - Key Exchange<br>
          - Celebrate your new home!
        </p>

        <h3>Working Together Again!</h3>
        <p>
          - Staying in touch<br>
          - Second homes and investment properties<br>
          - Providing resources and introductions<br>
          - Referrals, testimonials and reviews
        </p>
        <div class'clearfix'></div>
        <a href="#" class="call-to-action-btn-1" style="margin-top: 30px;">Let’s Get to Work</a>
      </div>
    </div>
  </div>
</div>

<div class="selling-contact-section contact-section bg-white">
  <div class="tint-wrap padding-vertical-100">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
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
        <div class="col-sm-6">
          <div style="width: 50%; float: left;">
            <img src="images/phone1.png" alt="" width="252">
          </div>
          <div class="content-text-white" style="width: 50%; float: right;">
            <h3>Start your search — from anywhere</h3>
            <p>Browse thousands of real-time sales and rental listings through
            our integrated app and website — filtering by the criteria that
            matter most to you — and connect with your Compass agent to schedule
            viewings and keep track of all your visits.</p>
            <a href="#" class="call-to-action-btn-1">Download Our App</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
