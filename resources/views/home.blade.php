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
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row valign-wrapper">
                    <div class="col s2">
                        <img src="images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                    </div>
                    <div class="col s10">
                        <span class="black-text">
                            This is a square image. Add the "circle" class to it to make it appear circular.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
