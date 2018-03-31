@extends('layouts.app')

@push('styles')
    section {
        padding-top: 45px;
    }
@endpush

@push('title')
    Login
@endpush

@section('content')
    <div class="card indigo" style="margin: 0">
        <div class="container">
            <div class="card-content">
                <h4 class="grey-text text-lighten-4">Login now</h4>
                <h5 class="grey-text text-lighten-2"
                    style="font-weight: 300; font-size: 20px;">
                    Welcome back, let us know who you are!
                </h5>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-content">
                    <form action="{{ route('login') }}" method="post" id="login-form">
                        @csrf

                        <div class="input-field">
                            <input type="email" name="email" id="email" value="{{ old('email') }}">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                        </div>

                        <div class="input-field">
                            <input type="password" name="password" id="password">
                            <label for="password">{{ __('Password') }}</label>
                        </div>

                        <br />
                        <p>
                            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked="checked"' : '' }} />
                            <label for="remember">{{ __('Remember Me') }}</label>
                        </p>
                    </form>
                </div>
                <div class="card-action">
                    <a href="" onclick="event.preventDefault();
                        document.getElementById('login-form').submit();" class="waves-effect waves-dark btn-flat indigo-text">{{ __('Login') }}</a>
                </div>
            </div>
            @if($errors->isNotEmpty())
                <div class="card red">
                    <div class="card-content">
                            <span class="card-title white-text">
                                Oops, some whooping errors
                            </span>
                        @foreach($errors->all() as $error)
                            <ul>
                                <li class="white-text">&longrightarrow; {{ $error }}</li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
