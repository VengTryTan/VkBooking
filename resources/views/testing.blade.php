<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>vKirirom Pine Resort</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datetimepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/zoomslider.css')}}">
	<link rel="{{ URL::to('frontend/shortcut icon') }}" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

	<link rel="SHORTCUT ICON" href="{{asset('frontend/images/HomePage/vKirirom.png')}}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="{{ URL::to('frontend/js/modernizr-2.6.2.min.js') }}">
	</script>
</head>

<body>
	
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
				dateFormat: "YYYY-MM-dd",
				defaultDate: "+1w",
				changeMonth: true,
				numberOfMonths: 1,
				onSelect: function (selectedDate) {
					if (this.id == 'datepicker') {
						var dateMin = $('#datepicker').datepicker("getDate");
						var rMin = new Date(dateMin.getFullYear(), dateMin.getMonth(), dateMin.getDate() + 1);
						var rMax = new Date(dateMin.getFullYear(), dateMin.getMonth(), dateMin.getDate() + 2);
						$('#datepicker2').val($.datepicker.formatDate('YY-MM-dd', new Date(rMax)));
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
				dateFormat: "YY-MM-dd"
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
				format: "YYYY-MM-DD",
				showClear: true,
				widgetPositioning: {
					horizontal: 'auto',
					vertical: 'bottom'
				}

			});

			$('#datetimepicker-check-out').datetimepicker({
				minDate: tomorrow,
				defaultDate: tomorrow,
				format: 'YYYY-MM-DD',
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