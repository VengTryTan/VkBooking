
<!DOCTYPE HTML>
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
    <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/camera.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/jquery.lightbox.js')}}"></script>
    <!-- build:css mfb.css -->
    <link href="{{asset('frontend/css/mfb.css')}}" rel="stylesheet">
    <!-- build:js mfb.js -->
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
    <!---start-footer---->
    <div class="footer">
        <div class="wrap">
            <div class="footer-grid">
                <h3>About vKirirom</h3>
                <p>vKirirom Pine Resort is located amongst the pine trees of Kirirom Mountain. Here at vKiriom, we try to preserve the natural beauty of the environment. Our building locations are properly studied so that we avoid cutting down many trees.</p>
            </div>
            <div class="footer-grid twitts">
                <h3>Kirirom Institute of Technology</h3>
                <p>
                    <label>KIT</label>adapts a new style of learning with an effective new educational techniques as a boarding school.</p>
                <span onclick="location='http://www.kit.edu.kh/contact.php'">Enroll here !!</span>
                <p>New university for the future in Kirirom Mountain under the vKririom Project. An educational approach that stands amongst the forest.</p>
                <span onclick="location='http://www.kit.edu.kh/index.php'"> More about KIT</span>
            </div>
            <div class="footer-grid">
				<h3>THE MEANING OF OUR LOGO</h3>
				<p>In the logo of vKirirom - you will find '<span style="color: orange;">v</span>' in orange and <span style="color: green;">'Kirirom'</span> in green. The orange colour represents the people who live in Kirirom. This is the colour of joy and creativity. It also reminds us  of the robes monks wear in Cambodia. The green represents the nature and its beauty.</p>
			</div>
            <div class="clear"> </div>
        </div>
        <div class="clear"> </div>
    </div>
    <div class="copy-right">
        <div class="top-to-page">
            <a href="#top" class="scroll"> </a>
            <div class="clear"> </div>
        </div>
        <p>Designed by <a href="http://kit.vkirirom.com/"> Kirirom Institute of Technology</a></p>
    </div>
    <!-- End-footer -->
    <script type="text/javascript">
        var imglightbox = function () {
            $('.specials .img-lightbox').lightBox();
        };

        var gridmargin = function () {
            var grid = document.getElementsByClassName('special-grid');
            for (var i = 0; i < grid.length; i++) {
                grid[i].style.marginBottom = "0.5%";
            };
        };
        $(document).ready(function () {
            imglightbox();
            gridmargin();
        });
    </script>
</body>

</html>