@extends('frontend.layout')
@section('content')
    <div class="home-top-section">
        <div class="container">
            <div class="vertical-center">
                <h1 class="text-center" style="padding-bottom: 40px; margin-bottom:0px; margin-top: 0px;">Let us guide you home.</h1>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Enter an agent, neighborhood, address, ZIP code, or listing ID">
                  </div>
                </div>
            </div>
        </div>
    </div>


    <div class="home-section2">
      <div class="container"  style="width: 1000px;">
        <div class="row">
          <h3>RENTALS</h3>

          <div class="carousel-wrapper">
            <div id="home-rentals-carousel" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="/images/rentals/r1.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/rentals/r2.jpg" alt="">
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#home-rentals-carousel" role="button" data-slide="prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#home-rentals-carousel" role="button" data-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="c-caption">
              <a href="#">
                <span>463 Broome Street, 2nd Floor</span>
                <span>Soho | 2 BD | 2 BA | $12,000/MO</span>
              </a>
            </div>
          </div>


          <div class="carousel-wrapper">
            <div id="home-rentals-carousel2" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="/images/rentals/r1.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/rentals/r2.jpg" alt="">
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#home-rentals-carousel2" role="button" data-slide="prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#home-rentals-carousel2" role="button" data-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="c-caption">
              <a href="#">
                <span>463 Broome Street, 2nd Floor</span>
                <span>Soho | 2 BD | 2 BA | $12,000/MO</span>
              </a>
            </div>
          </div>

          <div class="carousel-wrapper">
            <div id="home-rentals-carousel3" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="/images/rentals/r1.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/rentals/r2.jpg" alt="">
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#home-rentals-carousel3" role="button" data-slide="prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#home-rentals-carousel3" role="button" data-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="c-caption">
              <a href="#">
                <span>463 Broome Street, 2nd Floor</span>
                <span>Soho | 2 BD | 2 BA | $12,000/MO</span>
              </a>
            </div>
          </div>

          <div class="carousel-wrapper">
            <div id="home-rentals-carousel4" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="/images/rentals/r1.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/images/rentals/r2.jpg" alt="">
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#home-rentals-carousel4" role="button" data-slide="prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#home-rentals-carousel4" role="button" data-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="c-caption">
              <a href="#">
                <span>463 Broome Street, 2nd Floor</span>
                <span>Soho | 2 BD | 2 BA | $12,000/MO</span>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="home-section3">
        <div class="container" style="width: 1000px;">
          <h3>A SELECTION OF PAST RENTALS</h3>
          <div class="past-rentals">

            @for ($i = 0; $i < 20; $i++)
            <div class="past-rental">
              <img src="/images/rentals/past-rentals/prentals1.jpg" alt="">
              <div class="prentals-caption">
                <h4>21 Mercer Street</h4>
                <span>3 BD | 3.5 BA | $21,000/MO</span>
              </div>
              <div class="clearfix"></div>
            </div>
            @endfor

          </div>
        </div>
    </div>

    <div class="home-section4">
      <div class="container">
        <div class="text-center">
            <img src="/images/logo2.png" alt="">
        </div>
        <p class="text-center" style="max-width: 960px; margin: auto;">
          Compass is a licensed real estate broker and abides by Equal Housing Opportunity laws. All material presented herein is intended for
          informational purposes only. Information is compiled from sources deemed reliable but is subject to errors, omissions, changes in price,
          condition, sale, or withdraw without notice. No statement is made as to accuracy of any description. All measurements and square footages
          are approximate. Exact dimensions can be obtained by retaining the services of an architect or engineer.
          This is not intended to solicit property already listed.
        </p>
        <p class="text-center" style="font-size: 19.2000007629395px; letter-spacing: .4px; font-weight: 400; font-style: normal; font-family: 'Source Sans Pro' !important; padding-top: 30px;">
          THE GLAZER TEAM, 90 FIFTH AVENUE, 3RD FLOOR, NEW YORK, NY 10011, USA
        </p>

        <h1 class="text-center" style="margin-top: 80px;">OH, YOU WANT MY NUMBER DO YOU?</h1>

        <h1 class="text-center">646  246  5837</h1>

        <p class="text-center" style="color: #16161d; margin-top: 30px; font-family: 'Source Sans Pro' !important; font-size: 12px; line-height: 1.6em; text-transform: uppercase; text-decoration: none; letter-spacing: 2px; font-weight: 400; font-style: normal;">WANT TO KNOW MORE?  FIND US AT <a href="">COMPASS.COM</a></p>
      </div>

    </div>


@endsection
