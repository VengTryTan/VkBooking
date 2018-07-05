<!DOCTYPE html>
<html>
<head>
    <title>vKirirom Pine Resort</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cambodia Resort , Pine resort Cambodia, Kirirom resort, Mountain resort cambodia">
    <meta name="description" content="vKirirom Pine Resort located on top of kirirom mountain national park provides you once in a life time experiences. A lot of activities in the fresh air like Jungle trekking, horse riding, fruit picking, team building for corporation as well with new creative delicious cuisine contains organic vegetable from own farm">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{asset('frontend/images/HomePage/favicon.png')}}" type="image/x-icon" />
    <link href="{{asset('frontend/css/lightbox.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- build:css mfb.css -->
    <link href="{{asset('frontend/css/mfb.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('frontend/css/checkin.css')}}" rel="stylesheet"> -->
    <!-- build:js mfb.js -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/camera.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/jquery.lightbox.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/js/mfb.js')}}"></script>

    <!--Start drop menu-->
    <script>
        $(function () {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();

            $(pull).on('click', function (e) {
                e.preventDefault();
                menu.slideToggle();
            });

            $(window).resize(function () {
                var w = $(window).width();
                if (w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
    <!--End drop menu-->
    <script src="{{asset('frontend/js/fbplugin.js')}}"></script>

</head>

<body>
    <!--start-header-->
    <div class="header">
        <div class="wrap">      
            <div class="top-header">
                <div class="logo">
                    <a href="welcome"><img src="{{asset('frontend/images/HomePage/vKirirom.svg')}}" alt="vKirirom logo" title="logo" /></a>
                </div>
                <div class="social-icons">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/vkirirom" target="_blank"><img src="{{asset('frontend/images/facebook.svg')}}" alt="www.facebook.com" title="facebook" /></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCCIu3JTn0s4UX5Kze5Hse0g" target="_blank"><img src="{{asset('frontend/images/youtube.svg')}}" alt="www.youtube.com" title="youtube" /></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/vkirirom/" target="_blank"><img src="{{asset('frontend/images/instagram.svg')}}" alt=" www.instagram.com" title="instagram" /></a>
                        </li>
                        <li id="book-button"><a href="reservation.php">BOOK NOW</a></li>
                    </ul>
                    <div class="facebookprior facebook ">
                        <div class="fb-like" data-href="https://www.facebook.com/vkirirom" data-width="250" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                    </div>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </div>
    <!-- -End-header- -->
    <div class="clear"></div>
</body>

</html>