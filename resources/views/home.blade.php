@extends('layouts.app')

@section('content')
<div id="fh5co-page">
    {{-- @include('_partial.header') --}}
    <aside id="fh5co-hero" clsas="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li class="img-responsive" style="background-image: url(frontend/images/1.jpg);" />
                <li class="img-responsive" style="background-image: url(frontend/images/1.jpg);" />
                <li class="img-responsive" style="background-image: url(frontend/images/2.jpg);" />
                <li class="img-responsive" style="background-image: url(frontend/images/3.jpg);" />
                <li class="img-responsive" style="background-image: url(frontend/images/4.jpg);" />
                <li class="img-responsive" style="background-image: url(frontend/images/5.jpg);" />
                <li class="img-responsive" style="background-image: url(frontend/images/6.jpg);" />
                <li class="img-responsive" style="background-image: url(frontend/images/resort.jpg);" />
            </ul>
        </div>
    </aside>
    <div id="best-deal">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <h2>'vKirirom' is a new concept for enriching people's lives for the future</h2>
                    <p>We aim to provide services and an atmosphere where everyone enjoys nature while conserving the environment as
                        well.
                        Visit our restaurant and savour our dishes special our chef has to offer and or stay in one of our innovative
                        rooms.</p>
                </div>

                <form action="{{ route('checkin') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row no-margin">
                        <label for="check-in-time" class="col-sm-3 col-form-label label-xl">Check In:</label>
                        <div class="col-sm-9">
                            <div class='input-group date' id='datetimepicker-check-in'>
                                <input id="checkin_date" type="text" class="form-control" name="checkin_date"/>
                                <input id="checkin_time" type="hidden"/>
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
                                <input id="check-out-time" type="text" class="form-control" name="checkout_date"/>
                                <input id="checkout-time" type="hidden"  />
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
    <div id="fh5co-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
                    <h2>Our information</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                        texts.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 animate-box" data-animate-effect="fadeIn">
                    <a class="fh5co-entry" href="#">
                        <figure>
                            <img src="{{asset('frontend/images/bungalow.jpg')}}" alt="Bangalow"
                                class="img-responsive">
                        </figure>
                        <div class="fh5co-copy">
                            <h3>Bungalow</h3>
                            <span class="fh5co-date">June 8, 2016</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                                blind texts.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeIn">
                    <a class="fh5co-entry" href="#">
                        <figure>
                            <img src="{{asset('frontend/images/boreyA.jpg')}}" alt="Borey A"
                                class="img-responsive">
                        </figure>
                        <div class="fh5co-copy">
                            <h3>Borey A</h3>
                            <span class="fh5co-date">June 8, 2016</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                                blind texts.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeIn">
                    <a class="fh5co-entry" href="#">
                        <figure>
                            <img src="{{asset('frontend/images/luxurytent1.jpg')}}" alt="Luxury Tent"
                                class="img-responsive">
                        </figure>
                        <div class="fh5co-copy">
                            <h3>Luxury Tent</h3>
                            <span class="fh5co-date">June 8, 2016</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                                blind texts.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeIn">
                    <a class="fh5co-entry" href="#">
                        <figure>
                            <img src="{{asset('frontend/images/camping5.JPG')}}" alt="camping"
                                class="img-responsive">
                        </figure>
                        <div class="fh5co-copy">
                            <h3>Camping</h3>
                            <span class="fh5co-date">June 8, 2016</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                                blind texts.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
                    <h2>Our Meal</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                        texts.
                    </p>
                </div>
            </div>
            <div class="col-md-3" data-animate-effect="fadeIn">
                <div class="thumbnail">
                    <img src="{{asset('frontend/images/16.jpg')}}" alt="Lights" style="width:100%">
                    <div class="caption">
                        <p>Our best meal at our Pine View Kitchen Restaurant</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-animate-effect="fadeIn">
                <div class="thumbnail">
                    <img src="{{asset('frontend/images/17.jpg')}}" alt="Lights" style="width:100%">
                    <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-animate-effect="fadeIn">
                <div class="thumbnail">
                    <img src="{{asset('frontend/images/18.jpg')}}" alt="Lights" style="width:100%">
                    <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" data-animate-effect="fadeIn">
                <div class="thumbnail">
                    <img src="{{asset('frontend/images/19.jpg')}}" alt="Lights" style="width:100%">
                    <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
                    <h2>Our Location</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                        texts.
                    </p>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span8">
                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457923.86877925845!2d104.17120771835094!3d11.381808161287738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3108e85207384c83%3A0x1c0dc50984a079a3!2svKirirom+Pine+Resort!5e0!3m2!1sen!2skh!4v1532506013714"></iframe>
                </div>
            </div>
        </div>
        @include('_partial.footer')
    </div>
</div>
@endsection
@section('script')
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
@stop
