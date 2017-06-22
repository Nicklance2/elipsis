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
    <style type="text/css">
    @font-face{font-family:ff-meta-serif-web-pro;src:url(https://use.typekit.net/af/955df7/000000000000000000016648/27/l?subset_id=2&fvd=n5&v=3) format("woff2"),url(https://use.typekit.net/af/955df7/000000000000000000016648/27/d?subset_id=2&fvd=n5&v=3) format("woff"),url(https://use.typekit.net/af/955df7/000000000000000000016648/27/a?subset_id=2&fvd=n5&v=3) format("opentype");font-weight:500;font-style:normal;}@font-face{font-family:ff-meta-serif-web-pro;src:url(https://use.typekit.net/af/fb2d58/000000000000000000016649/27/l?subset_id=2&fvd=i5&v=3) format("woff2"),url(https://use.typekit.net/af/fb2d58/000000000000000000016649/27/d?subset_id=2&fvd=i5&v=3) format("woff"),url(https://use.typekit.net/af/fb2d58/000000000000000000016649/27/a?subset_id=2&fvd=i5&v=3) format("opentype");font-weight:500;font-style:italic;}@font-face{font-family:ff-meta-serif-web-pro;src:url(https://use.typekit.net/af/e6cf81/000000000000000000016646/27/l?subset_id=2&fvd=n7&v=3) format("woff2"),url(https://use.typekit.net/af/e6cf81/000000000000000000016646/27/d?subset_id=2&fvd=n7&v=3) format("woff"),url(https://use.typekit.net/af/e6cf81/000000000000000000016646/27/a?subset_id=2&fvd=n7&v=3) format("opentype");font-weight:700;font-style:normal;}@font-face{font-family:ff-meta-serif-web-pro;src:url(https://use.typekit.net/af/67d0e2/000000000000000000016647/27/l?subset_id=2&fvd=i7&v=3) format("woff2"),url(https://use.typekit.net/af/67d0e2/000000000000000000016647/27/d?subset_id=2&fvd=i7&v=3) format("woff"),url(https://use.typekit.net/af/67d0e2/000000000000000000016647/27/a?subset_id=2&fvd=i7&v=3) format("opentype");font-weight:700;font-style:italic;}@font-face{font-family:brandon-grotesque;src:url(https://use.typekit.net/af/f70b8d/0000000000000000000132db/27/l?subset_id=2&fvd=n1&v=3) format("woff2"),url(https://use.typekit.net/af/f70b8d/0000000000000000000132db/27/d?subset_id=2&fvd=n1&v=3) format("woff"),url(https://use.typekit.net/af/f70b8d/0000000000000000000132db/27/a?subset_id=2&fvd=n1&v=3) format("opentype");font-weight:100;font-style:normal;}@font-face{font-family:brandon-grotesque;src:url(https://use.typekit.net/af/735921/0000000000000000000132dc/27/l?subset_id=2&fvd=i1&v=3) format("woff2"),url(https://use.typekit.net/af/735921/0000000000000000000132dc/27/d?subset_id=2&fvd=i1&v=3) format("woff"),url(https://use.typekit.net/af/735921/0000000000000000000132dc/27/a?subset_id=2&fvd=i1&v=3) format("opentype");font-weight:100;font-style:italic;}@font-face{font-family:brandon-grotesque;src:url(https://use.typekit.net/af/b24438/0000000000000000000132dd/27/l?subset_id=2&fvd=n3&v=3) format("woff2"),url(https://use.typekit.net/af/b24438/0000000000000000000132dd/27/d?subset_id=2&fvd=n3&v=3) format("woff"),url(https://use.typekit.net/af/b24438/0000000000000000000132dd/27/a?subset_id=2&fvd=n3&v=3) format("opentype");font-weight:300;font-style:normal;}@font-face{font-family:brandon-grotesque;src:url(https://use.typekit.net/af/ecb02d/0000000000000000000132de/27/l?subset_id=2&fvd=i3&v=3) format("woff2"),url(https://use.typekit.net/af/ecb02d/0000000000000000000132de/27/d?subset_id=2&fvd=i3&v=3) format("woff"),url(https://use.typekit.net/af/ecb02d/0000000000000000000132de/27/a?subset_id=2&fvd=i3&v=3) format("opentype");font-weight:300;font-style:italic;}@font-face{font-family:brandon-grotesque;src:url(https://use.typekit.net/af/87035b/0000000000000000000132df/27/l?subset_id=2&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/87035b/0000000000000000000132df/27/d?subset_id=2&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/87035b/0000000000000000000132df/27/a?subset_id=2&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;}@font-face{font-family:brandon-grotesque;src:url(https://use.typekit.net/af/3a9a0a/0000000000000000000132e0/27/l?subset_id=2&fvd=i4&v=3) format("woff2"),url(https://use.typekit.net/af/3a9a0a/0000000000000000000132e0/27/d?subset_id=2&fvd=i4&v=3) format("woff"),url(https://use.typekit.net/af/3a9a0a/0000000000000000000132e0/27/a?subset_id=2&fvd=i4&v=3) format("opentype");font-weight:400;font-style:italic;}@font-face{font-family:brandon-grotesque;src:url(https://use.typekit.net/af/a7d2be/0000000000000000000132e1/27/l?subset_id=2&fvd=n5&v=3) format("woff2"),url(https://use.typekit.net/af/a7d2be/0000000000000000000132e1/27/d?subset_id=2&fvd=n5&v=3) format("woff"),url(https://use.typekit.net/af/a7d2be/0000000000000000000132e1/27/a?subset_id=2&fvd=n5&v=3) format("opentype");font-weight:500;font-style:normal;}@font-face{font-family:brandon-grotesque;src:url(https://use.typekit.net/af/651e7c/0000000000000000000132e2/27/l?subset_id=2&fvd=i5&v=3) format("woff2"),url(https://use.typekit.net/af/651e7c/0000000000000000000132e2/27/d?subset_id=2&fvd=i5&v=3) format("woff"),url(https://use.typekit.net/af/651e7c/0000000000000000000132e2/27/a?subset_id=2&fvd=i5&v=3) format("opentype");font-weight:500;font-style:italic;}@font-face{font-family:brandon-grotesque;src:url(https://use.typekit.net/af/37f12c/0000000000000000000132e3/27/l?subset_id=2&fvd=n7&v=3) format("woff2"),url(https://use.typekit.net/af/37f12c/0000000000000000000132e3/27/d?subset_id=2&fvd=n7&v=3) format("woff"),url(https://use.typekit.net/af/37f12c/0000000000000000000132e3/27/a?subset_id=2&fvd=n7&v=3) format("opentype");font-weight:700;font-style:normal;}@font-face{font-family:brandon-grotesque;src:url(https://use.typekit.net/af/0304da/0000000000000000000132e4/27/l?subset_id=2&fvd=i7&v=3) format("woff2"),url(https://use.typekit.net/af/0304da/0000000000000000000132e4/27/d?subset_id=2&fvd=i7&v=3) format("woff"),url(https://use.typekit.net/af/0304da/0000000000000000000132e4/27/a?subset_id=2&fvd=i7&v=3) format("opentype");font-weight:700;font-style:italic;}@font-face{font-family:brandon-grotesque;src:url(https://use.typekit.net/af/54066a/0000000000000000000132e5/27/l?subset_id=2&fvd=n9&v=3) format("woff2"),url(https://use.typekit.net/af/54066a/0000000000000000000132e5/27/d?subset_id=2&fvd=n9&v=3) format("woff"),url(https://use.typekit.net/af/54066a/0000000000000000000132e5/27/a?subset_id=2&fvd=n9&v=3) format("opentype");font-weight:900;font-style:normal;}@font-face{font-family:brandon-grotesque;src:url(https://use.typekit.net/af/ab3228/0000000000000000000132e6/27/l?subset_id=2&fvd=i9&v=3) format("woff2"),url(https://use.typekit.net/af/ab3228/0000000000000000000132e6/27/d?subset_id=2&fvd=i9&v=3) format("woff"),url(https://use.typekit.net/af/ab3228/0000000000000000000132e6/27/a?subset_id=2&fvd=i9&v=3) format("opentype");font-weight:900;font-style:italic;}
    </style>


</head>
<body>

    <div class="navbar main-nav navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img class="img-responsive" src="/images/logo.png"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
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

    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>

</body>
</html>
