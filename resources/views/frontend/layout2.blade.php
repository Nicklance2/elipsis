<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link rel="stylesheet" href="css/app.css">

</head>
<body>

    <div class="navbar main-nav nav-transparent navbar-inverse navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img class="img-responsive" src="/images/logo-white.png" style="max-width: 300px;"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown">
                      <a href="#about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Properties <i class="ti-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="/exclusive-listings">Exclusive Listings</a></li>
                        <li><a href="/our-recent-transactions">Our Recent Transactions</a></li>

                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sellers and Buyers <i class="ti-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="/selling">Selling</a></li>
                        <li><a href="/buying">Buying</a></li>

                      </ul>
                    </li>
                    <li><a href="/market-stats">Market Stats</a></li>
                    <li><a href="/around-town">Around Town</a></li>
                    <li><a href="/testimonials">Testimonials</a></li>
                    <li><a href="/meet-the-team">Meet the Team</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <!-- <li><a class="nav-contact-button" href="#">
                            <span style="margin-right: 10px;">
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                            </span>
                            <span>617.835.5008</span></a>
                    </li> -->
                </ul>

            </div><!--/.nav-collapse -->
    </div>

    @yield('content')

<footer class="footer-style2">
  <div class="footer-tint">
    <div class="container">
      <div class="text-center" style="margin-bottom: 50px;">
        <img src="/images/footer-logo.png" alt="">
      </div>
      <p class="text-center">1073 Massachusetts Avenue <br>
      Cambridge, MA 02138 <br>
      617.835.5008<p>
      <p class="text-center" style="margin-bottom: 80px;">thecarolkellyteam@compass.com<p>

      <div class="col-sm-6">
        <strong style="font-size: 16px;">Terms & Conditions and Privacy Policy</strong><br>
        <span style="font-size: 12px;">© Compass. All Rights Reserved. 2012 - 2016 • Made In NYC</span>
      </div>

      <div class="col-sm-6">
        <a href="#">
          <img class="pull-right" src="/images/app-store-icon.jpg" alt="">
        </a>
        <a href="#">
          <img class="pull-right" src="/images/footer-icon-1.png" alt="" style="margin-right: 20px;">
        </a>
      </div>
      <div class="clearfix"></div>
      <div class="col-sm-6 footer-social-media">
        <a href="#">
          <i class="ti-twitter-alt"></i>
        </a>
        <a href="#">
          <i class="ti-facebook"></i>
        </a>
        <a href="#">
          <i class="ti-instagram"></i>
        </a>
      </div>

      <div class="col-sm-6 text-right footer-links">
        <a href="#">A Mopro Website</a>
        <a href="#" id="return-to-top">Back to Top</a>
      </div>

    </div>
  </div>
</footer>
    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>

    <script>
		$(document).ready(function(){
			var scroll_start = 0;
			var startchange = $('.main-nav');
			var offset = startchange.offset();
			$(document).scroll(function() {
				scroll_start = $(this).scrollTop();
				if(scroll_start > offset.top) {
					$('.main-nav').css('background-color', '#000');
          $('.main-nav').css('padding', '5px 20px');
          $('.main-nav .navbar-brand').css('margin-top', '2px');
          $('.main-nav img').css('max-width', '200px');
				} else {
					$('.main-nav').css('background-color', 'transparent');
          $('.main-nav').css('padding', '34px 80px');
          $('.main-nav .navbar-brand').css('margin-top', '-10px');
          $('.main-nav img').css('max-width', '300px');
				}
			});
		});



		// ===== Scroll to Top ====
		$(window).scroll(function() {
			if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
				$('#return-to-top').fadeIn(200);    // Fade in the arrow
			} else {
				$('#return-to-top').fadeOut(200);   // Else fade out the arrow
			}
		});
		$('#return-to-top').click(function() {      // When arrow is clicked
			$('body,html').animate({
				scrollTop : 0                       // Scroll to top of body
			}, 500);
		});
	</script>

</body>
</html>
