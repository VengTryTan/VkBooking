<!DOCTYPE html>
<html>
<head>
    <title>Activity</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
     <link href='http://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>
    <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/default-theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
    <div class="page-wrapper">
        <div class="main">
            <div class="main-inner">
                <div class="container">
                    <div class="row">
                    <!-- Search Option -->
            
                         <!-- end search form -->
                        <div class="col-xs-12 col-md-12">
                        <div class="heading-title text-center page-title" id="">
                                <h2 class="text-uppercase" >Popular Activities</h2>
                            </div>
                        </div>
                        <div>
                        <form id="" action="" method="post"> 
                            <div class="minus-margin-top-md margin-bottom-md">
                            <!-- Check-in and Check-out -->
                                <div class="form-group row no-margin">
                                    <label for="check-in-time" class="col-sm-3 col-form-label label-xl">
                                        Check In:
                                    </label>
                                    <div class="col-sm-9">
                                        <div class='input-group date' id='datetimepicker-check-in'>
                                            <input id="check-in-time" type="text" class="form-control" value=""/>
                                            <input id="checkin-time" type="hidden" name="checkin-date">
                                            
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
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
                                            <input type="text" id="check-out-time" class="form-control" value=""/>
                                            <input id="checkout-time" type="hidden" name="checkout-date">
                                           
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Check-in and check-out -->
                            </div>

                            <div class="">
                                @foreach($images as $activities )
                                    <div class="card card-border">
                                        <div class="row">
                                        
                                            <div class="col-md-3 w-100"
                                                 data-background-image="{{ $activities->image }}"
                                                 style="background-image: url({{asset('uploads/image/'.$activities->image)}});">
                                                <div class="card-block px-3"><strong><a href="">{{ $activities->name }}</a></strong><br>
                                                </div>
                                                <!-- /.card-row-label -->
                                            </div><!-- /.card-row-image -->

                                            <div class="col-md-6 px-3 card-row-body">
                                                <h2 class="card-row-title"><a href="">{{ $activities->name }}</a></h2>
                                                <div class="card-row-content">
                                                    <p>{{ $activities->description }}........</p></div>
                                                <!-- /.card-row-content -->
                                            </div><!-- /.card-row-body -->

                                            <div class="col-md-3">
                                                <dl>

                                                    <dd>Price</dd>
                                                    <dt>${{ $activities->type_ID }} / pax</dt>

                                                    <dd>Quantity</dd>
                                                    <dt>
                                                        
                                                        
                                                    </dt>
                                                </dl>
                                            </div><!-- /.card-row-properties -->
                                        </div><!-- /.card-row-inner -->
                                    </div>
                                    <br>
                                @endforeach
                            </div>

                            <input type="hidden" name="list-booking" id="list-activity">
                            <br>
                            <input type="submit" id="booking-btn" class="btn btn-book btn-primary" value="Book now"/>
                        </form>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</body>
</html>

