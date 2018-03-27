@extends('layouts.app')

@push('styles')
    section {
        padding-top: 45px;
    }
@endpush

@push('title')
    Register
@endpush

@section('content')
    <section>
        <div class="container">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">{{ __('Register') }}</span>
                    <form action="{{ route('register') }}" method="post" id="register-form">
                        @csrf

                        <div class="input-field">
                            <input type="text" name="name" id="name" value="{{ old('name') }}">
                            <label for="name">{{ __('Name') }}</label>
                        </div>

                        <div class="input-field">
                            <input type="email" name="email" id="email" value="{{ old('email') }}">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                        </div>

                        <div class="input-field">
                            <input type="password" name="password" id="password">
                            <label for="password">{{ __('Password') }}</label>
                        </div>

                        <div class="input-field">
                            <input type="password" name="password_confirmation" id="password-confirmation">
                            <label for="password-confirmation">{{ __('Confirm Password') }}</label>
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
                        document.getElementById('register-form').submit();" class="waves-effect waves-dark btn-flat indigo-text">{{ __('Register') }}</a>
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
