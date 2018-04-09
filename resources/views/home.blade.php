@extends('layouts.app')

@push('styles')
    section {
        padding-top: 45px;
    }
@endpush

@section('content')
    <div class="card indigo" style="margin: 0">
        <div class="container">
            <div class="card-content">
                <h4 class="grey-text text-lighten-4">Hello, {{ auth()->user()->name }}</h4>
                <h5 class="grey-text text-lighten-2"
                    style="font-weight: 300; font-size: 20px;">
                    Manage everything here, in a single view.
                </h5>
                <div style="padding-top: 20px">
                    <a href="" class="waves-effect waves-dark btn white indigo-text">Profile</a>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            @if(auth()->user()->type === 1)
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align">Admin, here you go</span>
                        <br />
                        <div class="center-align">
                            <a href="{{ url('/') }}" class="waves-effect waves-dark btn green">Create Hackeria</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{ url('/') }}" class="waves-effect waves-dark btn indigo">Manage Users</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{ url('/') }}" class="waves-effect waves-dark btn purple">View logs</a>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col s12 m8 l8">
                    <h4 style="font-weight: 300" class="center-align">Latest Hackeria</h4>
                    <div class="row">
                        @foreach($latestHackeria as $hackeria)
                            <div class="col s12 m6 l6">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="https://lorempixel.com/g/500/500/" alt="{{ $hackeria->title }}">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title">
                                            {{ $hackeria->title }}
                                        </span>
                                        {{ $hackeria->keypoint }}
                                        <br /><br />
                                        <hr>
                                        <br>
                                        <i class="material-icons">location_on</i> {{ $hackeria->location }}
                                    </div>
                                    <div class="card-action">
                                        <a href="{{ url('/') }}">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="card">
                        <div class="card-content">
                            <img src="https://lorempixel.com/g/700/700/" class="circle responsive-img">
                            <div class="center-align">
                                <br />
                                <span class="card-title">{{ auth()->user()->name }}</span>
                                <div class="chip">
                                    <i class="close material-icons">local_post_office</i> {{ auth()->user()->email }}
                                </div>
                                <div class="chip">
                                    <i class="close material-icons">person</i>
                                    @if(auth()->user()->type === 0)
                                        Normal User
                                    @else
                                        Admin
                                    @endif
                                </div>
                            </div>
                            <h5>About Me</h5>
                            <p>{{ auth()->user()->profile->bio }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
