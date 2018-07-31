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

		<aside id="fh5co-hero" clsas="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li class="img-responsive" style="background-image: url(frontend/images/1.jpg);" />
					<li class="img-responsive" style="background-image: url(frontend/images/1.jpg);" />
					<li class="img-responsive" style="background-image: url(frontend/images/2.jpg);" />>
					<li class="img-responsive" style="background-image: url(frontend/images/3.jpg);" />>
					<li class="img-responsive" style="background-image: url(frontend/images/4.jpg);" />>
					<li class="img-responsive" style="background-image: url(frontend/images/5.jpg);" />>
					<li class="img-responsive" style="background-image: url(frontend/images/6.jpg);" />
					<li class="img-responsive" style="background-image: url(frontend/images/resort.jpg);" />
				</ul>
			</div>
		</aside>

		<div id="best-deal">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
						<h2>'vKirirom' is a new concept for enriching people's lives for the future</h2>
						<p>We aim to provide services and an atmosphere where everyone enjoys nature while conserving the environment as well.
							Visit our restaurant and savour our dishes special our chef has to offer and or stay in one of our innovative rooms.</p>
					</div>
					
					<form action="{{ route('checkin') }}" method="GET">
					{{ csrf_field() }}
						<div class="form-group row no-margin">
							<label for="check-in-time" class="col-sm-3 col-form-label label-xl">
								Check In:
							</label>
							<div class="col-sm-9">
								<div class='input-group date' id='datetimepicker-check-in'>
									<input id="check-in-time" type="text" class="form-control" value="" />
									<input id="checkin-time" type="hidden" name="checkin_date" /> 
									<span class="input-group-addon">
										<span class="fa fa-calendar" style="font-size:29px;"></span>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group row no-margin">
							<label for="check-out-time" class="col-sm-3 col-form-label label-xl">
								Check Out:
							</label>
							<div class="col-sm-9">
								<div class='input-group date' id='datetimepicker-check-out'>
									<input id="check-out-time" type="text" class="form-control" value="" />
									<input id="checkout-time" type="hidden" name="checkout_date" />
									<span class="input-group-addon">
										<span class="fa fa-calendar" style="font-size:29px;"></span>
									</span>
								</div>
							</div>
						</div>
						<div>
							<button class="custombutton butt1">Find Room</button>
						</div>
					</form>
					<!-- <div class="col-sm-9">
						<button class="awe-btn awe-btn-13">Find Room</button>
					</div> -->

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
					<div class="col-md-3 animate-box" data-animate-effect="fadeIn">
						<a class="fh5co-entry" href="#">
							<figure>
								<img src="{{asset('frontend/images/bungalow.jpg')}}" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
							</figure>
							<div class="fh5co-copy">
								<h3>Bungalow</h3>
								<span class="fh5co-date">June 8, 2016</span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</a>
					</div>
					<div class="col-md-3 animate-box" data-animate-effect="fadeIn">
						<a class="fh5co-entry" href="#">
							<figure>
								<img src="{{asset('frontend/images/boreyA.jpg')}}" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
							</figure>
							<div class="fh5co-copy">
								<h3>Borey A</h3>
								<span class="fh5co-date">June 8, 2016</span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-3 animate-box" data-animate-effect="fadeIn">
						<a class="fh5co-entry" href="#">
							<figure>
								<img src="{{asset('frontend/images/luxurytent1.jpg')}}" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
							</figure>
							<div class="fh5co-copy">
								<h3>Luxury Tent</h3>
								<span class="fh5co-date">June 8, 2016</span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-3 animate-box" data-animate-effect="fadeIn">
						<a class="fh5co-entry" href="#">
							<figure>
								<img src="{{asset('frontend/images/camping5.JPG')}}" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive">
							</figure>
							<div class="fh5co-copy">
								<h3>Camping</h3>
								<span class="fh5co-date">June 8, 2016</span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
								</p>
							</div>
						</a>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
							<h2>Our Meal</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
							</p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="{{asset('frontend/images/16.jpg')}}" alt="Lights" style="width:100%">
								<div class="caption">
									<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
								</div>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="{{asset('frontend/images/17.jpg')}}" alt="Lights" style="width:100%">
								<div class="caption">
									<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
								</div>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="{{asset('frontend/images/18.jpg')}}" alt="Lights" style="width:100%">
								<div class="caption">
									<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
								</div>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="{{asset('frontend/images/19.jpg')}}" alt="Lights" style="width:100%">
								<div class="caption">
									<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
								</div>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="{{asset('frontend/images/12.jpg')}}" alt="Lights" style="width:100%">
								<div class="caption">
									<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
								</div>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="{{asset('frontend/images/13.jpg')}}" alt="Lights" style="width:100%">
								<div class="caption">
									<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
								</div>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="{{asset('frontend/images/14.jpg')}}" alt="Lights" style="width:100%">
								<div class="caption">
									<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
								</div>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="thumbnail">
								<img src="{{asset('frontend/images/15.jpg')}}" alt="Lights" style="width:100%">
								<div class="caption">
									<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
								</div>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
						<h2>Our Location</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
						</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span8">
						<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457923.86877925845!2d104.17120771835094!3d11.381808161287738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3108e85207384c83%3A0x1c0dc50984a079a3!2svKirirom+Pine+Resort!5e0!3m2!1sen!2skh!4v1532506013714"></iframe>
					</div>
				</div>
			</div>


			<footer id="fh5co-footer" role="contentinfo">
				<div class="container">
					<div class="col-md-4 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
						<h3>About vKirirom</h3>
						<p>vKirirom Pine Resort is located amongst the pine trees of Kirirom Mountain. Here at vKiriom, we try to preserve the
							natural beauty of the environment. Our building locations are properly studied so that we avoid cutting down many
							trees.
						</p>
					</div>
					<div class="col-md-4 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
						<h3>Kirirom Institute of Technology</h3>
						<div>
							<label>KIT</label>adapts a new style of learning with an effective new educational techniques as a boarding school.</div>
						<a href="http://www.kit.edu.kh/contact.php" target="_black">Enroll here !!</a>
						<div>New university for the future in Kirirom Mountain under the vKririom Project. An educational approach that stands amongst
							the forest.</div>
						<a href="http://www.kit.edu.kh/index.php" target="_black"> More about KIT</a>
					</div>
					<div class="col-md-4 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
						<h3>THE MEANING OF OUR LOGO</h3>
						<p>In the logo of vKirirom - you will find '
							<span style="color: orange;">v</span>' in orange and
							<span style="color: green;">'Kirirom'</span> in green. The orange colour represents the people who live in Kirirom. This is the colour of joy
							and creativity. It also reminds us of the robes monks wear in Cambodia. The green represents the nature and its beauty.</p>
					</div>
				</div>
				<div class="col-md-12 fh5co-copyright text-center">
					<p>&copy; 2018 Designed by
						<a href="http://kit.vkirirom.com/" target="_blank"> Kirirom Institute of Technology</a>
					</p>
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
</body>

</html>