

<!DOCTYPE html>

	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>vKirirom Pine Resort</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
        <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
        <meta name="author" content="FreeHTML5.co" />

    
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="{{ URL::to('frontend/shortcut icon') }}" href="favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
        
        <!-- Animate.css -->
        <link rel="stylesheet" href="{{ URL::to('frontend/css/animate.css') }}">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{ URL::to('frontend/css/icomoon.css') }}">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{ URL::to('frontend/css/bootstrap.css') }}">
        <!-- Flexslider  -->
        <link rel="stylesheet" href="{{ URL::to('frontend/css/flexslider.css') }}">
        <!-- Theme style  -->
        <link rel="stylesheet" href="{{ URL::to('frontend/css/style.css') }}">

        <!-- Modernizr JS -->
        <script src="{{ URL::to('frontend/js/modernizr-2.6.2.min.js') }}"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    
	</head>
	<body>
        <div id="fh5co-page">
        <header id="fh5co-header" role="banner">
            <div class="container">
                <div class="row">
                    <div class="header-inner">
                    <img src="{{asset('frontend/images/HomePage/vKirirom.svg')}}" alt="vKirirom logo" title="logo" />
                        <nav role="navigation">
                        <ul>
								<li class="cta">
									<a href="contact.html">Contact us</a>
								</li>
								<li class="zoom">
									<a href="https://www.facebook.com/vkirirom" target="_blank">
										<img src="{{asset('frontend/images/facebook.svg')}}" alt="www.facebook.com" title="facebook" />
									</a>
								</li>
								<li class="zoom">
									<a href="https://www.youtube.com/channel/UCCIu3JTn0s4UX5Kze5Hse0g" target="_blank">
										<img src="{{asset('frontend/images/youtube.svg')}}" alt="www.youtube.com" title="youtube" />
									</a>
								</li>
								<li class="zoom">
									<a href="https://www.instagram.com/vkirirom_pine_resort/" target="_blank">
										<img src="{{asset('frontend/images/instagram.svg')}}" alt="www.instagram.com" title="instagram" />
									</a>
								</li>
							</ul>
                        </nav>
                    </div>
                </div>
            </div>
		</header>
    
		<div id="best-deal">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
						<h2>We are Offering the Best Real Estate Deals</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
					</div>
					@foreach($items as $item)
					<div class="col-md-4 item-block animate-box" data-animate-effect="fade">


						<div class="fh5co-property">
							<figure>
								<img src="{{asset('uploads/image/'.$item->image)}}" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
								<a href="#" class="tag">For rental</a>
							</figure>
							<div class="fh5co-property-innter">
								<h3><a href="#">{{$item->name}}</a></h3>
								<div class="price-status">
								<span class="price">${{$item->price}} </span>
							</div>
								<p>{{$item->description}}</p>
							</div>
						<p class="fh5co-property-specification">
							<span><strong>3500</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3.5</strong> Baths</span>  <span><strong>2</strong> Garages</span>
						</p>
						</div>

						
					</div>
					@endforeach


				</div>
			</div>
		</div>

		<div class="card bg-dark text-white">
			<img class="card-img" src="https://unsplash.com/photos/JoRoy500nCc" alt="Card image">
			<div class="card-img-overlay">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				<p class="card-text">Last updated 3 mins ago</p>
			</div>
		</div>
		
		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="col-md-4 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<h3>About vKirirom</h3>
					<p>vKirirom Pine Resort is located amongst the pine trees of Kirirom Mountain. Here at vKiriom, we try to preserve the natural beauty of the environment. Our building locations are properly studied so that we avoid cutting down many trees.</p>
				</div>
				<div class="col-md-4 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<h3>Kirirom Institute of Technology</h3>
					<div><label>KIT</label>adapts a new style of learning with an effective new educational techniques as a boarding school.</div>
					<a href="http://www.kit.edu.kh/contact.php" target="_black">Enroll here !!</a>
					<div>New university for the future in Kirirom Mountain under the vKririom Project. An educational approach that stands amongst the forest.</div>
					<a href="http://www.kit.edu.kh/index.php" target="_black"> More about KIT</a>
				</div>
				<div class="col-md-4 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<h3>THE MEANING OF OUR LOGO</h3>
					<p>In the logo of vKirirom - you will find '<span style="color: orange;">v</span>' in orange and <span style="color: green;">'Kirirom'</span> in green. The orange colour represents the people who live in Kirirom. This is the colour of joy and creativity. It also reminds us  of the robes monks wear in Cambodia. The green represents the nature and its beauty.</p>
				</div>					
				<div class="col-md-12 fh5co-copyright text-center">
					<p>&copy; 2018 Designed by <a href="http://kit.vkirirom.com/" target="_blank"> Kirirom Institute of Technology</a></p>
				</div>
			</div>
		</footer>
		</div>
	
	
	<!-- jQuery -->
	<script src="{{ URL::to('frontend/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ URL::to('frontend/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ URL::to('frontend/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ URL::to('frontend/js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ URL::to('frontend/js/jquery.flexslider-min.js') }}"></script>

	<!-- MAIN JS -->
	<script src="{{ URL::to('frontend/js/main.js') }}"></script>

	</body>
</html>

