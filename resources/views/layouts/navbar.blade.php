<header>
    <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">@csrf</form>
    <nav class="indigo">
        <div class="nav-wrapper container">
            <a href="{{ url('/') }}" class="brand-logo">{{ config('app.name') }}</a>
            <ul class="right hide-on-med-and-down">
                @guest
                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li>
                        <a href="{{ route('register') }}" class="waves-effect waves-dark white indigo-text btn">
                            {{ __('Register') }}
                        </a>
                    </li>
                @else
                    <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
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
