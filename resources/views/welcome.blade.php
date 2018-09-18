<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>vKirirom Pine Resort</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap-select.min.css')}}">
	<script src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>

	<!-- <link href="{{asset('frontend/plugin/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" /> -->

</head>

<body>
	<div id="fh5co-page">
		@include('_partial.header')
		<div id="best-deal">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 col-sm-12 col-xs-12 col-lg-3 float-left item-block animate-box fh5co-entry" style="float: left;"
					 data-animate-effect="fadeIn">
						<div class="sidebar-filter">
							<div class="nice well-small">
								<ul class="nav nav-list">
									<h4 class="filters-header-text"><img src="{{asset('img/filter.svg')}}" width="20px" height="20px" alt="filter">Filter
										by :</h4>
									<form action="">
										<div class="col-md-12 col-lg-12 filter-box">
											<div class="filter-class">
												<span>Accommodations Class</span><br>
											</div>
											<input type="radio" name="acc-class" value="budget" id="budget"><span id="budget"> budgets</span><br>
											<input type="radio" name="acc-class" value="luxury" id="luxury"><span id="budget"> Luxury</span><br>
											<input type="radio" name="acc-class" value="other" id="other"><span id="budget"> Other</span>
											<hr>
										</div>
									</form>
									<form action="">
										<div class="col-md-12 col-lg-12 filter-box">
											<div class="filter-class">
												<span>Type of beds</span><br>
											</div>
											<input type="radio" name="type-bed" value="single"><span id="budget"> Single bed</span><br>
											<input type="radio" name="type-bed" value="double"><span id="budget"> Double beds</span><br>
											<input type="radio" name="type-bed" value="beds"><span id="budget"> 4 beds</span><br>
											<input type="radio" name="type-bed" value="camp"><span id="budget"> Camping type</span>
											<hr>
										</div>
									</form>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12 col-lg-9 float-right">
						@foreach($user as $key=>$item)
						<div class="col-md-12 item-block animate-box" data-animate-effect="fadeIn">
							<div class="card">
								<div class="row">
									<div class="fh5co-property">
										<div class="col-md-4 col-sm-12">
											<div id="roomSlider-{{ $item->id }}" class="carousel slide" data-ride="carousel">
												<ul class="carousel-indicators">
													<li data-target="#roomSlider" data-slide-to="0" class="active"></li>
													<li data-target="#roomSlider" data-slide-to="1"></li>
													<li data-target="#roomSlider" data-slide-to="2"></li>
												</ul>
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img class="d-block w-100" src="{{asset('/frontend/images/slide_1.jpg')}}" alt="First slide">
													</div>
													<div class="carousel-item">
														<img class="d-block w-100" src="{{asset('/frontend/images/slide_2.jpg')}}" alt="Second slide">
													</div>
													<div class="carousel-item">
														<img class="d-block w-100" src="{{asset('/frontend/images/slide_3.jpg')}}" alt="Third slide">
													</div>
												</div>
												<a class="carousel-control-prev" href="#roomSlider-{{ $item->id }}" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												</a>
												<a class="carousel-control-next" href="#roomSlider-{{ $item->id }}" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												</a>
											</div>
										</div>
										<div class="col-md-5 col-sm-12">
											<div class="fh5co-property-innter">
												<h3><label>{{$item->name}}</label></h3>
												<p>
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
														<strong class="fa fa-television"> TV available</strong>
													</span>
												</p>
											</div>
										</div>
										<div class="col-md-3 col-sm-12">
											<select id="{{$item->id}}" class="show-tick" style="border: none" name="{{$item->name}}" onChange="myFunction()">
												<option value="0">Rooms</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
											<div class="price-status">
												<span class="price">${{$item->event_name}}<span class="per">/night</span></span>
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
		</div>
		<a href="/payment">
			<div class="button-demo">
				<button id="myBtn" hidden="true" type="button" class="btn btn-primary waves-effect">Book</button>
			</div>
		</a>
		@include('_partial.footer')
	</div>

	<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
	<!-- <script src="{{asset('frontend/js/bootstrap.js')}}"></script> -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.flexslider-min.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>
	<script src="{{asset('frontend/js/jquery-ui.js')}}"></script>

	<script>
		function myFunction() {
			// var type=;

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

		var room = [];
		var room_amount = 0;
		var update_item_index = 0;
		var update_status = false;
		$('select').on('change', function () {
			var item = {
				'name': $(this).attr('name'),
				'value': $(this).val()
			};
			room_amount = room_amount + $('select').val();
			console.log(room.length);
			if (room.length === 0) {
				room.push(item);
				console.log(room)
			} else {
				var i = room.length;
				while (i) {
					var a = i - 1;
					i = a;
					if (a >= 0) {
						if (room[a].name === $(this).attr('name')) {
							update_item_index = a;
							update_status = true;
						}
					}
				}
				console.log(update_status);
				if (update_status) {
					console.log("HERE!!!!!!")
					console.log($(this).val());
					if (parseInt($(this).val()) === 0) {
						console.log("Update status of the room index");
						room.splice(update_item_index, 1);

					} else {
						room[update_item_index].value = $(this).val();
						console.log("****************");
						console.log(room);
					}
					update_status = false;
				} else {
					room.push(item);
				}
			}

			$("#test").val(JSON.stringify(room));
			console.log($('#test').val())
			console.log(room.length)
			if (room.length > 0) {
				$('#myBtn').attr('hidden', false)
			} else {
				$('#myBtn').attr('hidden', true)
			}

		})
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
		$(':radio').mousedown(function (e) {
			var $self = $(this);
			if ($self.is(':checked')) {
				var uncheck = function () {
					setTimeout(function () {
							$self.removeAttr('checked');
						},
						0);
				};
				var unbind = function () {
					$self.unbind('mouseup', up);
				};
				var up = function () {
					uncheck();
					unbind();
				};
				$self.bind('mouseup', up);
				$self.one('mouseout', unbind);
			}
		});
	</script>
</body>

</html>