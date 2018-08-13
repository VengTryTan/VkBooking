<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>vKirirom Pine Resort</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->

	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datetimepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
	<!-- Date picker style -->
	<link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('css/multirange.css')}}">
	<!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
	<!-- Modernizr JS -->
	<script src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>
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
						<a href="/Vkbooking/public">
							<img src="{{asset('frontend/images/HomePage/vKirirom.svg')}}" alt="vKirirom logo" title="logo" />
						</a>
						<nav role="navigation">
							<ul>
								<li class="cta">
									<a href="contact.html">Contact us</a>
								</li>
								<li class="zoom">
									<a href="https://www.facebook.com/vkirirom" target="_blank">
										<img src="{{asset('frontend/images/facebook.svg')}}" alt="www.facebook.com" title="facebook" />
										<!-- <i class="fa fa-facebook"></i> -->
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
						<h2>We are Offering the Best Accommodations!</h2>
						<p>Far far away, behinxd the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 item-block animate-box" data-animate-effect="fadeIn">
						<div id="sidebar">
							<div class="nice well-small">
								<ul class="nav nav-list">
									<h4 class="filters-header-text"><img src="{{asset('img/filter.svg')}}" width="20px" height="20px" alt="filter">Filter by:</h4>
									<form action="">
										<div class="filter-box">
											<div class="filter-class">
												<span>Accommodations Class</span><br>
											</div>
											<input type="radio" name="acc-class" value="budget" id="budget"><span id="budget"> budgets</span><br>
											<input type="radio" name="acc-class" value="luxury" id="luxury"><span id="budget"> Luxury</span><br>
											<input type="radio" name="acc-class" value="other" id="other"><span id="budget"> Other</span><hr>
										</div>
									</form>
									<form action="">
										<div class="filter-box">
											<div class="filter-class">
												<span>Type of beds</span><br>
											</div>
											<input type="radio" name="type-bed" value="budget"><span id="budget"> Single bed</span><br>
											<input type="radio" name="type-bed" value="luxury"><span id="budget"> Double beds</span><br>
											<input type="radio" name="type-bed" value="other"><span id="budget"> 4 beds</span><br>
											<input type="radio" name="type-bed" value="other"><span id="budget"> Camping type</span><hr>
										</div>
									</form>
									<li> <a class="totalInCar\t" href="cart.html"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a></li>
								</ul>
							</div>
						</div>
					</div>
					@foreach($user as $key=>$item)
						<div style="float: right;" class="col-md-9 col-sm-9 col-xs-9 col-lg-9 item-block animate-box" data-animate-effect="fadeIn">
							<div class="card">
								<div class="row">
									<div class="fh5co-property">
										<div class="col-md-4">
											<aside id="fh5co-hero">
												<div class="flexslider">
													<p>{{$item->date}}</p>
												</div>
											</aside>
										</div>
										<div class="col-md-5">
											<div class="fh5co-property-innter">
												<label>{{$item->name}}</label>							               		
												<p class="">
													<span>
														<strong class="fa fa-wifi">WiFi available</strong>
													</span>
													<span>
														<strong class="fa fa-bed"> 1 Bed</strong>
													</span>
													<span>
														<strong class="fa fa-shower"> Bathroom</strong>
													</span>
													<span>
														<strong class="fa fa-television">TV available</strong>
													</span>
												</p>
											</div>
										</div>
										<div class="col-md-3">
											<div class="price-status">
												<span class="price">${{$item->price}}<span class="per">/night</span></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>

		<div class="fh5co-section-with-image">
			<img src="{{asset('frontend/images/security.png')}}" alt="" class="img-responsive">
			<div class="fh5co-box animate-box">
				<h2>Security, Comfort, &amp; Convenience</h2>
				<p>We provide you a good service and make sure you have satified with our resort.</p>
			</div>
		</div>

		<div id="fh5co-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
						<h2>Our information</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
							</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeIn">
						<a class="fh5co-entry" href="#">
							<figure>
								<img src="{{asset('frontend/images/slide_4.jpg')}}" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
							</figure>
							<div class="fh5co-copy">
								<h3>We Create Awesome Free Templates</h3>
								<span class="fh5co-date">June 8, 2016</span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
									</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 animate-box" data-animate-effect="fadeIn">
						<a class="fh5co-entry" href="#">
							<figure>
								<img src="{{asset('frontend/images/slide_5.jpg')}}" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
							</figure>
							<div class="fh5co-copy">
								<h3>Handcrafted Using CSS3 &amp; HTML5</h3>
								<span class="fh5co-date">June 8, 2016</span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
									</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 animate-box" data-animate-effect="fadeIn">
						<a class="fh5co-entry" href="#">
							<figure>
								<img src="{{asset('frontend/images/slide_6.jpg')}}" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
							</figure>
							<div class="fh5co-copy">
								<h3>We Try To Update The Site Everyday</h3>
								<span class="fh5co-date">June 8, 2016</span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
									</p>
							</div>
						</a>
					</div>
				</div>
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
	<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('frontend/js/jquery.flexslider-min.js')}}"></script>

	<!-- MAIN JS -->
	<script src="{{asset('frontend/js/main.js')}}"></script>
	<!-- Date Picker Function -->
	<script src="{{asset('frontend/js/jquery-ui.js')}}"></script>

	<script>
		function myFunction() {
			// var type=
			var e = document.getElementById("type");
			var strUser = e.options[e.selectedIndex].value;
			console.log(e.value)
			if ($('#type').val() > 0) {
				$('#myBtn').attr('disabled', false)
			} else {
				$('#myBtn').attr('disabled', true)
			}
			// document.getElementById("myBtn").disabled = false;
		}
	</script>
	<script>
		$(document).ready(function () {
			$("#DateIn").datepicker({
				numberOfMonths: 2,
				onSelect: function (selected) {
					$("#DateOut").datepicker("option", "minDate", selected)
				}
			});
			$("#DateOut").datepicker({
				numberOfMonths: 2,
				onSelect: function (selected) {
					$("#DateIn").datepicker("option", "maxDate", selected)
				}
			});
		});
		$(function () {
			$('#datepicker').datepicker({
				dateFormat: "dd/MM/yy",
				defaultDate: "+1w",
				changeMonth: true,
				numberOfMonths: 1,
				onSelect: function (selectedDate) {
					if (this.id == 'datepicker') {
						var dateMin = $('#datepicker').datepicker("getDate");
						var rMin = new Date(dateMin.getFullYear(), dateMin.getMonth(), dateMin.getDate() + 1);
						var rMax = new Date(dateMin.getFullYear(), dateMin.getMonth(), dateMin.getDate() + 2);
						$('#datepicker2').val($.datepicker.formatDate('dd/MM/yy', new Date(rMax)));
					}
				}
			});
		});
		$(document).ready(function () {
			$("#DateIn").datepicker({
				numberOfMonths: 2,
				onSelect: function (selected) {
					$("#DateOut").datepicker("option", "minDate", selected)
				}
			});
			$("#DateOut").datepicker({
				numberOfMonths: 2,
				onSelect: function (selected) {
					$("#DateIn").datepicker("option", "maxDate", selected)
				}
			});
		});
	</script>
	<script>
		$(function () {
			$("#datepicker2").datepicker({
				dateFormat: "dd/MM/yy"
			});
		});
	</script>
	<script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>

	<!-- Check In Check out implement -->
	<script>
		$(document).ready(function () {
			var today = moment().add(0, 'days').format('L');
			var d = moment().add(0, 'days').format('YYYY-MM-DD');
			var tomorrow = moment().add(1, 'days').format('YYYY-MM-DD');
			console.log(today);
			console.log('*********');

			$('#datetimepicker-check-in').datetimepicker({
				minDate: today,
				defaultDate: today,
				format: 'L',
				showClear: true,
				widgetPositioning: {
					horizontal: 'auto',
					vertical: 'bottom'
				}

			});

			$('#datetimepicker-check-out').datetimepicker({
				minDate: tomorrow,
				defaultDate: tomorrow,
				format: 'L',
				showClear: true,
				widgetPositioning: {
					horizontal: 'auto',
					vertical: 'bottom'
				}
			});

			$('#datetimepicker-check-in').on("dp.change", function (e) {
				var next_day = moment(e.date).add(1, 'days');
				$('#datetimepicker-check-out').data("DateTimePicker").minDate(next_day);
				$('#datetimepicker-check-out').data("DateTimePicker").defaultDate(next_day);
				console.log('---------');
				console.log(e.date);
				date_checkin = moment(e.date).format("YYYY-MM-DD");
				date_checkout = moment(e.date).add(1, 'days').format("YYYY-MM-DD");
				console.log('+++++++++++++');
				console.log(date_checkin);
				console.log(date_checkout);
				d = moment(e.date).format("YYYY-MM-DD");
				$('#checkin-time').val(date_checkin);
				$('#checkinout-time').val(date_checkout);
			});

			$('#datetimepicker-check-out').on("dp.change", function (e) {
				$('#checkinout-time').val(moment(e.date).format("YYYY-MM-DD"));
				console.log('------------------')
				console.log(moment(e.date).format('L'));
			});
		});
	</script>
	<script>
		$(':radio').mousedown(function(e){
			var $self = $(this);
			if( $self.is(':checked') ){
				var uncheck = function(){
				setTimeout(function(){$self.removeAttr('checked');},0);
				};
				var unbind = function(){
				$self.unbind('mouseup',up);
				};
				var up = function(){
				uncheck();
				unbind();
				};
				$self.bind('mouseup',up);
				$self.one('mouseout', unbind);
			}
		});
	</script>
	<script type="text/javascript" src="{{asset('js/multirange.js')}}"></script>
</body>

</html>