<header>
    <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">@csrf</form>
    <nav class="white">
        <div class="nav-wrapper container">
            <a href="{{ url('/') }}" class="brand-logo black-text">{{ config('app.name') }}</a>
            <ul class="right hide-on-med-and-down">
                @guest
                    <li><a href="{{ route('login') }}" class="black-text">{{ __('Login') }}</a></li>
                    <li>
                        <a href="{{ route('register') }}" class="waves-effect waves-dark lime accent-2 black-text btn">
                            {{ __('Register') }}
                        </a>
                    </li>
                @else
                    <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"
                            class="black-text">{{ __('Logout') }}</a></li>
                    <li>
                        <a class="waves-effect waves-dark lime accent-2 black-text btn z-depth-4" href="#">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>
