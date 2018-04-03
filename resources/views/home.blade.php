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
            <div class="row">
                <div class="col s12 m8 l8">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Something here</span>
                        </div>
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
