
<!--Top Description-->
<div class="container-fluid">
    <br>
    <div class="row">
        <div>
            <a href="{{route('test_home')}}">
                <img src="{{asset('frontend/images/HomePage/vKirirom.png')}}" alt="vKirirom logo" title="logo" />
            </a>
        </div>
        <div class="col-md-8">
            <br>
            <h3>'rKirirom' is a new concept for enriching people's lives for the future</h3>
            <p>We aim to provide services and an atmosphere where everyone enjoys nature while conserving the environment as
                well.
                Visit our restaurant and savour our dishes special our chef has to offer and or stay in one of our innovative
                rooms.
            </p>
        </div>
    </div>
</div>
<!--End Of Top Description-->
<!--Start Of Navigation Bar-->
<nav class="navbar navbar-expand-sm bg-tran navbar-dark sticky-top no-margin-btt">
    <a class="my-navbar-brand" href="#"><span>v</span>Kirirom</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
                
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="my-nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                @if (Route::has('register'))
                <a class="my-nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </li>
                @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
            <li class="nav-item">
                <a class="my-nav-link nav-fa" href="https://www.facebook.com/vkirirom" target="_blank"><i class="fa fa-facebook-official"></i></a>
            </li>
            <li class="nav-item">
                <a class="my-nav-link nav-you" href="https://www.youtube.com/channel/UCCIu3JTn0s4UX5Kze5Hse0g" target="_blank"><i class="fa fa-youtube-play"></i></a>
            </li>
            <li class="nav-item">
                <a class="my-nav-link nav-ins" href="https://www.instagram.com/vkirirom_pine_resort/" target="_blank"><i class="fa fa-instagram"></i></a>
            </li>
        </ul>
    </div>
</nav>
<!--Start Of Navigation Bar-->